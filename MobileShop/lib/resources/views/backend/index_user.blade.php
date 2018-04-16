<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
#logout{
	padding-right:30px;}		
</style>
</head>
<body>

<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href="{{asset('backend/admin')}}">Home</a></li>
                        <li><a href="{{asset('backend/admin')}}">Users</a></li>
                        <li><a href="{{asset('backend/add')}}">Add user</a></li>
                	</ul>
                    <p id="logout" class="navbar-text navbar-right"><a class="navbar-link" href="{{asset('backend/logout')}}"> Logout</a></p>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    <!-- main -->
    @yield('main')
    <!-- endmain -->
    </div>
</div>

</body>
</html>