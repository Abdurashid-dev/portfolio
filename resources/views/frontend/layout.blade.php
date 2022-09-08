<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- SEO TOOLS --}}
    {!! SEO::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! JsonLd::generate() !!}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('frontend/main.min.css')}}">
</head>
<body>
@yield('content')
<div class="stick">all rights reserved by <a href="https://t.me/abdurashid_coder">Abdurashid</a></div>
</body>
</html>
