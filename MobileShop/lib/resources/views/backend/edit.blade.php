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
        	<label>Fullname</label>
            <input type="text" name="full" class="form-control" placeholder="Fullname" value="{{$user['fullname']}}" required />
        </div>
        <div class="form-group">
        	<label>Username</label>
            <input type="text" name="user" class="form-control" placeholder="Username" value="{{$user['name']}}" required />
        </div>
        <div class="form-group">
        	<label>Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Password" value="{{$user['password']}}" required />
        </div>
        <div class="form-group">
        	<label>Email</label>
            <input type="text" name="mail" class="form-control" placeholder="Email"  value="{{$user['email']}}" required />
        </div>
        <div class="form-group">
        	<label>Level</label>
            <select name="level" class="form-control">
            	<option value="1" @if($user['level']==1) selected @endif>Admin</option>
                <option value="2" @if($user['level']==2) selected @endif>Mod</option>
                <option value="3" @if($user['level']==3) selected @endif>User</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Sửa" class="btn btn-primary" />

        {{csrf_field()}}
    </form>
</div>
@endsection
