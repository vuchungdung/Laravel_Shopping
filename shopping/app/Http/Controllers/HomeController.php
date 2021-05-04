<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(Product $product, Category $category){
		$this->product = $product;
        $this->category = $category;
	}

    public function index(){
        $datas = Category::where('parentId',0)->get();
        return view('home',['datas'=>$datas]);
    }
}
