<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Guest Home</title>
</head>
<body>
    @if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div id="root"></div>
    <script src="{{ asset('js/front.js')}}"></script>
</body>
</html>