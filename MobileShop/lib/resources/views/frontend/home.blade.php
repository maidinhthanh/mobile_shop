@extends('frontend/master')
@section('title', 'Home')
@section('main')
	<div id="wrap-inner">
		<div class="products">
			<h3>sản phẩm nổi bật</h3>
			<div class="product-list row">
			@foreach($featured as $product)
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img height="150px" width="120px" src="{{asset('public/frontend/img/details/'.$product->prod_img)}}" class="img-thumbnail"></a>
					<p><a href="#">{{$product->prod_name}}</a></p>
					<p class="price">{{number_format($product->prod_price,0,',','.')}} VND</p>	  
					<div class="marsk">
						<a href="{{asset('frontend/details/'.$product->prod_id)}}">Xem chi tiết</a>
					</div>                                     
				</div> 
			@endforeach              	                	
		</div>

		<div class="products">
			<h3>sản phẩm mới</h3>
			<div class="product-list row">
				@foreach($news as $product)
					<div class="product-item col-md-3 col-sm-6 col-xs-12">
						<a href="#"><img height="150px" width="120px" src="{{asset('public/frontend/img/details/'.$product->prod_img)}}" class="img-thumbnail"></a>
						<p><a href="#">{{$product->prod_name}}</a></p>
						<p class="price">{{number_format($product->prod_price,0,',','.')}} VND</p>	  
						<div class="marsk">
							<a href="{{asset('frontend/details/'.$product->prod_id)}}">Xem chi tiết</a>
						</div>                      	                        
					</div>
				@endforeach 
			</div>    
		</div>
	</div>
@endsection			
					
