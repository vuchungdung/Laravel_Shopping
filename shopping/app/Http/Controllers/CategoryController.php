<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
	public function __construct(Category $category){
		$this->category = $category;
		$this->htmlSelect = '';
	}

    public function index(){    	
    	$datas = $this->category->latest()->paginate(5);
    	return view('categories.index',['datas' => $datas]);
    }

    public function create(){
    	$htmlSelect = $this->CategoryRecusive(0);
    	return view('categories.create',['htmlSelect' => $htmlSelect]);
    }

    function CategoryRecusive($id, $text =''){
    	$datas = Category::all();
    	foreach ($datas as $value) {
    		if($value['parent_id'] == $id){
    			$this->htmlSelect .= '<option value="' . $value['parent_id'] . '">' . $text . $value['name'] . '</option>';
    			$this->CategoryRecusive($value['id'],'-');
    		}
    	}
    	return $this->htmlSelect;
    }
}
