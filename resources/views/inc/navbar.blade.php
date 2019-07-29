  <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <ul class="nav navbar-nav navbar-left">
                        <li><img src="/img/student.png" style="max-width: 60px; padding:10px; margin-top: 0px;"alt="STDNET"></li>
                    </ul>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                     <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                     <ul class="nav navbar-nav">
                         <li class="dropdown">
                             <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="/post">Discussions
                                <span class="caret"></span>
                             </a>

                             <ul class="dropdown-menu" role="menu">
                                 <li><a href="/post">Join Discussions</a></li>
                                 <li><a href="/create">Create Discussions</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="/news">News Feed
                                 <span class="caret"></span>
                             </a>
                         </li>



            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="/home">
                                   Welcome, {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/home">My Profile</a></li>
                                    <li><a href="/post">Posts</a></li>

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
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>