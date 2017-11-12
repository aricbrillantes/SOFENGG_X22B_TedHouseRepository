<!-- NAVIGATION BAR -->
<div class="div_navigation">
    <!-- LOGO -->
    <a href="/" class="logo">TE<sup>3</sup>D<text class="logo2">Workshop</text></a>
    <!-- SEARCH BAR -->
    <input type="text" name="search" placeholder="Search for works, authors, tags...">
    <a href="/"><img class="search_icon" src="/storage/web_img/search_icon.png" width="30"></a>

    <!-- Authentication Links -->
    <!-- BUTTONS FOR GUESTS -->
    @guest
    <a href="{{ route('login') }}" class="navtxt" id="top_guest">Log In</a>
    
    @else
    <!-- BUTTONS FOR USERS -->
    <span id="top_user">
        
        <!-- DROPDOWN 1 -->
        <span class="dropdown">
            <a class="droparrow"><i class="fa fa-caret-down"></i></a>
            
            <!-- CONTENT FOR MEMBERS -->
            <div class="dropdown-content" id="dropdown_member">
                <a href="/works/create">Upload Work</a>
                <a href="#">Refer Invite</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                </form>
            </div>
            <!-- CONTENT FOR ADMINS -->
            {{--  <div class="dropdown-content" id="dropdown_admin">
                <a href="/works/create">Upload Work</a>
                <a href="">View Requests</a>
                <a href="">View Members</a>
                <a href="">Logout</a>
            </div>	  --}}
        </span>

        <!-- NOTIFS DROPDOWN FOR ADMINS -->
        {{--  <span class="dropdown" id="notifications">
            <a class="dropnotifs" onclick="notif_dropdown()"><img onclick="notif_dropdown()" src="/storage/web_img/notifs_icon.png" height="18"></a>
            <div class="notifs-content" id="notif-content">
                <a href="">Kwaklaloo added a file to the work 'A Nice Reasearch Paper'</a>
                <a href="">Juana De la Cruz deleted __'s work.</a>
            </div>
        </span>  --}}

        <a href="/" class="navtxt">Home</a>
        <a href="/" class="navtxt" id="username">{{ Auth::user()->name }}</a>
    </span>
    @endguest
</div>
{{--  <nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a id="logo" class="navbar-brand" href="{{ url('/') }}">
                TE<sup>3</sup>D<txt id="logo2">Workshop</txt>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/works">Works</a></li>
                <!-- <li><a href="/about">About us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/posts">Blog</a></li> -->
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li><a href="#">Settings</a></li>
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
</nav>  --}}