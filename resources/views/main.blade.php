<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <loading-component></loading-component>
    <navbar-component></navbar-component>
    <main class="py-4">
        <router-area-component></router-area-component>
    </main>
</div>
</body>
</html>
<script>
    import NavbarComponent from "../../js/components/NavbarComponent";
    import LoadingComponent from "../../js/components/LoadingComponent";
    import RouterAreaComponent from "../../js/components/RouterAreaComponent";
    export default {
        components: {LoadingComponent, NavbarComponent, RouterAreaComponent},
    }
</script>
