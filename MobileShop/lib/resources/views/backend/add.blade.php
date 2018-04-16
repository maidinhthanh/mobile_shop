@extends('backend/index_user')
@section('main')
<div class="col-sm-6">
@if (isset($errors))
    @foreach($errors->all() as $error) 
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
<form method="post">
	<div class="form-group">
        {{csrf_field()}}
    	<label>Fullname</label>
        <input type="text" name="full" class="form-control" placeholder="Fullname"  />
    </div>
    <div class="form-group">
    	<label>Username</label>
        <input type="text" name="user" class="form-control" placeholder="Username"  />
    </div>
    <div class="form-group">
    	<label>Password</label>
        <input type="password" name="pass" class="form-control" placeholder="Password"  />
    </div>
    <div class="form-group">
    	<label>Email</label>
        <input type="text" name="mail" class="form-control" placeholder="Email"  />
    </div>
    <div class="form-group">
    	<label>Level</label>
        <select name="level" class="form-control">
        	<option value="1">Admin</option>
            <option value="2">Mod</option>
            <option value="3" selected="selected">User</option>
        </select>
    </div>
    <input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" />
</form>
</div>
@endsection
