<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\Category;

use Illuminate\Support\Facades\DB;

use Session;

use Auth;

use Illuminate\Http\Request;

use App\Http\Requests\AddtProdRequest;

class ProductController extends Controller
{
    public function getProd()
    {
    	$data= DB::table('vp_products')
    				->join('vp_categories', 'vp_products.prod_cate', '=', 'vp_categories.cate_id')
    				->orderBy('prod_id', 'desc')->paginate(8);
    	return view('backend/product', ['data'=>$data]);
    }

    public function getAddProd()
    {
    	$data['listCate'] = Category::all();
    	return view('backend/addproduct', $data);
    }
    public function postAddProd(AddtProdRequest $request)
    {
    	$file = $request->file('img');
    	$fileName = $file->getClientOriginalName('img');

    	$data = [
    		'prod_name'=>$request->name,
    		'prod_slug'=>str_slug($request->name),
    		'prod_price'=>$request->price,
    		'prod_img'=>$fileName,
    		'prod_accessories'=>$request->accessories,
    		'prod_warranty'=>$request->warranty,
    		'prod_promotion'=>$request->promotion,
    		'prod_condition'=>$request->condition,
    		'prod_status'=>$request->status,
    		'prod_description'=>$request->description,
    		'prod_cate'=>$request->cate,
    		'prod_featured'=>$request->featured,
    	];
    	Product::create($data);
    	return redirect('backend/product');
    }

     public function getEditProd($prod_id)
    {
    	$data['product'] = Product::find($prod_id);
    	$data['listCate'] = Category::all();
    	return view('backend/editproduct', $data);
    }
    public function postEditProd(Request $request, $prod_id)
    {
    	$file = $request->file('img');
    	$fileName = $file->getClientOriginalName('img');
    	$data = [
    		'prod_name'=>$request->name,
    		'prod_slug'=>str_slug($request->name),
    		'prod_price'=>$request->price,
    		'prod_img'=>$fileName,
    		'prod_accessories'=>$request->accessories,
    		'prod_warranty'=>$request->warranty,
    		'prod_promotion'=>$request->promotion,
    		'prod_condition'=>$request->condition,
    		'prod_status'=>$request->status,
    		'prod_description'=>$request->description,
    		'prod_cate'=>$request->cate,
    		'prod_featured'=>$request->featured,
    	];
    Product::find($prod_id)->update($data);	
    return redirect('backend/product');
    }

    public function delProd($prod_id)
    {
    	Product::find($prod_id)->delete();	
    	return redirect('backend/product');
    }
}
