<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;

use App\Models\Product;

class CartController extends Controller
{
    public function getAddCart($id)
    {
    	$product = Product::find($id);
    	Cart::add(['id' => $id,'name'=>$product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 'options' => ['img' => $product->prod_img]]);
    	return redirect('frontend/cart/show');
    }
    public function getShowCart()
    {
    	$data['total'] = Cart::total();
    	$data['items'] = Cart::content();
    	return view('frontend/cart', $data);
    }
    public function getDelCart($id)
    {
    	if ($id == 'all') {
    		Cart::destroy();
    	} else {
    		Cart::remove($id);
    	}
    	return back();
    }
    public function getUpdateCart(Request $request)
    {
    	Cart::update($request->rowId, $request->qty);
    }
}
