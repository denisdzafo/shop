<template>
    <section id="header" class="intro-section pb-2" :style='{ backgroundImage: "url(" + img_src + ")", }'>
       <div class="container text-center">
          <h1 class="text-shadow mb-5">Shop</h1>
       </div>
</section>
</template>

<script>    
    export default {
    data() {
      return {
        img_src:'/storage/shop/shop.jpg'
      }
    },
    components: {
        //
    },
    mounted(){
        
    }
  }
</script>

<style scoped>
    .intro-section{        
        background-size: cover;
        background: center center no-repeat;
        color: #fff;
        min-height: 85vh;
    }

@media (min-width: 992px) {
  .intro-section {
    
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }
}
</style>