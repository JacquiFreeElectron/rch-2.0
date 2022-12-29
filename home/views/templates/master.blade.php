<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

<header>
    <img id='logo' src='/images/hes-logo.png' alt='Harvard Extension School Logo'>
    <h1>{{ $app->config('app.name') }}</h1>
</header>

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>