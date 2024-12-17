import { createRouter, createWebHistory } from 'vue-router'
//import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path:'/',
      name: 'home',
      component: () => import('../views/HomeView.vue')
    },
    {
      path: '/categories/:categoryId',
      // path:'/categories',
      name: 'categories',
      component: () => import('../views/CategoryView.vue')
    },
    {
      path: '/products/:productId',
      // path: '/',
      name: 'products',
      component: () => import('../views/ProductView.vue')
    },
    
  ]
})

export default router
