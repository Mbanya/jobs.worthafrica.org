<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title', e($title)) - {{ siteSettings('siteName') }}</title>
    @yield('meta', '<meta name="description" content="'.siteSettings('description').'">')
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    <!--[if IE 8]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href='//fonts.googleapis.com/css?family=Lato:400,900italic,900,700,700italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
    {!! HTML::style('static/css/main.css') !!}
</head>
<body>
@include('master/notices')
@include('master.navbar')
<div class="container">
    @yield('content')
</div>
@include('master.footer')
{!! HTML::script('static/js/main.js') !!}
@yield('extra-js')
</body>
</html>