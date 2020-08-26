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
                    <button class="submit" v-on:click="onClickLogin">Login</button>
                </div>
            </section>
        </div>

        <footer>

        </footer>
    </div>

</body>

<!-- scripts -->
 <!-- <script src="https://unpkg.com/vue"></script> -->

    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- production version, optimized for size and speed -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->

    <script>
        var vm = new Vue({
            el: "#app",
            data: {
                error: '',
                email: '',
                tryCount: 0,
            },
            created: function() {
                // TODO: Do all the stuff you want when vue is initialized here
                console.log('Vue instance created!');
            },
            methods: {
                onClickLogin: function() {
                    // TODO: Register
                    this.tryCount++
                    console.log('#onClickLogin ['+ this.tryCount + "]: email: " + this.email);
                },
            },
        });
    </script>

</html>