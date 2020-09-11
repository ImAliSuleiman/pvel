<template>
    <div class="col-md-5 testimonial">
        <!-- <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero
            magnam at inventore, laboriosam earum, voluptatum debitis magni
            molestiae minima, alias totam non. Maxime, velit libero sit porro
            asperiores molestiae aliquid, consequuntur laboriosam accusamus
            corrupti corporis quae optio sint eligendi vel.
        </p> -->

        <p>
            {{ testimonial.message }}
        </p>
        <!-- <img src="images/dev.jpg" /> -->
        <img src="{{ testimonial.userDp }}" />
        <p class="user-details">
            <!-- <b>Baba Njerekera</b><br />Co-Founder at Futuhi -->
            <b>{{ testimonial.userName }}</b
            ><br />{{ testimonial.userTitle }}
        </p>
    </div>
</template>

<script>
export default {
    name: "Testimonial",
    data() {
        return {};
    },
    props: ["testimonial"]
};
</script>
