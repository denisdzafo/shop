<template>
  <div>  
    <div class="slider">
        <slider></slider>
    </div>

    <div class="intro">
        <intro></intro>
    </div>

  </div>


    
</template>

<script>
import slider from './slider.vue';
import intro from './intro.vue'
    export default {
    data() {
      return {
        
      }
    },
    components: {
      slider,
      intro

    },
    mounted(){
    
    }
    
  }
</script>

<style  scoped>

</style>