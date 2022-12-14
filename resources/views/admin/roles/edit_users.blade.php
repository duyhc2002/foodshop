@extends('layouts.app')

@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           <b>Cập nhật thông tin</b>
                        </header>
                         @if ($errors->any())

                            <div class="alert alert-danger">

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">
                            @foreach($edit_users as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-users/'.$edit_value->id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên users</label>
                                    <input type="text" value="{{$edit_value->name}}" name="name" class="form-control" id="exampleInputEmail1" >
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" value="{{$edit_value->email}}" name="email" class="form-control" id="exampleInputEmail1" >
                                </div>
                               
                               
                                <button type="submit" name="update_category_product" class="btn btn-danger">Cập nhật users</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection