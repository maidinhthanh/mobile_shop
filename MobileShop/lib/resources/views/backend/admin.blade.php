@extends('backend/index_user')
@section('main')
<div class="col-sm-12">
    @if (Session::has('alertok'))
        <div class="alert alert-success">{{Session('alertok')}}</div>
    @endif

    @if (Session::has('delok'))
        <div class="alert alert-success">{{Session('delok')}}</div>
    @endif

    @if (Session::has('editok'))
        <div class="alert alert-success">{{Session('editok')}}</div>
    @endif
	<table class="table table-striped">
    	<tr id="tbl-first-row">
        	<td width="5%">id</td>
            <td width="30%">Fullname</td>
            <td width="25%">Username</td>
            <td width="25%">Email</td>
            <td width="5%">Level</td>
            <td width="5%">Edit</td>
            <td width="5%">Delete</td>
        </tr>
        @foreach($users->all() as $user)
            <tr>
            	<td>{{$user->id}}</td>
                <td>{{$user->fullname}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->level}}</td>
                <td><a href="{{asset('backend/edit/'.$user->id)}}">Edit</a></td>
                <td><a href="{{asset('backend/del/'.$user->id)}}">Delete</a></td>
            </tr>
        @endforeach
	</table>
    <div aria-label="Page navigation">
    	<ul class="pagination">
        	{{ $users->links() }}
        </ul>
    </div>
</div>
@endsection
