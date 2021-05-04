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
    	$datas = $this->category->all();
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

    function CategoryRecusive($parentid, $text =''){
    	$datas = Category::all();
    	foreach ($datas as $value) {
    		if($value['parentId'] == $parentid){
    			$this->htmlSelect .= '<option value="' . $value['id'] . '">' . $text . $value['name'] . '</option>';
    			$this->CategoryRecusive($value['id'],$text . '--');
    		}
    	}
    	return $this->htmlSelect;
    }

	function CategoryRecusiveEdit($curentparentid ,$parentid = 0, $submark=''){
		$datas = Category::where('parentId',$parentid)->get();
		foreach($datas as $value){
			if($value->id == $curentparentid){
				$this->htmlSelect .= '<option selected value="' . $value['id'] . '">' . $submark . $value['name'] . '</option>';
			}
			else{
				$this->htmlSelect .= '<option value="' . $value['id'] . '">' . $submark . $value['name'] . '</option>';
			}
			$this->CategoryRecusiveEdit($curentparentid, $value['id'], $submark . '--');
		}
		return $this->htmlSelect;
	}

	public function edit($id){	
		$item = $this->category->find($id);
		$htmlSelect = $this->CategoryRecusiveEdit($item['parentId'],0);
		return view('categories.edit',['htmlSelect' => $htmlSelect,'item' => $item]);
	}

	public function delete($id)
    {
        $category = $this->category->find($id);
        $category->delete();
        return redirect('/categories/index')->with('status', 'Xóa thành công!');
    }

	public function saveedit($id,Request $request){
		try{
			$this->category->find($id)->update([
				'name'=>$request->name,
				'parentId'=>$request->parentId,
				'alias'=>Str::slug($request->name,'-')
			]);
			return redirect('/categories/edit/'.$id)->with('status', 'Cập nhật thành công!');
		}
		catch(Exception $e){
			report($e);
			return redirect('/categories/index')->with('status', 'Cập nhật thất bại!');
		}
	}
}
