<template>
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
</template>

<script>
import customerDataService from "../../services/customerDataService";    
    export default {
    data() {
      return {
        img_src:'/storage/homepage/home.jpg',
        products: [],
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
    }
  }
</script>

<style scoped>
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