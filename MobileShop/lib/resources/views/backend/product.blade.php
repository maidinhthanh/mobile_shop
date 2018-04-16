@extends('backend/master')
@section('title', 'Sản phẩm')
@section('main')	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('backend/product/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@if (isset($data))
									@foreach($data as $val)
										<tr>
											<td>{{$val->prod_id}}</td>
											<td>{{$val->prod_name}}</td>
											<td>{{number_format($val->prod_price,0,',','.')}} VND</td>
											<td>
												<img width="140px" height="160px" src="{{asset('lib/storage/app/image/'.$val->prod_img)}}" class="thumbnail">
											</td>
											<td>{{$val->cate_name}}</td>
											<td>
												<a href="{{asset('backend/product/edit/'.$val->prod_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('backend/product/del/'.$val->prod_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										@endforeach
										@endif
										</tr>
									</tbody>
								</table>
								<div aria-label="Page navigation">
                				{{ $data->links() }}	
                				<div>						
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection