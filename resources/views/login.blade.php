<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<!-- <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}"> -->
<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">

<body>
    <div id="app">
        <header>
            <a href="#" class="logo">App</a>
        </header>

        <div class="wrapper">
            <section class="main">
                <div class="form">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <button class="submit">Login</button>
                </div>
            </section>
        </div>

        <footer>

        </footer>
    </div>

</body>

</html>