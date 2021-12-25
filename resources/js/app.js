import 'es6-promise/auto'
import axios from 'axios'
import Vue from 'vue'
//import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import Index from './Index'
import api from './api'
import router from './router'
import store from './store'


const app = new Vue({
    components: { Index },
    router
}).$mount('#app')