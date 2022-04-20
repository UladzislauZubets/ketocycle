// require('./bootstrap');

import * as vue from 'vue'

import axios from 'axios'
import vueAxios from 'vue-axios'

import router from './router/index'
import store from './store/index'

const app = vue.createApp({
    el: '#app',
    
})

app.use(router)
    .use(store)
    .use(vueAxios, axios)

    .mount('#app');