@extends('layouts.app')

@section('content')

 <div class="row">
            <div class="col-md-12">
                <h2>Product List</h2>
                @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                @endif
                <div style="margin-right:10%;float:right;">
                    <a href="{{url('add')}}" class="btn btn-outlne-souccess">Add New</a>
                </div>
                <table class="table table-hover">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Producer</th>
                                    <th>Actions</th>
                                </tr> 
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>   
                                    <td>{{$row->productID}}</td>    
                                    <td>{{$row->productName}}</td>    
                                    <td>{{$row->productPrice}}</td>    
                                    <td><img src="{{asset('uploads/food/'.$row->productImage1)}}" height="150" width="150"></td>   
                                    <td>@foreach($producers as $key => $pro)
                                            @if($pro->producerID == $row->producerID)
                                                    {{$pro->producerName}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{url('edit/'.$row->productID)}}" class = "btn btn-primary">Edit</a>
                                        <a href="{{url('delete/'.$row->productID)}}" class = "btn btn-danger"
                                                onclick="return confirm('Are you sure?');">Delete</a>
                                    
                                    </td>    

                            
                                </tr>
                            @endforeach
                        </tbody>
                </table> 
            </div>   
        </div>            @endsection