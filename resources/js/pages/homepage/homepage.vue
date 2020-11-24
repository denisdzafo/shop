<template>
  <div>  

      <div class="slider">
        <slider></slider>
      </div>

      <div class="intro">
        <intro></intro>
      </div>

      <div class="statistics">
        <statistics></statistics>
      </div>

      <div class="about">
        <about></about>
      </div>

  </div>


    
</template>

<script>
import slider from './slider.vue';
import intro from './intro.vue';
import statistics from './statistics.vue';
import about from './about.vue'

    export default {
    data() {
      return {
        //
      }
    },
    components: {
        slider,
        intro,
        statistics,
        about

    },
    mounted(){
        console.log(this.$route);
    }
  }
</script>