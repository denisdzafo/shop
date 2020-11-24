<template>
  <div>  
    <div class="slider">
        <slider></slider>
    </div>

    <div class="products">
        <products></products>
    </div>

  </div>


    
</template>

<script>
import slider from './slider.vue';
import products from './products.vue'
    export default {
    data() {
      return {
        
      }
    },
    components: {
      slider,
      products

    },
    mounted(){
    
    }
    
  }
</script>

<style  scoped>

</style>