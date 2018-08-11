<template>
<div class="header__section">
  <!-- div class="block__top">
    <div class="container">
      <div class="">

      </div>
    </div>
  </div -->
  <div class="block__bottom">
    <div class="container">
      <div class="header__logo">
        N<span>ovoliz</span> 
      </div>
      <div class="header__navbar">
        <!-- div class="hn__social clearfix">
          <ul class="nav">
            <li>
              <a href=""><img src="/static/img/ico-fb-color.png" alt="icon-fb-color" /></a>
            </li>
            <li>
              <a href=""><img src="/static/img/ico-ig-color.png" alt="icon-ig-color"/></a>
            </li>
          </ul>
        </div -->
        <div class="hn__menu">
          <ul class="nav">
            <li v-for="(item, index) in linksMenu" :key="index">
              <router-link class="alink" :to="{name: item.link}">
                <span class="name_a">{{item.name}}</span>
              </router-link>
            </li>
          </ul>
        </div>
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
      linksMenu,
      showMenu: false
    }
  },
  created () {
  },
  methods: {
    onClickOutside (e) {
      this.showMenu = false
    },
    showDropdown () {
      this.showMenu = !this.showMenu
    }
  }
}
</script>
