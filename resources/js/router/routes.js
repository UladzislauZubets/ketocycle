import index from '../pages/index.vue'
import test from '../pages/test.vue'
import result from '../pages/result.vue'

const routes = [
    {
        path: '/',
        alias: '/index',
        component: index,
        name: 'index',
    },
    {
        path: '/test',
        component: test,
        name: 'test',
    },
    {
        path: '/result',
        component: result,
        name: 'result',
    },
    {
        path: '/:pathMatch(.*)*',
        name: '404',
        redirect: { name: 'index' }
    },
]

export default routes