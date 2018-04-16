<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddCateRequest;

use App\Http\Requests\EditCateRequest;

use App\Models\Category;

use App\Http\Requests\LoginRequest;

use Session;

use Auth;

class CategoryController extends Controller
{
    public function getCate()
    {	$user = Auth::user()->toArray();
    	$data = Category::all()->toArray();
    	return view('backend/category', ['data'=>$data, 'user'=>$user]);
    }
    public function postCate(AddCateRequest $request)
    {
    	$data = [
    		'cate_name'=>$request->name_cate,
    		'cate_slug'=>str_slug($request->name_cate)
    	];
    	Category::create($data);
    	Session::flash('addok', 'Thêm danh mục thành công!');
    	return back();
    }

    public function getEditCate($cate_id)
    {
    	$data = Category::find($cate_id)->toArray();
    	return view('backend/editcategory', ['data'=>$data]);
    }
    public function postEditCate(EditCateRequest $request, $cate_id)
    {
    	$data = [
    		'cate_name'=>$request->name_cate,
    		'cate_slug'=>str_slug($request->name_cate)
    	];
    	Category::find($cate_id)->update($data);
    	Session::flash('editok', 'Sửa sản phẩm thành công!');
    	return redirect('backend/category');
    }

    public function delCate($cate_id)
    {
    	Category::find($cate_id)->delete();
    	Session::flash('delok', 'Xóa sản phẩm thành công!');
    	return redirect('backend/category');
    }
}
