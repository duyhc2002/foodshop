@extends('layouts.app')

@section('content')
	<div class="row">
		<h5>List Producer</h5>
		@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
		@endif
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Producer Name</th>
		     
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($producers as $key => $pro)
		    <tr>
		      <th scope="row">{{$key}}</th>
		      <td>{{$pro->producerName}}</td>
		      <td>
		      	<a href="{{URL::to('/producers-edit/'.$pro->producerID)}}" class="active styling-edit btn btn-warning" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>Edit</a>

             	 <a onclick="return confirm('Bạn có chắc là muốn xóa này ko?')" href="{{URL::to('/producers-delete/'.$pro->producerID)}}" class="active styling-edit btn btn-danger" ui-toggle-class="">Delete
                <i class="fa fa-times text-danger text"></i>
              </a>
		      </td>
		   
		    </tr>

		   @endforeach
		  </tbody>
		</table>
	</div>
@endsection