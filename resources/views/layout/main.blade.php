<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>

    <div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about">Chi Siamo</a></li>
                <li><a href="contacts">Contatti</a></li>
            </ul>
        </nav>
    </div>

    <section>
        @yield('content')
    </section>

</body>
</html>
