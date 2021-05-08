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
        $product_hot = $this->product->where('hotflag',1)->get();
        return view('home',['datas'=>$datas,'product_hot'=>$product_hot]);
    }
    public function detail($id){
        $item = $this->product->find($id);
        $datas = $this->product->where('categoryId',$item->categoryId)->get();
        return view('client.detail',['item'=>$item,'datas'=>$datas]);
    }
}
