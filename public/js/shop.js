var vm = new Vue({
    el: "#app",
    data: {
        product: 'Surface Headphones',
        // description: 'Released on 14 February 2020.',
        image: 'public/images/s-h-black.jpg',
        altText: 'A pair of headphones.',
        visitCount: 0,  
        inStock: true,
    },
    created: function() {
        // TODO: Do all the stuff you want when vue is initialized here
        console.log('Vue instance created!');
    },
    methods: {
        onClickAddCart: function() {
            // TODO: Login
            console.log('#onClickLogin');
        },
    },
});