// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App.vue'
// router
import router from './router'
// ui
import Ui from './ui'
import VueAnimate from 'vue-animate-scroll'
// http
import axios from './http'
// mixins
import browserLang from './language'
import Globals from './mixins'
// use
Vue.use(Ui)
Vue.use(VueAnimate)
// mixin
Vue.mixin(Globals)
// console.log(process.env.NODE_ENV)
Vue.prototype.$env = process.env.NODE_ENV
Vue.prototype.browserLang = browserLang
Vue.prototype.axios = axios
/* eslint-disable no-new */
const app = new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
});
