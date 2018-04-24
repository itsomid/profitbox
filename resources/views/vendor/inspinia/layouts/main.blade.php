<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Atnic">
  <link href="/css/style.css" rel="stylesheet">

  <script src="/js/jquerysession.js"></script>
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/jquery-3.2.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

  <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.min.js" type="text/javascript"></script>

  <title>@yield('title', config('app.name', 'INSPINIA'))</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  @section('styles')
  <link href="{{ mix('/css/inspinia.css') }}" rel="stylesheet">
  @show

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

  <![endif]-->
  @stack('head')
</head>

<body class="body-small {{ config('inspinia.skin', '') }}">
  <div id="wrapper">
    @include('inspinia::layouts.sidebar.main')
    @include('inspinia::layouts.main-panel.main')
  </div>

  @section('scripts')
  <script src="{{ mix('/js/manifest.js') }}" charset="utf-8"></script>
  <script src="{{ mix('/js/vendor.js') }}" charset="utf-8"></script>
	<script src="{{ mix('/js/inspinia.js') }}" charset="utf-8"></script>
	@show
	@stack('body')
</body>

</html>
