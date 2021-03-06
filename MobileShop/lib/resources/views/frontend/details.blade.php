@extends('frontend/master')
@section('title', 'Hoàn thành')
@section('main')
<link rel="stylesheet" href="css/details.css">

	<div id="wrap-inner">
		<div id="product-info">
			<div class="clearfix"></div>
			<h3>{{$details->prod_name}}</h3>
			<div class="row">
				<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
					<img width="200px" height="240px" src="{{asset('public/frontend/img/details/'.$details->prod_img)}}">
				</div>
				<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
					<p>Giá: <span class="price">{{number_format($details->prod_price,0,',','.')}} VND</span></p>
					<p>{{$details->prod_warranty}}</p> 
					<p>{{$details->prod_accessories}}</p>
					<p>{{$details->prod_condition}}</p>
					<p>Khuyến mại: {{$details->prod_promotion}}</p>
					<p> Còn hàng: @if($details->prod_status==1)Còn hàng @else Hết hàng @endif </p>
					<p class="add-cart text-center"><a href="{{asset('frontend/cart/add/'.$details->prod_id)}}">Đặt hàng online</a></p>
				</div>
			</div>							
		</div>
		<div id="product-detail">
			<h3>Chi tiết sản phẩm</h3>
			<p class="text-justify">{!!$details->prod_description!!}</p>
		</div>
		<div id="comment">
			<h3>Bình luận</h3>
			<div class="col-md-9 comment">
				<form method="post">
					<div class="form-group">
						<label for="email">Email:</label>
						<input required type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="name">Tên:</label>
						<input required type="text" class="form-control" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="cm">Bình luận:</label>
						<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-default">Gửi</button>
					</div>
					{{csrf_field()}}
				</form>
			</div>
		</div>
		<div id="comment-list">
			@foreach($cmts as $cmt)
				<ul>
					<li class="com-title">
						{{$cmt->com_name}}
						<br>
						<span>{{date('d/m/Y H:i',strtotime($cmt->created_at))}}</span>	
					</li>
					<li class="com-details">
						{!!$cmt->com_content!!}
					</li>
				</ul>
			@endforeach
		</div>
	</div>					
	<!-- end main -->
@endsection
