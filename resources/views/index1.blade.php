<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Food Shop</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <!-- owl css -->
      <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
      <!-- responsive-->
      <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('frontend/images/loading.gif')}}" alt="" /></div>
      </div>
      <div class="wrapper">
      <!-- end loader -->
      <div class="sidebar">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div id="dismiss">
               <i class="fa fa-arrow-left"></i>
            </div>
            <ul class="list-unstyled components">
               <li class="active">
                  <a href="{{url('/')}}">Home</a>
               </li>
               <li>
                  <a href="#">About</a>
               </li>
                 @if(!Session::get('customer_username'))
               <li>
                  <a href="{{url('signin')}}">Login</a>

               </li>
                <li>
                  <a href="{{url('register_customer')}}">Sign In</a>
                 <a class="button" href="{{url('information/'.Session::get('customer_id'))}}">Information </a>
               </li>
               @else

               <li>
                  <a href="{{url('logout')}}">Logout</a>
               </li>
               @endif
              
               <li>
                  <a href="#">Contact Us</a>
               </li>
            </ul>
         </nav>
      </div>
      <div id="content">
      <!-- header -->
      <header>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-3">
                  <div class="full">
                     <a class="logo" href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="#" /></a>
                  </div>
</div>
               <div class="col-md-9">
                  <div class="full">
                     <div class="right_header_info">
                        <ul>
                           <li class="dinone">Contact Us : <img style="margin-right: 15px;margin-left: 15px;" src="{{asset('frontend/images/phone_icon.png')}}" alt="#"><a href="#">093345678</a></li>
                           <li class="dinone"><img style="margin-right: 15px;" src="{{asset('frontend/images/mail_icon.png')}}" alt="#"><a href="#">Food_Shop@gmail.com</a></li>
                           <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="{{asset('frontend/frontend/images/location_icon.png')}}" alt="#"><a href="#">232/45 tan binh, Ho Chi Minh</a></li>
                           @if(!Session::get('customer_username'))
                           <li class="button_user"><a class="button active" href="{{url('signin')}}">Login</a>
                             <a class="button" href="{{url('register_customer')}}">Sign in</a></li>
                            @else
                             <li class="button_user"><a class="button active" href="{{url('logout')}}">Logout : {{Session::get('customer_username')}}</a>
                              <li class="button_user"><a class="button" href="{{url('information/'.Session::get('customer_id'))}}">Information </a>
                            @endif

                           
                           <li><img style="margin-right: 15px;" src="{{asset('frontend/images/search_icon.png')}}" alt="#"></li>
                           <li>
                              <button type="button" id="sidebarCollapse">
                              <img src="{{asset('frontend/images/menu_icon.png')}}" alt="#">
                              </button>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- start slider section -->
      <div class="slider_section">
      <div class="container">
      <div class="row">
      <div class="col-md-12">
      <div class="full">
      <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="row">
                  <div class="col-md-5">
                     <div class="slider_cont">
                        <h3>Welcome to our website <br>We are ready to serve</h3>
                        <p>We have a wide selection of foods that are healthy and delicious.</p>
                        <!-- <a class="main_bt_border" href="#">Order Now</a> -->
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="slider_image full text_align_center">
<img class="img-responsive" src="{{asset('frontend/images/burger_slide.png')}}" alt="#" />
                     </div>
                  </div>
               </div>
            </div>
            <!-- end slider section -->
            <!-- section -->
            <section class="resip_section">
               <div class="container">
                  @yield('content')
               </div>
            </section>
            <div class="bg_bg">
               <!-- about -->
               <div class="about">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="title">
                              <i><img src="{{asset('frontend/images/title.png')}}" alt="#"/></i>
                              <h2>About Our Food & Restaurant</h2>
                              <span>Find the best food from your neighboring restaurants with the help of this online food ordering websites.
                              <br> People can find their food with the help Food Shop.
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                           <!-- <div class="about_box">
                              <h3>Best Food</h3>
                              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard </p>
                              <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                              </div>
                              <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                              <div class="about_img">
                              <figure><img src="{{asset('frontend/images/about-img.jpg')}}" alt="#/"></figure>
                              </div> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end about -->
               <!-- blog -->
               <div class="blog">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="title">
                              <i><img src="{{asset('frontend/images/title.png')}}" alt="#"/></i>
                              <h2>Our Blog</h2>
<span>Do you ever come home from a long day at work and just can’t bring yourself to make dinner? you also don't have the energy to go out ?
                              <br>but you also don't want to eat fast food all the time, then we have a solution for you try our service as we will deliver delicious food right to your doorstep
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                           <div class="blog_box">
                              <div class="blog_img_box">
                                 <figure><img src="{{asset('frontend/images/blog_img1.png')}}" alt="#"/>
                                    <span>02 FEB 2019</span>
                                 </figure>
                              </div>
                              <h3>Noodle</h3>
                              <p>noodle, a cooked egg-and-flour paste prominent in European and Asian cuisine, generally distinguished from pasta by its elongated ribbonlike form. Noodles are commonly used to add body and flavour to broth soups. They are commonly boiled or sautéed and served with sauces and meats or baked in casseroles. </p>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                           <div class="blog_box">
                              <div class="blog_img_box">
                                 <figure><img src="{{asset('frontend/images/blog_img2.png')}}" alt="#"/>
                                    <span>02 FEB 2019</span>
                                 </figure>
                              </div>
                              <h3>Grilled Cheese Sandwich</h3>
                              <p>Nothing says comfort food to me like a grilled cheese sandwich does, but I’m a big girl now, and I love grown-up grilled cheese sandwiches with fabulous breads. </p>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                           <div class="blog_box">
                              <div class="blog_img_box">
                                 <figure><img src="{{asset('frontend/images/blog_img3.png')}}" alt="#"/>
                                    <span>02 FEB 2019</span>
                                 </figure>
                              </div>
                              <h3>Banh Mi</h3>
                              <p>A short baguette with thin, crisp crust and soft, airy texture. It is often split lengthwise and filled with savory ingredients like a submarine sandwich and served as a meal, called bánh mì thịt. Plain banh mi is also eaten as a staple food. </p>
                           </div>
                        </div>
</div>
                  </div>
               </div>
               <!-- end blog -->
               <!-- Our Client -->
               <!-- <div class="Client">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="title">
                          <i><img src="{{asset('frontend/images/title.png')}}" alt="#"/></i>
                          <h2>Our Client</h2>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                         <div class="Client_box">
                           <img src="{{asset('frontend/images/client.jpg')}}" alt="#"/>
                           <h3>Roock Due</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.</p>
                           <i><img src="{{asset('frontendimages/client_icon.png')}}" alt="#"/></i>
                         </div>
                      </div>
                    </div>
                  </div>
                  </div>   -->
               <!-- end Our Client -->
            </div>
            <!-- footer -->
            <fooetr>
               <div class="footer">
                  <div class="container-fluid">
                  
                     <div class="row">
                        <div class="col-md-12">
                           <div class="footer_logo">
                              <a href="index.html"><img src="{{asset('frontend/images/logo1.jpg')}}" alt="logo" /></a>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <ul class="lik">
                              <li class="active"> <a href="index.html">Home</a></li>
                              <li> <a href="about.html">About</a></li>
                              <li> <a href="recipe.html">Product</a></li>
                              <li> <a href="blog.html">Blog</a></li>
                              <li> <a href="contact.html">Contact us</a></li>
                           </ul>
                        </div>
                        <div class="col-md-12">
                           <div class="new">
                              <h3>Newsletter</h3>
                              <form class="newtetter">
                                 <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                 <button class="submit">Subscribe</button>
                              </form>
                           </div>
</div>
                     </div>
                  </div>
                  <div class="copyright">
                     <div class="container">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </fooetr>
            <!-- end footer -->
         </div>
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
      <script src="{{asset('frontend/js/popper.min.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('frontend/js/custom.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <style>
         #owl-demo .item{
         margin: 3px;
         }
         #owl-demo .item img{
         display: block;
         width: 100%;
         height: auto;
         }
      </style>
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>
   </body>
</html>
