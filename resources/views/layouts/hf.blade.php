<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset ('touch-icon-ipad.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/vendor.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="site-menu navbar navbar-default navbar-static-top">
     <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
        <ul>
          <li><a href="/"><span>Home</span></a>
          </li>

          <li class="has-megamenu"><a href="#"><span>Forum</span></a>
          </li>
          <li><a href="#"><span>Posts</span></a>

          </li>
          <li class="active"><a href="#"><span>myBlog</span></a>

          </li>
          <li><a href="#"><span>Pages</span></a>

          </li>

        </ul>
      </nav>
      <!-- Toolbar-->
      <div class="toolbar">
        <div class="inner">
          <div class="tools">
        
            <div class="account"><a href="#"></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
                        @guest
              <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <li class="sub-menu-title"><span>Hello,</span>  {{ Auth::user()->name }}</li>
                               
                                
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                
                            </li>
                        @endguest
               >
              </ul>
            </div>
           
          </div>
        </div>
       
      </div>
      
      <div class="container">
        

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

      
      
      
      
      