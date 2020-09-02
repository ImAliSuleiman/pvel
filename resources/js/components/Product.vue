<template>
  <div class="product">
    <div class="product-image">
      <!-- <img src="{{ URL::asset('images/s-h-grey.jpg') }}"> -->
      <!-- <img v-bind:src="image"> -->
      <img :src="image" :alt="altText" />
    </div>

    <div class="product-info">
      <h1>{{ title }}</h1>
      <p>{{ description }}</p>

      <p v-if="inventory >= 10">In Stock ({{ inventory }})</p>
      <p v-else-if="inventory < 10 && inventory > 0">Almost Sold Out ({{ inventory }})</p>
      <p v-else>Out of Stock</p>

      <span v-show="onSale">On Sale</span>

      <ul>
        <li v-bind:key="detail" v-for="detail in details">{{ detail }}</li>
      </ul>

      <div
        v-for="(variant, index) in variants"
        :key="variant.id"
        class="color-box"
        :style="{ backgroundColor: variant.color }"
        @mouseover="updateProduct(index)"
      >
        <!-- <p @mouseover="updateProduct(variant.image)">{{ variant.color }}</p> -->
      </div>

      <button
        v-on:click="onAddCart"
        :disabled="!inStock"
        :class="{ disabledButton: !inStock }"
      >Add to Cart</button>
      <div class="cart">
        <p>Cart ({{ cart }})</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Product",
  data() {
    return {
      product: "Surface Headphones",
      description: 'Released on 14 February 2020.',
      // image: 'images/s-h-black.jpg',
      selectedVariant: 0,
      altText: "A pair of headphones.",
      visitCount: 0,
      // inStock: true,
      // inventory: 12,
      onSale: true,
      details: [
        "15 levels of ANC",
        "Slick design",
        "Comfortable to wear for many hours",
        "12+ hours playback",
        "Multiple device support",
      ],
      variants: [
        {
          id: 10,
          color: "black",
          image: "images/s-h-black.jpg",
          quantity: 11,
        },
        {
          id: 11,
          color: "lightgrey",
          image: "images/s-h-grey.jpg",
          quantity: 4,
        },
      ],
      cart: 0,
      brand: "Microsoft",
    };
  },
  created: function () {
    // TODO: Do all the stuff you want when vue is initialized here
    console.log("Vue instance created!");
  },
  methods: {
    onAddCart: function () {
      // TODO: Add to cart
      console.log("#onAddCart: cart=" + this.cart + ', inventory=' + this.inventory);
      this.cart++;
      this.variants[this.selectedVariant].quantity--;
    //   if (this.variants[this.selectedVariant].quantity > 0) {
    //     this.inStock = true;
    //   } else {
    //     this.inStock = false;
    //   }
      console.log("#onAddCart: cart=" + this.cart + ', inventory=' + this.inventory);
    },
    updateProduct: function (index) {
      console.log("#updateProduct: " + index);
      // this.image = image;
      this.selectedVariant = index;
    },
  },
  computed: {
    title() {
      return this.brand + " " + this.product;
    },
    image() {
      return this.variants[this.selectedVariant].image;
    },
    inStock() {
      return this.variants[this.selectedVariant].quantity > 0;
    },
    inventory() {
      return this.variants[this.selectedVariant].quantity;
    },
  },
};
</script>

<style scoped>

</style>