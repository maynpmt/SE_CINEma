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
                                    <a href="{{ url('/login')}}">Admin</a>
                                    <a href="{{ url('/logout') }}">Logout</a>
                                </div>
                            @else
                                <div class="dropdown-content">
                                    <a href="{{url('/login_page')}}">Login / Register</a>
                                    
                                </div>
                            @endif
                        </div>
                    @if(Auth::check()) 
                        <a href="{{url('/admin')}}"><img src="{{asset('frontEnd/images/home/profile.png')}}" width="50" alt="" /></a>
                         <!--
                    @else

                        <div class="dropdown">
                            <a href="{{url('/login_page')}}" class="dropbtn"><img src="{{asset('frontEnd/images/home/profile.png')}}" width="50" alt="" /></a>
                            <div class="dropdown-content">
                                <a href="{{url('/user_profile')}}">View profile</a>
                                <a href="{{url('/login')}}">Admin</a>
                                <a href="#">Logout</a>
                            </div>
                        </div>
                    @endif -->
                    </li>
                </ul>
            </nav>
                
        
            
               
        </div>
        
    </div><!--/header-middle-->

    <!--header-bottom-->
    <!-- <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/list-products')}}">Products</a></li>
                                    <li><a href="{{url('/myaccount')}}">Account</a></li>
                                    <li><a href="{{url('/viewcart')}}">Cart</a></li>
                                </ul>
                            </li>
                            <li><a href="https://www.youtube.com/channel/UCH2Ir7rPaRN8ZPL9mSpclhw" target="_blank">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->
    <!--/header-bottom-->
</header><!--/header-->