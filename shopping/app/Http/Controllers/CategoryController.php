<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Exception;
use Illuminate\Support\Str;

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

	public function save(Request $request){
		try{
			$this->category->create([
				'name'=>$request->name,
				'parentId'=>$request->parentId,
				'alias'=>Str::slug($request->name,'-')
			]);
			return redirect('/categories/create')->with('status', 'Thêm thành công!');
		}
		catch(Exception $e){
			report($e);
			return redirect('/categories/create')->with('status', 'Thêm thất bại!');
		}
	}

    function CategoryRecusive($id, $text =''){
    	$datas = Category::all();
    	foreach ($datas as $value) {
    		if($value['parentId'] == $id){
    			$this->htmlSelect .= '<option value="' . $value['id'] . '">' . $text . $value['name'] . '</option>';
    			$this->CategoryRecusive($value['id'],$text . '--');
    		}
    	}
    	return $this->htmlSelect;
    }
}
