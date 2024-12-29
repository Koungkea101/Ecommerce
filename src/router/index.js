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
          path: 'page/:nb/:message?',
          name: 'page',
          component: () => import('../views/page.vue'),
          children: [
            {
              path: 'section/:sn',
              name: 'section',
              component: () => import('../views/section.vue'),
            },
          ]
        },
      ],
    },
  
  ],
});

export default router;
