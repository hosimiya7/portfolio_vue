<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description"
        content="hosiokuri web制作を行っています。「魅力を最大限伝える」ことを第一に、 お客様の目的に沿った「魅せ方」を提案させていただきます。お気軽にご相談ください ">
    <meta property="og:site_name" content="hosiokuri portfolio">
    <meta name="twitter:card" content="summary" />
    <meta property="og:url" content="http://hosimiya.site/" />
    <meta property="og:title" content="hosiokuri portfolio" />
    <meta property="og:description" content="デザイン&コーディング hosiokuri portfolio" />
    <meta property="og:image" content="img/header-large.jpg" />
    <meta property="og:type" content="website">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>hosiokuri portfolio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ang3ldx.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    {{-- icon --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <header>
            <top></top>
        </header>
        <main>
            <contents></contents>
            <contact></contact>
        </main>
        <footer>
            <bottom></bottom>
        </footer>
    </div>
</body>

</html>
