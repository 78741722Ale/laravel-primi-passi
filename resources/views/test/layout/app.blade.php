<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @yield('css')
</head>
<body>
    @include('test.partials.header')

    @yield('contenuto')

    @yield('js')
</body>
</html>
