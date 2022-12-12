<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Built Better</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('asset/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('asset/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('asset/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{url('asset/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('asset/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{url('asset/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{url('asset/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>

      @include('layouts.header')

       @yield('content')

     @include('layouts.footer')
      <!-- copyright section start -->
      <div class="copyright_section">
      <div class="container">
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="{{url('asset/images/fb-icon.png')}}"></a></li>
               <li><a href="#"><img src="{{url('asset/images/twitter-icon.png')}}"></a></li>
               <li><a href="#"><img src="{{url('asset/images/instagram-icon.png')}}"></a></li>
               <li><a href="#"><img src="{{url('asset/images/linkedin-icon.png')}}"></a></li>
            </ul>
         </div>
         <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{url('asset/js/jquery.min.js')}}"></script>
      <script src="{{url('asset/js/popper.min.js')}}"></script>
      <script src="{{url('asset/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('asset/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('asset/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{url('asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('asset/js/custom.js')}}"></script>
      <!-- javascript -->
      <script src="{{url('asset/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
