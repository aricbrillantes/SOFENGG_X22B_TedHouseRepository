<!-- NAVIGATION BAR -->
<div id="navigation">
    <a href="/" id="logo">TE<sup>3</sup>D<text id="logo2">Workshop</txt></a>
    <input type="text" name="search" placeholder="Search for works, authors, tags...">
    <a href="/search"><img id="search_icon" src="{{URL::asset('/img/search_icon.png')}}" width="30"></a>
    @guest
        <a href="{{ route('login') }}"class="navtxt">Login</a>
        <a href="/" class="navtxt">Home</a>
    @else
        <a href="/" class="navtxt">Home</a>
            <a href="{{ route('logout') }}" class="navtxt"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    @endguest
</div>