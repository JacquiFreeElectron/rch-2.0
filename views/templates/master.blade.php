<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/rch.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    @yield('head')

</head>
<body id="body">

<header>
    <img id='logo' src='/images/icon/homepageicon.svg' alt='Home of Run Logo'> 
    <h1>{{ $app->config('app.name') }}</h1>
</header>

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>