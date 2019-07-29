<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .page-header {
            color: #fff;
            text-align: center;
            background-color: #159957;
            background-image: linear-gradient(120deg, #155799, #159957);
        }
        @media screen and (min-width: 64em) {
            .page-header {
                padding: 5rem 6rem; } }
        @media screen and (min-width: 42em) and (max-width: 64em) {
            .page-header {
                padding: 3rem 4rem; } }
        @media screen and (max-width: 42em) {
            .page-header {
                padding: 2rem 1rem; } }
        body{
            padding-top: 0px;
        }
        .active-like{
            text-decoration: underline;
            color: #222;
        }

    </style>

</head>
<body>
<div id="app">

    @include('inc.AdminNav')
    @yield('page-header')




    <div class="container">


        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('article-ckeditor');
</script>

</body>
</html>
