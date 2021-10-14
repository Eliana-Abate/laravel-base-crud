<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi passi con le CRUD | @yield('title')</title>
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
</head>
<body>

    <main>
        @yield('content')
    </main>

    
    @yield('scripts')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>