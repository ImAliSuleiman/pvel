<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Login</title>

</head>
<script>
    import InputText from 'primevue/inputtext';
</script>

<body>
    <div id="app">
        <div class="wrapper">
            <header>
                <!-- <a href="#" class="logo">Optimus</a> -->
                <!-- <a href="#"> -->
                <i class="pi pi-check"></i>
                <!-- <i class="pi pi-question-circle" style="fontSize: 2rem"></i> -->
                <!-- </a> -->
            </header>

            <section class="card">
                <InputText type="text" v-model="email" name="email" placeholder="Email Address"/>
                <!-- <span :style="{marginLeft: '.5em'}">@{{ email }}</span> -->

                <InputText type="password" name="password" v-model="password" />
                <!-- <span :style="{marginLeft: '.5em'}">@{{ password }}</span> -->
            </section>
        </div>
    </div>

</body>

<!-- <script src="https://unpkg.com/vue"></script> -->

<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<!-- production version, optimized for size and speed -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->

<script>
    // import InputText from 'primevue/inputtext';

    var vm = new Vue({
        el: "#app",
        data: {
            error: '',
            email: '',
            password: '',
            visitCount: 0,
        },
        created: function() {
            // TODO: Do all the stuff you want when vue is initialized here
            console.log('Vue instance created!');
        },
        methods: {
            onClickLogin: function() {
                // TODO: Login
                console.log('#onClickLogin');
            },
            onClickReadMore: function() {
                // TODO: Go to read more
                console.log('#onClickReadMore');
            },
        },
    });
</script>

</html>