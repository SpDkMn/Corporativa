<template>
  <div id="app">
    <header-section/>
    <router-view/>
    <footer-section/>
  </div>
</template>

<script>
import FooterSection from './common/FooterSection.vue'
import HeaderSection from './common/HeaderSection.vue'
export default {
  name: 'App',
  components: {
    FooterSection,
    HeaderSection
  }
}
</script>
