import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes:[
        {
            path: '/',
            name: 'admin',
            component: require('./views/AdminMain').default
        },
        {
            path: '/electrolineras',
            name: 'electroleneras',
            component: require('./views/Electrolineras').default
        },
        {
            path: '/estadisticas',
            name: 'estadisticas',
            component: require('./views/Estadisticas').default
        },
        {
            path: '/personal',
            name: 'personal',
            component: require('./views/Personal').default
        },
        {
            path: '/mantenimientos',
            name: 'mantenimientos',
            component: require('./views/Mantenimientos').default
        },
        {
            path: '*',
            component: require('./views/AdminMain').default
        }
    ],
    //mode: 'history'
})
