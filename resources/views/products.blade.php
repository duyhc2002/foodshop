 @extends('index1')
@section('content')
 <div class="row">
                     <div class="col-md-12">
                        <div class="ourheading">
                           <h2>Our Products</h2>
                        </div>
                     </div>
                     <div class="container">
                        <div class="row">

                           <div class="col-md-12">
                              <div class="owl-carousel owl-theme">
                                 @foreach($product as $key => $pro)
                                 <form action="{{url('buy-foods')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$pro->productID}}" name="productID">
                                 <div class="item">
                                    <div class="product_blog_img">
                                       <a href="#"><img src="{{asset('uploads/food/'.$pro->productImage1)}}" alt="#" /></a>
                                    </div>
                                    <div class="product_blog_cont">
                                       <h3>{{$pro->productName}}</h3>
                                       @if(Session::get('customer_username'))
                                       <input type="submit" value="Buy Food" class="btn btn-success"> 
                                       <h4><span>{{number_format($pro->productPrice,0,',',',')}}</span class="theme_color">VND</h4>
                                          @else

                                          <a href="{{url('/signin')}}" class="btn btn-primary">Login to Buy</a>
                                          @endif
                                    </div>
                                 </div>
                              </form>
                                 @endforeach
                                
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endsection