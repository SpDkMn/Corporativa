<template>
  <div class="footer__section">
    <div class="container">
      <div class="footer--top">
        <div class="row">
          <div class="col-xs-4">
            <div class="logo">N<span>ovoliz</span></div>
            <p class="msg">Le invitamos a conocer las bondades y riesgos del cultivo de nuestros productos en el sur del Perú dentro de nuestra filosofía: AGRICULTURA DE PRECISIÓN CON RESPONSABILIDAD</p>
          </div>
          <div class="col-xs-4">
            <ul class="nav nav_links">
              <li v-for="(item, index) in linksMenu" :key="index">
                <router-link class="alink" :to="{name: item.link}">
                  <span class="name_a">{{item.name}}</span>
                </router-link>
              </li>
            </ul>
          </div>
          <div class="col-xs-4">
            <ul class="nav nav_info">
              <li>
                <i class="material-icons">place</i>
                Los Forestales 444 Urb. Las Acacias, La Molina - Lima
              </li>
              <li>
                <i class="material-icons">phone</i>
                +51 1 348 7272 - Lima
              </li>
              <li>
                <i class="material-icons">email</i>
                ogranados@novoliz.biz
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer--bottom">
        <div class="clearfix">
          <p class="copy">Novoliz - Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import {linksMenu} from '../utils/variables'
export default {
  data () {
    return {
      linksMenu
    }
  },
  methods: {
  }
}
</script>
