var vm = new Vue({
    el: "#app",
    // data: {
    //     product: 'Surface Headphones',
    //     // description: 'Released on 14 February 2020.',
    //     // image: 'images/s-h-black.jpg',
    //     selectedVariant: 0,
    //     altText: 'A pair of headphones.',
    //     visitCount: 0,
    //     // inStock: true,
    //     // inventory: 12,
    //     onSale: true,
    //     details: ['15 levels of ANC',
    //         'Slick design',
    //         'Comfortable to wear for many hours',
    //         '12+ hours playback',
    //         'Multiple device support'
    //     ],
    //     variants: [{
    //         id: 10,
    //         color: 'black',
    //         image: 'images/s-h-black.jpg',
    //         quantity: 11
    //     },
    //     {
    //         id: 11,
    //         color: 'lightgrey',
    //         image: 'images/s-h-grey.jpg',
    //         quantity: 0
    //     }
    //     ],
    //     cart: 0,
    //     brand: 'Microsoft',
    // },
    // created: function () {
    //     // TODO: Do all the stuff you want when vue is initialized here
    //     console.log('Vue instance created!');
    // },
    // methods: {
    //     onAddCart: function () {
    //         // TODO: Add to cart
    //         console.log('#onAddCart: ' + this.cart);
    //         this.cart++;
    //         this.inventory--;
    //         if (this.inventory > 0) {
    //             this.inStock = true;
    //         } else {
    //             this.inStock = false;
    //         }
    //     },
    //     updateProduct: function (index) {
    //         console.log('#updateProduct');
    //         // this.image = image;
    //         this.selectedVariant = index;
    //         console.log(index);
    //     }
    // },
    // computed: {
    //     title() {
    //         return this.brand + ' ' + this.product;
    //     },
    //     image() {
    //         return this.variants[this.selectedVariant].image;
    //     },
    //     inStock() {
    //         return this.variants[this.selectedVariant].quantity > 0;
    //     },
    //     inventory() {
    //         return this.variants[this.selectedVariant].quantity;
    //     },
    // }
})