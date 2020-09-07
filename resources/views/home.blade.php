<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VueVue</title>
    </script>
</head>

<body>
    <div id="app">
        <nav>
            <router-link to="/home">Home</router-link>
            <router-link to="/about">About</router-link>
        </nav>
        <router-view></router-view>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>