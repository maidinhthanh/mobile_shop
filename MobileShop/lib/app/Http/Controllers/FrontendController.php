<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Category;

use App\Models\Comment;

use Illuminate\Support\Facades\DB;

use Session;

use Mail;

class FrontendController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
    	$data['featured'] = Product::where('prod_featured',1)->orderBy('prod_id','desc')->take(8)->get();
    	$data['news'] = Product::orderBy('prod_id','desc')->take(8)->get();
    	return view('frontend/home', $data);
    }

    public function getDetails($id)
    {
    	$data['details'] = Product::find($id);
    	$data['cmts'] = Comment::where('com_product',$id)->orderBy('com_id','desc')->get();
    	return view('frontend/details', $data);
    }

    public function postDetails(Request $request, $id)
    {
    	$data = [
    		'com_email'=>$request->email,
    		'com_name'=>$request->name,
    		'com_content'=>$request->content,
    		'com_product'=>$id
    	];
    	Comment::create($data);
    	return redirect()->back();
    }

    public function category($id)
    {
    	$data['cateNames'] = Category::find($id);
        /** @var TYPE_NAME $data */
        $data['items'] = Product::where('prod_cate', $id)->orderBy('prod_id', 'desc')->paginate(8);
    	//dd($data);
    	return view('frontend/category', $data);
    }

    public function search(Request $request)
    {
    	$result = $request->result;
    	$data['keyword'] = $result;
    	$result = str_replace(' ','%', $result);
    	$data['items'] = Product::where('prod_name','like',"%$result%")->paginate(8);
    	return view('frontend/search', $data);
    } 
}
