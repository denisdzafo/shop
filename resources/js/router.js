import Vue from "vue";
import Router from "vue-router";
// Pages
import homepage from './pages/homepage/homepage'
import register from './customer/register'
import login from './pages/login'
import shop from './pages/shop/shop'
import about from './pages/about/about'
import contact from './pages/contact/contact'

Vue.use(Router);
// Routes
export default new Router({
  mode: "history",
  routes: [
    {
      path: '/',
      name: 'homepage',
      component: homepage,
      meta: {
        auth: false
      }
    },

    {
      path: '/register',
      name: 'register',
      component: register,
      meta: {
        auth: false
      }
    },
    {
      path: '/login',
      name: 'login',
      component: login,
      meta: {
        auth: false
      }
    },
    {
      path: '/shop',
      name: 'shop',
      component: shop,
      meta: {
        auth: false
      }
    },
    {
      path: '/about',
      name: 'about',
      component: about,
      meta: {
        auth: false
      }
    },

    {
      path: '/contact',
      name: 'contact',
      component: contact,
      meta: {
        auth: false
      }
    },
  ]
});