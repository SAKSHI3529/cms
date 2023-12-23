<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | CMS ADMIN</title>
    @include('partials.headerscript')
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
    @include('partials.footerscript')
</body>
</html>
