@if (isset($errors))
	@foreach($errors->all() as $error)
		<div class="alert alert-warning">
		  <strong>{{$error}}</strong> 
		</div>
	@endforeach
@endif

@if (Session::has('addok'))
	<div class="alert alert-succsess">
		  <strong>{{Session('addok')}}</strong> 
	</div>
@endif

@if (Session::has('editok'))
	<div class="alert alert-succsess">
		  <strong>{{Session('editok')}}</strong> 
	</div>
@endif

@if (Session::has('delok'))
	<div class="alert alert-succsess">
		  <strong>{{Session('delok')}}</strong> 
	</div>
@endif
