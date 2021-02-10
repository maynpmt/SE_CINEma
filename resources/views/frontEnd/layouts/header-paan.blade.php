<header id="header"><!--header-->
    <div class="header-middle"> <!--header-middle-->
        <div class="header-container">
            <nav>
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo2.png')}}" width="150" alt="" /></a>
                </div>

                <div class="search-box">
                    <input id="search-input" type="search" id="form1" class="form-control" placeholder="Search"/>
                    <div class="search-icon">
                        <button id="search-button" type="button" class="search-button btn" title="Search"><i class="fa fa-search"></i></button>
                    </div>
                </div>

                <ul class="nav-links">
                    <!-- logged in -->
                    @if(Auth::check())
                        <li>
                            <a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart" title="cart"></i></a>
                        </li>
                    @endif                        
                    
                    <li>
                        <div class="dropdown">
                        
                            <a href="{{url('#')}}"><img src="{{asset('frontEnd/images/home/profile.png')}}" width="50" alt="" /></a>
                            @if(Auth::check()) 
                                <div class="dropdown-content">
                                    <a href="#">View profile</a>
                                    <!-- <a href="{{url('/admin')}}">Admin</a> -->
                                    <a href="{{ url('/logout') }}">Logout</a>
                                </div>
                            @else
                                <div class="dropdown-content">
                                    <a href="{{url('/login_page')}}">Login / Register</a>
                                    
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </nav>
                
        
            
               
        </div>
        
    </div>
</header><!--/header-->