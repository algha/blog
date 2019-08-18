import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

function loadView (view) {
  return () => import(`@/pages/${view}.vue`)
}

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: loadView('Home')
    },
    {
      path: '/user/list',
      name: 'user-list',
      component: loadView('user/List')
    },
    {
      path: '/user/{id}/edit',
      name: 'user-edit',
      component: loadView('user/Edit')
    },
    {
      path: '/user/create',
      name: 'user-create',
      component: loadView('user/Edit')
    },
    {
      path: '/post/list',
      name: 'post-list',
      component: loadView('post/List')
    },
    {
      path: '/post/{id}/edit',
      name: 'post-edit',
      component: loadView('post/Edit')
    },
    {
      path: '/post/create',
      name: 'post-create',
      component: loadView('post/Edit')
    },
    {
      path: '/post/list',
      name: 'category-list',
      component: loadView('post/List')
    }
  ]
})
