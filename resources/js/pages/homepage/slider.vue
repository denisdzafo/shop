<template>
    <section id="header" class="intro-section pb-2" :style='{ backgroundImage: "url(" + img_src + ")", }'>
       <div class="container text-center">
          <h1 class="text-shadow mb-5">CMS BLOG</h1>
          <p class="h3 text-shadow text-400">
            Lorem ipsum dolor sit amet, cu aperiri habemus reprimique est, nobis inciderint cu vix.
            </p>
       </div>
</section>
</template>

<script>    
    export default {
    data() {
      return {
        img_src:'/storage/homepage/home.jpg'
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
    }

    .intro-section {
  padding-top: 150px;
  color: #fff;
}

.intro-section .logo, .intro-section p {
  margin-bottom: 120px;
}

@media (min-width: 992px) {
  .intro-section {
    min-height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }
}
</style>