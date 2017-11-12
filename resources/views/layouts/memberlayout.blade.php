<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{ $title }}</title>
    </head>
    <body>
        @include('inc.navbar')

        <div id="profpage">
            <div id="content" >
                <div id="userphoto"><img src="images/avatar.png" alt="default avatar"></div>
                <section id="bio">
                    <p><h1>@yield('UserName')</h1><span><img src="images/edit.png" alt="*Edit*"></span></p>
                </section>

                <section id="bio">
                    <p>@yield('Occupation')<span><img src="images/edit.png" alt="*Edit*"></span></p>
                </section>

                <section="settings">
                    <nav id="profiletabs">
                        <ul >
                            <li><a href="/profile#bio" class="sel">Bio</a></li>
                            <li><a href="/members" class="sel">Activity</a></li>
                        </ul>
                    </nav>
                </section>
                
                <section id="activity">
                    <p>Most recent actions:</p>
                    @yield('works')
                </section>
            </div>
        </div>
    </body>
</html> 