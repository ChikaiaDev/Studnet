<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
   <link rel="stylesheet" media="screen" href="{{ asset('css/vendor.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Main Styles-->
    
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{ asset('css/styles.min.css')}}">
    <!-- Modernizr-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <style media="screen">


  

body{
  background: url("images/images.jpg");
  background-repeat: no-repeat;
  background-size: 100% ;
}
.active{
    text-decoration: underline;
    color: #222;
}


      .page-header {
          height: 320px;
  color: #fff;
  text-align: center;
  background-color: #159957;
  background-image: linear-gradient(120deg, #155799, #159957);
}
  @media screen and (min-width: 64em) {
    .page-header {
      padding: 5rem 6rem; } }
  @media screen and (min-width: 42em) and (max-width: 64em) {
    .page-header {
      padding: 3rem 4rem; } }
  @media screen and (max-width: 42em) {
    .page-header {
      padding: 2rem 1rem; } }
      body{
        padding-top: 0px;
        font-size: 16px;
        height:200px;
                }
    .active-like{
      text-decoration: underline;
      color: #f2fcfc;
    }
    .page-header {
    padding-bottom: 10px;
    margin: 0px 0 22px;
    border-bottom: 1px solid #eee;
}
.offcanvas-wrapper {

    background: #a9cdd9;
}
.navbar {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 64px;
    border-bottom: 1px solid #3f3c41;
    background-color: #1c1e23;
    z-index: 9000;
    margin-bottom: 0px;

}
.site-footer{
    position: relative;
}
  .site-menu {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    text-align: center;
    z-index: 1;
}
  img, figure {
    max-width: 600px;
    height: auto;
    vertical-align: middle;
}
    </style>

  </head>
  <!-- Body-->
  <body>
    <!-- Off-Canvas Category Menu-->
  
    <!-- Off-Canvas Mobile Menu-->
    
    <!-- Topbar-->
   
    <!-- Navbar-->
   
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->
   
                    
                    <div id="app">

                    @include('inc.nav')
                    @yield('page-header')


                    
                    
                        @yield('content')
                    </div>
                    



    
      <div>
      <!-- Site Footer-->
      @include('inc.footer')
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/scripts.min.js') }}"></script>
    <script>
      $(document).ready(function(){
          $('.like').click(function(e){
            e.preventDefault();

            var like= e.target.previousElementSibling == null;
            var postid = e.target.parentNode.dataset['postid'];
            var data ={
                isLike: like,
                post_id: postid

            }
            axios.post('/like', data).then(response =>{
                e.currentTarget.className = "btn btn-link like active"

            })

          });
      });
    </script>
  </body>
</html>