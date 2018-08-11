import Vue from 'vue'
import Router from 'vue-router'
import HomePage from '../pages/HomePage.vue'
import AboutPage from '../pages/AboutPage.vue'
import ProductsPage from '../pages/ProductsPage.vue'
import ContactPage from '../pages/ContactPage.vue'
import CertificatePage from '../pages/CertificatePage.vue'
// import NotFoundPage from '../pages/NotFoundPage.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      redirect: '/inicio'
    },
    {
      path: '/inicio',
      name: 'HomePage',
      component: HomePage
    },
    {
      path: '*',
      redirect: '/inicio'
    },
    {
      path: '/nosotros',
      name: 'AboutPage',
      component: AboutPage
    },
    {
      path: '/productos',
      name: 'ProductsPage',
      component: ProductsPage
    },
    {
      path: '/certificacion',
      name: 'CertificatePage',
      component: CertificatePage
    },
    {
      path: '/contactanos',
      name: 'ContactPage',
      component: ContactPage
    }
  ],
  scrollBehavior (to, from, savedPosition) {
    return { x: 0, y: 0 }
  }
})
