@extends('admin.layout.layout_login')
@section('content')
	<h3>Login Admin</h3>
	<form method="POST" action="{{url('loginProcess')}}">

		@csrf
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Username">
	   
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Password">
	  </div>
	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Go Admin</button>
	</form>
@endsection