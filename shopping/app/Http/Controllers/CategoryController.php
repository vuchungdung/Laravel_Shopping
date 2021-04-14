<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
	public function __construct(Category $category){
		$this->category = $category;
	}

    public function index(){    	
    	$datas = $this->category->latest()->paginate(5);
    	return view('categories.index',['datas' => $datas]);
    }

    public function create(){
    	$datas = $this->category->all();
    }
}
