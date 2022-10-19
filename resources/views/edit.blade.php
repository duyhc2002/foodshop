@extends('layouts.app')

@section('content')
            <div class="row">
                <div class="col-md-12">
                    <h2>edit product</h2>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                        @endif
                    <form action="{{url('update',$data->productID)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      

                        <div class="md-3">
                            <label for="name" class="form-label">Name</label>
                            <input type= "text" name="name" class="form-control"
                                        value="{{$data->productName}}">
                        </div>

                        <div class="md-3">
                            <label for="price" class="form-label">Price</label>
                            <input type= "text" name="price" class="form-control"
                                 value="{{$data->productPrice}}">
                        </div>

                        <div class="md-3">
                            <label for="details" class="form-label">Details</label>
                            <input type= "text" value="{{$data->productDetails}}" name="details" class="form-control">
                                     
                        </div>

                        <div class="md-3">
                            <label for="image1" class="form-label">Image</label>
                            <input type= "file" name="image1" class="form-control"
                                    placeholder="Enter product image">
                                    <img src="{{asset('uploads/food/'.$data->productImage1)}}" height="150" width="150">
                        </div>

                        <div class="md-3">
                            <label for="producer" class="form-label">Producer</label>
                            <select class="form-control" name="producer">
                                @foreach($producers as $key => $pro)
                                <option {{$pro->producerID == $data->producerID ? 'selected' : ''}} value="{{$pro->producerID}}">{{$pro->producerName}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('list')}}" class="btn btn-success">Back</a> 
                    </form>
            </div>
            @endsection