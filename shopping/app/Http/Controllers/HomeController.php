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
        $product_new = $this->product->where('homeflag',1)->orderBy('created_date', 'desc');
        $product_sale = $this->product->where('hotflag',1)->get();
        $living_room = $this->category->where('parentId',72)->get();
        $kitchen_room = $this->category->where('parentId',73)->get();
        return view('home',['datas'=>$datas,
                            'product_hot'=>$product_hot,
                            'living_room'=>$living_room,
                            'kitchen_room'=>$kitchen_room]);
    }
    public function detail($id){
        $item = $this->product->join('product_owners', 'products.ownerId', '=', 'product_owners.id')
                              ->join('categories', 'products.categoryId', '=', 'categories.id')
                              ->select('products.*', 'categories.category_name', 'product_owners.owner_name')
                              ->find($id);
        $datas = $this->product->where('categoryId',$item->categoryId)->get();
        $categories = Category::where('parentId',0)->get();
        return view('client.detail',['item'=>$item,'datas'=>$datas,'categories'=>$categories]);
    }
}
