<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>lyrix</title>

        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/styles.css') }}
    </head>

    <body>
    <div class="container">
        <div class="header">
            <ul class="nav nav-pills pull-right">
                @if(Auth::check())
                    <li>{{ HTML::link('user/logout', 'Logout') }}</li>
                @else
                    <li>{{ HTML::link('user/login', 'Login') }}</li>
                    <li>{{ HTML::link('user/register', 'Registrieren') }}</li>
                @endif
            </ul>
            <h3 class="text-muted">Lyrix Search Tool</h3>
        </div>
        @if(Auth::check())
        <div class="jumbotron">
            <ul>
                <li>{{ HTML::link('search/index', 'Suche') }}</li>
                <li>{{ HTML::link('lists/newlist', 'Neue Liste') }}</li>
                <li>{{ HTML::link('lists/mylists', 'Meine Listen') }}</li>
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>
