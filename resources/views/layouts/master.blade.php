<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{{ csrf_token() }}}">

    <title>@yield('title', trans('app.title'))</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{!! url('/assets/css/app.css') !!}">

    @yield('styles')
    @yield('head')

</head>

<body>
    @section('header')
    @show

    <div id="wrapper">
        @section('before')
          @include('layouts.partials.before')
        @show

        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">{{ trans('messages.toggle_nav') }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! url('/dashboard') !!}">@yield('app-name', trans('app.name'))</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              @include('layouts.partials.navbar-right')
              @yield('navbar-right')
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                  @section('side-menu')
                   <ul class="nav" id="side-menu">
                        <li>
                            <a href="{!! url('/dashboard') !!}"><i class="fa fa-dashboard fa-fw"></i> {{ trans('nav.dashboard') }}</a>
                        </li>
                        @include('layouts.partials.side-menu')
                  </ul>
                  @show
                  @yield('sidebar')
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
             @section('page-wrapper')
               <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">{{ trans('nav.dashboard') }}</h1>
                    </div>
                </div>
            @show

            @yield('content')
        </div>

        @section('after')
          @include('layouts.partials.after')
        @show

    </div>
    @section('footer')
    @show

  <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="{!! url('/assets/js/app.js') !!}"></script>

  @yield('scripts')
</body>
</html>