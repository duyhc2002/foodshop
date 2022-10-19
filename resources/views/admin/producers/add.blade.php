@extends('layouts.app')

@section('content')
	<div class="row">
		<h5>Add Producer</h5>
		@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
		@endif
		<form method="POST" action="{{url('producers-save')}}">
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Producer Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" name="producerName" aria-describedby="emailHelp" placeholder="Enter....">
		   
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
@endsection