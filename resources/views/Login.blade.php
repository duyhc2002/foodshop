 @extends('index1')
@section('content')
<div class="footer">
                  <div class="container-fluid">
                     <div class="row">
                        <div class=" col-md-12">
                           <h2>Login  C<strong class="white">ustomers</strong></h2>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <form class="main_form" method="POST" action="{{url('login-form')}}">
                                @csrf
                              <div class="row">
                              
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="email" type="email" name="email">
                                 </div>
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="password" type="password" name="password">
                                 </div>
                               
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Login</button>
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