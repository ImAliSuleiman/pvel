<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mtabe</title>
</head>

<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

<body>

    <div id="app">
        <header>
            <a href="#" class="logo">Mtabe</a>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>

        <div class="wrapper">

            <section class="main">
                <div class="inner">
                    <div class="title-clipper">
                        <h1>Go Mtabe</h1>
                    </div>

                    <div class="sub-clipper">
                        <p>Join today and start developing software solutions like a pro!</p>
                        <a href="#" class="read-btn primary-btn" v-on:click="onClickRegister">Start Coding</a>
                    </div>
                </div>
            </section>


            <section class="featured">
                <div class="inner">
                    <div class="title-clipper">
                        <h2>Featured</h2>
                    </div>

                    <div class="sub-clipper">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero magnam at inventore, laboriosam earum, voluptatum debitis magni molestiae minima, alias totam non. Maxime, velit libero sit porro asperiores molestiae aliquid, consequuntur laboriosam accusamus corrupti corporis quae optio sint eligendi vel.</p>
                        <a href="#" class="read-btn" v-on:click="onClickReadMore">Read More</a>
                    </div>
                </div>
            </section>


            <section class="subscribe">
                <div class="inner">
                    <div class="title-clipper">
                        <h2>Subscribe</h2>
                    </div>

                    <div class="sub-clipper">
                        <p>Get the lastest updates about Mtabe courses, offers, and opportunites.</p>
                        <input type="text" name="email" placeholder="Email Address" v-model='email'>
                        <button class="cta" v-on:click="onClickSubscribe">Subscribe Now</button>
                    </div>
                </div>
            </section>
        </div>
    </div>


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
                visitCount: 0,
            },
            created: function() {
                // TODO: Do all the stuff you want when vue is initialized here
                console.log('Vue instance created!');
                console.log('visits: ' + this.visitCount);
            },
            methods: {
                onClickRegister: function() {
                    // TODO: Register
                    console.log('#onClickRegister');
                },
                onClickSubscribe: function() {
                    // TODO: Validate email and send subscribe request
                    console.log('#onClickSubscribe - email: ' + this.email);
                },
                onClickReadMore: function() {
                    // TODO: Go to read more
                    console.log('#onClickReadMore');
                },
            },
        });
    </script>

</body>

</html>