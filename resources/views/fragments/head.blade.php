<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:title" content="Raiffeisen Kalandos séta">
    <meta property="og:description" content="Nyisson ajtót a kalandokra! Kezében a kulcs, hogy megismerhesse Budapest legendáit. Tegye meg az első lépést, regisztráljon!">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:image" content="/img/meta_img.jpg">
    <meta property="og:type" content="website" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mestergerenda</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('img/favicon.ico') }}" rel="Shortcut Icon" />

    @yield('css')

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    @include('fragments.cookieconsent')

</head>