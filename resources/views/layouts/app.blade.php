<!DOCTYPE html>
<html lang="{!! app()->getLocale() !!}">
<head>
    {{--<script src="/js/pace.min.js"></script>--}}
    {{--<link href="/css/pace-theme-flash.css" rel="stylesheet"/>--}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="author" content="Eric Totten">
    <meta name="description"
          content="Chandler Christian Academy is an independent, non-profit, non-denominational Christian preschool through eighth grade in Chandler, AZ.">
    <title>{!! config('app.name', 'Laravel') !!}</title>
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#b8171c">
    <meta name="theme-color" content="#ffffff">

    @stack('before-styles')
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
    <link href="{!! mix('css/app.css') !!}" rel="stylesheet">
    @stack('after-styles')

</head>

<body class="app header-fixed sidebar-fixed aside-menu-off-canvas aside-menu-hidden">

<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button"><i class="fa fa-bars"></i></button>
    <a class="navbar-brand" href="http://www.chandlerchristianacademy.org/"></a>
    <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button"><i class="fa fa-bars"></i></button>
    <div class="logotext">CCA Lunch Ordering</div>
    <div class="ml-auto"></div>
</header>

<div class="app-body">
    @include('includes.partials.sidebar')
    <main class="main">
        <div class="cssload-container" style="display: none;">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</div>

@include('includes.partials.footer')
@stack('before-scripts')

<script src="{!! mix('js/app.js') !!}"></script>
@stack('after-scripts')

</body>
</html>
