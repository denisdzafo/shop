<template>
    <section id="statistics" data-dir="up" :style='{ backgroundImage: "url(" + img_src + ")", }' class="statistics-section text-white parallax parallax">
      <div class="container">
        <div class="row showcase text-center">
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-align-justify"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">140</span><br>Lorem Ipsum</h5>
            </div>
          </div>
          <div  class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-users"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">70</span><br>Lorem Ipsum</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-copy"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">220</span><br>Lorem Ipsum</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-font"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">444</span><br>Lorem Ipsum</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="dark-mask"></div>
    </section>
</template>

<script>    
    export default {
    data() {
      return {
        img_src:'/storage/homepage/homepage-image-section.jpg'
      }
    },
    components: {
        //
    },
    mounted(){
        
    }
  }
</script>

<style>
.statistics-section {
    padding-top: 120px;
    padding-bottom: 120px;
    position: relative;
    z-index: 1;
    background-size: cover;
}
</style>