<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->htmlColor = '';
        $this->htmlCategory = '';
        $this->htmlOwner = '';
    }

    public function index(){
        $datas = $this->product->all();
    	return view('products.index',['datas' => $datas]);
    }

    public function create(){
        $htmlCategory = $this->getcategory();
        return view('products.create',['htmlCategory' => $htmlCategory]);
    }

    public function save(Request $requets){
    	return view('products.create');
    }

    function getcategory(){
    	$datas = Category::all();
    	foreach ($datas as $value) {
    		$this->htmlCategory .= '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
    	}
    	return $this->htmlCategory;
    }
}
