@extends('backend.master')
@section('title', 'Danh mục')
@section('main')		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<form action="" method="post">
							@include('.../errors/note')
							<div class="panel-body">
								<div class="form-group">
									<label>Tên danh mục:</label>
									<input type="text" name="name_cate" class="form-control" placeholder="Tên danh mục...">
								</div>
							</div>
								<div>
									<input type="submit" name="submit" value="Thêm mới" class="btn btn-primary btn-lg btn-block" />
								</div>
								{{csrf_field()}}
						</form>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              	@foreach($data as $val)
			                  	<tr>
									<td>{{$val['cate_name']}}</td>
									<td>
			                    		<a href="{{asset( 'backend/category/edit/'.$val['cate_id']) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset( 'backend/category/del/'.$val['cate_id']) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr> 
			                  	@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection