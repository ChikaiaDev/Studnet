 
  <header class="navbar navbar-sticky">
     <div class="site-branding">
        <div class="inner">
         <a href="/"><img src="/img/student.png" style="max-width: 60px; padding:10px;"alt="STDNET"></a>StudNet
        </div>
      </div>
    
     
     
      <nav class="site-menu">
        <ul>
          
          <li><a href="/post"><span>Discussions</span></a>
            <ul class="sub-menu">
                <li><a href="/post">Join Discussions</a></li>
                <li><a href="/create">Create Discussions</a></li>


            </ul>
          </li>
          <li><a href="/news"><span>News Feed</span></a>
            <ul class="sub-menu">
              <li class="has-children"><a href="/news"><span>Latest Feed</span></a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>


       <!-- Toolbar-->

      <div class="toolbar">
        <div class="inner">
          <div class="tools">
            
            <div class="account"><a href="#"/></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
              @guest
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                <li class="sub-menu-title"><span>Hello,</span> {{ Auth::user()->username }}</li>
                   <li><a href="/home">My Profile</a></li>
                   <li><a href="/post">Posts</a></li>
                <li class="sub-menu-separator"></li>
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
                @endguest
              </ul>
            </div>
            
          </div>
        </div>
      </div>

    </header>
 
      
      