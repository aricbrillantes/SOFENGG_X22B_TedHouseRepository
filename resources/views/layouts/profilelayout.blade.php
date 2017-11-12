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
                <div id="userphoto"><img src="/storage/web_img/avatar.png" alt="default avatar"></div>
                <section id="bio">
                    <p><h1>@yield('UserName')</h1><span><img src="/storage/web_img/edit.png" alt=""></span></p>
                </section>

                <section id="bio">
                    <p>@yield('Occupation')<span><img src="/storage/web_img/edit.png" alt=""></span></p>
                </section>

                <section="settings">
                    <nav id="profiletabs">
                        <ul >
                            <li><a href="/profile#bio" class="sel">Bio</a></li>
                            <li><a href="/members">Activity</a></li>
                        </ul>
                    </nav>
                </section>
                
                <section id="bio">
                    <p class="bio">@yield('Bio')<p>
                </section>

                <section id="settings">
                    <p class="setting"><span>Member Since</span>@yield('Date')</p>
                </section>

                <section id="settings">
                    <p class="setting"><span>E-mail Address <img src="/storage/web_img/edit.png" alt=""></span>{{ Auth::user()->email }}</p>
                </section>
            </div><!-- @end #content -->
        </div><!-- @end #w -->
    </body>
</html> 