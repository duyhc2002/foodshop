@extends('layouts.app')

@section('content')
	<div class="row">
		<h5>Edit Producer</h5>
		@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
		@endif
		<form method="POST" action="{{url('producers-update',$producer->producerID)}}">
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Producer Name</label>
		    <input type="text" class="form-control" name="producerName" value="{{$producer->producerName}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
		   
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Edit</button>
		</form>
	</div>
@endsection