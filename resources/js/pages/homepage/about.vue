<template>
<section id="about" class="about">
   <div class="row row-eq-height">
   <div  class="col-md-6">
      <header class="text-center">
         <h2  class="title">Lorem Ipsum</h2>
      </header>
      <p class="paragraph">
         Lorem ipsum dolor sit amet, ea ipsum idque doming has, ad has probo maluisset. Esse novum vivendo mel at. Dicunt verterem nominati ei nam. Libris petentium his cu, ne nec tota graecis mediocrem, odio case cibo vix ea. Viderer iudicabit dissentiet sit id, impedit tibique phaedrum usu eu.
         Cu eum voluptaria adipiscing, has tota dissentiet an, in quo blandit principes. Illud voluptaria eu sed, duo duis aliquip et. Ea duo nihil vulputate, mea in eirmod interpretaris. Has nobis propriae appetere in, voluptua conceptam ius an.
         Iriure minimum suscipiantur an pri, nec zril consul ne, usu in quod soleat voluptatibus. Vix dictas facilis cu, utroque fierent mei in. Qui ea magna consul, an laudem malorum has. Ex odio posse sed, eu quo soleat altera. Inani deserunt dissentiet quo ut, malorum fierent constituto ea ius, dicta audire vis ad. Qui vitae sadipscing id, ceteros euripidis vim et. Sea in simul concludaturque, brute augue errem ex quo.
         Nec lorem omittam scriptorem in, virtute appareat ex cum, ex nibh possim reprimique sit. Ad posse mollis voluptatum eum. Vis ad error alienum praesent, nihil latine urbanitas vel ne, graecis eloquentiam ei eos. Sea ut possim laoreet periculis, eum eu simul nullam semper.
         Nam denique periculis maluisset at, dictas pertinacia qui id. Has viris soluta vocent cu, sea id simul incorrupte quaerendum. At alii soluta nostro qui, modus tacimates reprehendunt eum te. Et quas congue duo, hinc autem reformidans ne ius.
      </p>
   </div>
   <div class="col-md-6 image"  :style='{ backgroundImage: "url(" + img_first + ")", }'>
   </div>
   <div class="col-md-6 image"  :style='{ backgroundImage: "url(" + img_second + ")", }'>
   </div>
   <div  class="col-md-6">
      <header class="text-center">
         <h2  class="title">Lorem Ipsum</h2>
      </header>
      <p class="paragraph">
         Lorem ipsum dolor sit amet, ea ipsum idque doming has, ad has probo maluisset. Esse novum vivendo mel at. Dicunt verterem nominati ei nam. Libris petentium his cu, ne nec tota graecis mediocrem, odio case cibo vix ea. Viderer iudicabit dissentiet sit id, impedit tibique phaedrum usu eu.
         <br>Cu eum voluptaria adipiscing, has tota dissentiet an, in quo blandit principes. Illud voluptaria eu sed, duo duis aliquip et. Ea duo nihil vulputate, mea in eirmod interpretaris. Has nobis propriae appetere in, voluptua conceptam ius an.
         Iriure minimum suscipiantur an pri, nec zril consul ne, usu in quod soleat voluptatibus. Vix dictas facilis cu, utroque fierent mei in. Qui ea magna consul, an laudem malorum has. Ex odio posse sed, eu quo soleat altera. Inani deserunt dissentiet quo ut, malorum fierent constituto ea ius, dicta audire vis ad. Qui vitae sadipscing id, ceteros euripidis vim et. Sea in simul concludaturque, brute augue errem ex quo.
         Nec lorem omittam scriptorem in, virtute appareat ex cum, ex nibh possim reprimique sit. Ad posse mollis voluptatum eum. Vis ad error alienum praesent, nihil latine urbanitas vel ne, graecis eloquentiam ei eos. Sea ut possim laoreet periculis, eum eu simul nullam semper.
         Nam denique periculis maluisset at, dictas pertinacia qui id. Has viris soluta vocent cu, sea id simul incorrupte quaerendum. At alii soluta nostro qui, modus tacimates reprehendunt eum te. Et quas congue duo, hinc autem reformidans ne ius.
      </p>
   </div>
  </div>
</section>
</template>

<script>    
    export default {
    data() {
      return {
        img_first:'/storage/homepage/image-sidebar-first.jpg',
        img_second: '/storage/homepage/image-sidebar-second.jpg'
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
.title{
      margin-top: 40px;
      margin-bottom: 20px;
}
.image{
  background-size: cover;
}
    .paragraph{
      padding-left: 80px;
      padding-right: 80px;
      margin-bottom: 40px;
    }
</style>