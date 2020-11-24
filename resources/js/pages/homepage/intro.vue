<template>
  <div>
    <section class="intro">
       <div class="container">
          <div class="text-center">
             <h2>Lorem Ipsum</h2>
          </div>
          <div class="row">
             <p>
                Lorem ipsum dolor sit amet, cu aperiri habemus reprimique est, nobis inciderint cu vix, eum prompta persecuti id. Rebum brute tamquam te qui. Id errem quaeque menandri eos. Ei cum omnis prima laboramus, ne sit nemore contentiones, ceteros mentitum periculis at pro. Ei sit nullam fastidii, eu dictas impetus perfecto sed. Ei cum ferri vivendum, ei nam debet placerat, sint docendi appetere sit ex.
                Magna petentium id nam. Mei error zril eu, eum te quaeque perpetua. Nec id mundi admodum laboramus, eu vix principes prodesset. No vim ocurreret scribentur. Ne movet consetetur nec, impedit assentior intellegat in quo.
                Vel agam an imal insolens at, mea porro saperet principes at. Ea has brute graece prompta, eu nec eros concludaturque. Viderer labores feugait eu has, has fugit intellegat ut. Per cu gubergren tincidunt consectetuer, vis in amet dicat propriae, te quo utinam facete imperdiet. An vel ubique deleniti abhorreant.
             </p>
          </div>
       </div>
  </section>

  <section class="product-section">
     <div class="container">
        <div class="row" >       
          <div class="col-md-4" v-for="product in products">         
             <div class="product-post">
               <img :src="img_src" alt="" class="product-image">
                   <h5 class="product-title">{{product.name}}</h5>
                   <p>
                      {{product.description}}
                   </p>   
                   <i class="product-price">{{product.price}}</i>
                   <button class="btn add-to-cart">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  </button>
             </div>
             </div>
          </div>
        </div>
  </section>
</div>
</template>

<script>
import customerDataService from "../../services/customerDataService";    
    export default {
    data() {
      return {
        products: null,
        img_src: '/storage/homepage/home.jpg',
      }
    },
    components: {
        //
    },
    mounted(){
        this.getProducts();
    },
    methods: {
      getProducts() {
        customerDataService.getProducts()
          .then(response => {
              this.products = response.data.data;
          })
          .catch(e => {
            console.log(e);
          });
      }
    },
  }
</script>

<style scoped>
  .intro{
      padding: 80px 0px;
  }
  .product-section{
      padding-bottom: 80px;
  }
  .product-image{
      width: 100%;
      height: auto;
  }

  .product-title{
      padding-top:20px;
  }         
  
  .product-price {
      color: #9d9d9d;
  }

  .product-post{   
      padding: 20px;
      -webkit-box-shadow: 0px 0px 15px -1px #525252;
    }

  .product-post:hover{
      box-shadow: 11px 18px 26px 0px #525252;
  }

  .add-to-cart{
      float: right;
  }
</style>