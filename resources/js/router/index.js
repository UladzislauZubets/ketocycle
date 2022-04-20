import * as vueRouter from 'vue-router'

import routes from './routes'

const router = vueRouter.createRouter({
    history: vueRouter.createWebHistory(),
    routes,
})

export default router