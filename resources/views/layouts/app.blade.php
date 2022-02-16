<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB31b-oK-BfbhXDcnqUlTLF1RmYF8ClBQY=places"　
        async></script>
</head>
<body>
    <div id="app" >
    </div>
</body>
</html>
