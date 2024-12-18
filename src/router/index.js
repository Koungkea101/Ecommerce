import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL), // Use history mode
  routes: [
    {
      path: '/',
      name: 'app',
      component: () => import('../views/homeView.vue'),
      redirect: '/home',
      children: [
        {
          path: '/home',
          name: 'home',
          component: () => import('../views/pageHome.vue'),
        },
        {
          path: 'page1',
          name: 'page1',
          component: () => import('../views/page1.vue'),
        },
        {
          path: 'page2', 
          name: 'page2',
          component: () => import('../views/page2.vue'),
        },
        {
          path: 'page3', 
          name: 'page3',
          component: () => import('../views/page3.vue'),
        },
      ],
    },
  
  ],
});

export default router;
