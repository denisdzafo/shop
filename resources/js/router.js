import Vue from "vue";
import VueRouter  from "vue-router";
// Pages
import homepage from './pages/homepage/homepage'
import register from './customer/register'
import shop from './pages/shop/shop'
import about from './pages/about/about'
import contact from './pages/contact/contact'
import login from './pages/login/login'
import dashboard from './admin/dashboard'
import store from './store'

Vue.use(VueRouter);
// Routes
const routes = [
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

    {
      path: '/dashboard',
      name: 'dashboard',
      component: dashboard,
      meta: { requiresAuth: true }
    },
  ]


const router = new VueRouter({
    routes
})

router.beforeEach((to, from, next) => {

    // check if the route requires authentication and user is not logged in
    if (to.matched.some(route => route.meta.requiresAuth) && !store.state.isLoggedIn) {
        // redirect to login page
        next({ name: 'login' })
        return
    }

    // if logged in redirect to dashboard
    if(to.path === '/login' && store.state.isLoggedIn) {
        next({ name: 'dashboard' })
        return
    }

    next()
})

export default router
