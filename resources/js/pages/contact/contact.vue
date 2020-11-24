<template>
  <div>
    <section id="header" class="intro-section pb-2" :style='{ backgroundImage: "url(" + img_src + ")", }'>
       <div class="container text-center">
          <h1 class="text-shadow mb-5">Contact</h1>
       </div>
    </section>

    <section id="contact"  class="content">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="contact-form">
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-md-6 mb-20">
                    <input type="text" name="first_name" placeholder="Your firstname *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6 mb-20">
                    <input type="text" name="last_name" placeholder="Your lastname *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6 mb-20">
                    <input type="text" name="email" placeholder="Your email *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6 mb-20">
                    <input type="text" name="phone" placeholder="Your phone" class="form-control">
                  </div>
                  <div class="col-md-12 mb-20">
                    <textarea name="message" placeholder="Message for me *" rows="4" required="required" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12 mb-20">
                    <button type="submit" class="btn btn-outline-primary">Send message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>    
    export default {
    data() {
      return {
        img_src:'/storage/contact.jpg'
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
  .content{
    padding-top: 80px;
    padding-bottom: 80px;
  }

  .mb-20{
    margin-bottom: 20px;
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