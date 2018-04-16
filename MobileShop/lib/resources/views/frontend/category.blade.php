@extends('frontend/master')
@section('title', 'Category')
@section('main')
	<div id="wrap-inner">
		<div class="products">
			<h3>{{$cateNames->cate_name}}</h3>
			<div class="product-list row">
				@foreach($items as $item)
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="{{asset('public/frontend/img/details/'.$item->prod_img)}}" class="img-thumbnail"></a>
					<p><a href="#">{{$item->prod_name}}</a></p>
					<p class="price">{{number_format($item->prod_price,0,',','.')}} VND</p>	  
					<div class="marsk">
						<a href="{{asset('frontend/details/'.$item->prod_id)}}">Xem chi tiết</a>
					</div>                      	                        
				</div> 
				@endforeach
			</div>                	                	
		</div>
		<div aria-label="Page navigation">
			{{ $items->links() }}	
		<div>
		</div>
	</div>
@endsection		
