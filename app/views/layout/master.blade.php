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

 <!--   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
        </div>
    </div> -->
    <div class="container">
        @yield('content')
    </div>
    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>
