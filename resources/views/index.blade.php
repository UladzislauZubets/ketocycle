<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ env('APP_NAME') }}</title>

    <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <meta name="author" content="Vladislav Zubets">
    <meta name="image" content="{{ asset('images/logo.png') }}">

    <meta property="og:type" content="website">

    <meta property="og:title" content="KetoCycle">
    <meta property="og:description" content="KetoCycle diet">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    
    <link rel="canonical" href="{{ env('APP_URL') }}">

    <link rel="preconnect" href="//fonts.googleapis.com">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#f53600">
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">

    <meta name="msapplication-TileColor" content="#f53600">
    <meta name="msapplication-config" content="{{ asset('favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-title" content="{{ env('APP_NAME') }}">

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
</head>
<body>
    
    <div id="app">
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>