@extends('layouts.app')

@section('content')
            
                <div class="col-md-10">
                    <h2>Add new product</h2>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <form action="{{url('save')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                      

                        <div class="md-3">
                            <label for="name" class="form-label">Name</label>
                            <input type= "text" name="name" class="form-control"
                                    placeholder="Enter product name">
                        </div>

                        <div class="md-3">
                            <label for="price" class="form-label">Price</label>
                            <input type= "text" name="price" class="form-control"
                                    placeholder="Enter product price">
                        </div>

                        <div class="md-3">
                            <label for="details" class="form-label">Details</label>
                            <input type= "text" name="details" class="form-control"
                                    placeholder="Enter product details">
                        </div>

                        <div class="md-3">
                            <label for="image1" class="form-label">Image</label>
                            <input type= "file" name="image1" required class="form-control"
                                    placeholder="Enter product image">
                        </div>

                        <div class="md-3">
                            <label for="producer" class="form-label">Producer</label>

                            <select class="form-control" name="producer">
                                @foreach($producers as $key => $pro)
                                <option value="{{$pro->producerID}}">{{$pro->producerName}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('list')}}" class="btn btn-success">Back</a> 
                    </form>
           
            @endsection

        