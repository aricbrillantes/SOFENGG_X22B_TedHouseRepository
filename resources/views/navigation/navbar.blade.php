<!-- NAVIGATION BAR -->
<div id="navigation">
    <a href="/" id="logo">TE<sup>3</sup>D<text id="logo2">Workshop</txt></a>
    <input type="text" name="search" placeholder="Search for works, authors, tags...">
    <a href="/search"><img id="search_icon" src="{{URL::asset('/img/search_icon.png')}}" width="30"></a>
    @guest
        <a href="{{ route('login') }}"class="navtxt">Login</a>
        <a href="/" class="navtxt">Home</a>
    <!-- Add else if $userType == Admin here -->
    @else
        <li id="dropdown">
            <a href="#" id="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span id="caret"></span>
            </a>

            <ul id="dropdown-menu">
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
</div>