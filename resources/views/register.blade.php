 @extends('index1')
@section('content')
<div class="footer">
                  <div class="container-fluid">
                     <div class="row">
                        <div class=" col-md-12">
                           <h2>Register  C<strong class="white">ustomers</strong></h2>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <form class="main_form" method="POST" action="{{url('register-form')}}">
                              @csrf
                              <div class="row">
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Username" type="text" name="username">
                                 </div>
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="email">
                                 </div>
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone" type="text" name="phone">
                                 </div>
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Address" type="text" name="address">
                                 </div>
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Password" type="text" name="password">
                                 </div>
                               
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Sign In</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/img.jpg" alt="img" /></figure>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  
               </div>
                 @endsection