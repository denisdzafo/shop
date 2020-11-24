<template>
  <nav class="navbar navbar-expand-lg fixed-top">
  <div class="container"><a href="#" class="navbar-brand scrollTo">CMS Blog</a>
    <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
    <div id="navbarcollapse" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><router-link to="/" class="nav-link link-scroll">Home</router-link></li>

        <li class="nav-item"><router-link to="/shop" class="nav-link link-scroll">Shop</router-link></li>
        <li class="nav-item"><router-link to="/about" class="nav-link link-scroll">About</router-link></li>
        <li class="nav-item"><a href="#" class="nav-link link-scroll">Login</a></li>
        <li class="nav-item"><router-link to="/register" class="nav-link link-scroll">Register</router-link></li>
        <li class="nav-item"><router-link to="/contact" class="nav-link link-scroll">Contact</router-link></li>    
      </ul>
    </div>
  </div>
</nav>

</template>
<script>
  export default {
    data() {
      return {
        routes: {
          // UNLOGGED
          unlogged: [
            { name: 'Register', path: 'register' },
            { name: 'Login', path: 'login'}
          ],
          // LOGGED USER
          user: [
            { name: 'Dashboard', path: 'dashboard' }
          ],
          // LOGGED ADMIN
          admin: [
            { name: 'Dashboard', path: 'admin.dashboard' }
          ]
        }
      }
    },
    mounted() {
      //
    }
  }
</script>
<style scoped>
    .navbar {
      padding-top: 0;
      padding-bottom: 0;
      background: #fff;
      border-bottom: 1px solid #e6e6e6;
    }

    @media (max-width: 991.98px) {
      .navbar {
        padding-top: 15px;
        padding-bottom: 15px;
      }
    }

    .navbar-brand {
      text-transform: uppercase;
      letter-spacing: 0.1em;
      font-weight: 700;
      font-family: "Roboto Slab", serif;
    }

    .nav-link {
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin: 0 5px;
      color: #777;
      padding-top: 30px;
      padding-bottom: 30px;
      border-top: 4px solid transparent;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      font-size: 0.875rem;
    }

    @media (max-width: 991.98px) {
      nav.navbar a.nav-link {
        padding-top: 0.7rem;
        padding-bottom: 0.7rem;
        border: none;
      }
    }

    .nav-link:hover {
      color: #333;
      border-top-color: #3490dc;
    }

    @media (max-width: 1199.98px) {
      .nav-link:hover {
        color: #4fbfa8;
      }
    }
</style>