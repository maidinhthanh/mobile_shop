@extends('backend.master')
@section('title', 'Sửa danh mục sản phẩm')
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
							Sửa danh mục
						</div>
						<div class="panel-body">
							@include('.../errors/note')
							<div class="form-group">
								<form action="" method="post">
									{{csrf_field()}}
									<label>Tên danh mục:</label>
									<input type="text" name="name_cate" class="form-control" placeholder="Tên danh mục..." value="{{$data['cate_name']}}"><br>
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary btn-lg btn-block" />
								</form>
							</div>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection	