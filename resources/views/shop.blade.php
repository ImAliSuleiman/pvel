<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="{{ URL::asset('css/shop.css') }}">
</head>

<body>
    <!-- <div class="nav-bar"></div> -->
    <div id="app">

        <div class="product">
            <div class="product-image">
                <!-- <img src="{{ URL::asset('images/s-h-grey.jpg') }}"> -->
                <!-- <img v-bind:src="image"> -->
                <img :src="image" :alt="altText">
            </div>

            <div class="product-info">
                <h1>@{{ product }}</h1>
                <!-- <p>@{{ description }}</p> -->

                <p v-if="inventory >= 10">In Stock (@{{ inventory }})</p>
                <p v-else-if="inventory < 10 && inventory > 0">Almost Sold Out (@{{ inventory }})</p>
                <p v-else>Out of Stock</p>

                <span v-show='onSale'>On Sale</span>

                <ul>
                    <li v-for="detail in details">@{{ detail }}</li>
                </ul>

                <div v-for="variant in variants" :key="variant.id" class="color-box" 
                :style="{ backgroundColor: variant.color }" @mouseover="updateProduct(variant.image)">
                    <!-- <p @mouseover="updateProduct(variant.image)">@{{ variant.color }}</p> -->
                </div>

                <button v-on:click="onAddCart" :disabled="!inStock" :class="{ disabledButton: !inStock }">Add to Cart</button>
                <div class="cart">
                    <p>Cart (@{{ cart }})</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <link rel="stylesheet" href="{{ URL::asset('js/shop.js') }}"> -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js">
    </script>
    <!-- <script src="{{ URL::asset('js/shop.js') }}"></script> -->

    <script>
        var vm = new Vue({
            el: "#app",
            data: {
                product: 'Surface Headphones',
                // description: 'Released on 14 February 2020.',
                image: 'images/s-h-black.jpg',
                altText: 'A pair of headphones.',
                visitCount: 0,
                inStock: true,
                inventory: 12,
                onSale: true,
                details: ['15 levels of ANC',
                    'Slick design',
                    'Comfortable to wear for many hours',
                    '12+ hours playback',
                    'Multiple device support'
                ],
                variants: [{
                        id: 10,
                        color: 'black',
                        image: 'images/s-h-black.jpg'
                    },
                    {
                        id: 11,
                        color: 'lightgrey',
                        image: 'images/s-h-grey.jpg'
                    }
                ],
                cart: 0,
            },
            created: function() {
                // TODO: Do all the stuff you want when vue is initialized here
                console.log('Vue instance created!');
            },
            methods: {
                onAddCart: function() {
                    // TODO: Add to cart
                    console.log('#onAddCart: ' + this.cart);
                    this.cart++;
                    this.inventory--;
                    if(this.inventory > 0){
                        this.inStock = true;
                    } else {
                        this.inStock = false;
                    }
                },
                updateProduct: function(image) {
                    console.log('#updateProduct');
                    this.image = image;
                }
            },
        });
    </script>

</body>

</html>