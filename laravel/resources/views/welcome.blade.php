<!doctype html>
<html lang="{{ app()->getLocale() }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/app.css" 
    <title>laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div id="app">
    <example-component></example-component>
    
    
    </div>
    <script src="{{mix('/js/app.js')}}"></script>
</body>

</html>