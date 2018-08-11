<template>
  <div class="section__home">
    <div class="content__slider">
      <div class="slider">
        <button type="button" @click="getStep('prev')" class="slide__control btn-left"></button>
        <button type="button" @click="getStep('next')" class="slide__control btn-right"></button>
        <tiny-slider ref="tinySlider" :mouse-drag="false" :loop="false" mode="gallery" auto-height :animate-delay="900" items="1" gutter="20" :controls="false">
          <div class="bg_slider" style="background-image: url(/img/slider1.jpg)">
            <div class="container">
              <div class="slider__item">
                <div class="slider__content">
                  <h5 class="title">LA MEJOR<br><span>COSECHA</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="bg_slider" style="background-image: url(/img/slider2.jpg)">
            <div class="container">
              <div class="slider__item">
                <div class="slider__content content-left">
                  <h5 class="title1">VIVE LA MEJOR<br><span>EXPERIENCIA</span></h5>
                </div>
              </div>
            </div>
          </div>
        </tiny-slider>
        <div class="indicators indi-center" @click.stop>
          <span :key="i" :class="{ 'slider-indicator-active': nowItemIndex === i - 1 }"
          @click="getIndex(i - 1)" v-for="i in 2" class="slider-indicator-icon"></span>
        </div>
      </div>
    </div>
    <div class="content__message">
      <!-- div class="container" -->
        <div class="b_left">
          <div class="b_text">
            <h3 class="title">Bienvenidos</h3>
            <p>Fundada en octubre de 1986, NOVOLIZ S.A. es parte del grupo Granados, un grupo progresivo y diversificado con más de 40 años de existencia en Perú. Novoliz es líder en producción de cebolla; hace 18 años fue la primera en Villacurí en adaptar el riego por goteo y el riego con cinta enterrada, además de innovar e implementar nuevas herramientas y practicas de cultivo, que hoy son familiares para todos los agricultores.</p>
            <h4 class="slogan">"AGRICULTURA DE PRECISIÓN CON RESPONSABILIDAD"</h4>
          </div>
        </div>
        <div class="b_right">
          <img src="/img/home1.jpg" alt="cebolla">
        </div>
      <!-- /div -->
    </div>
    <div class="content__progress">
      <div class="container">
        <div class="text-center">
          <h3 class="title">Progresos de Novoliz</h3>
        </div>
        <div class="step__list clearfix">
          <div class="step__item animated" v-animate="'slideOutUp'">
            <div class="step--icon">
              <img src="/img/icon-field.png">
            </div>
            <div class="step--text">
              <p class="num">7890</p>
              <p class="name">HECTARIAS DE<br>PRODUCCIÓN</p>
            </div>
          </div>
          <div class="step__item animated" v-animate="'slideOutUp'">
            <div class="step--icon">
              <img src="/img/icon-tractor.png">
            </div>
            <div class="step--text">
              <p class="num">650</p>
              <p class="name">UNIDAD DE<br>EQUIPO</p>
            </div>
          </div>
          <div class="step__item animated" v-animate="'slideOutUp'">
            <div class="step--icon">
              <img src="/img/icon-onion.png">
            </div>
            <div class="step--text">
              <p class="num">1500</p>
              <p class="name">TONELADAS DE<br>PRODUCTOS</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content__certified">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-5">
            <img class="img-content" src="/img/home2.jpg" alt="home2">
          </div>
          <div class="col-xs-12 col-md-5 col-md-offset-1">
            <h4>Por que elegirnos</h4>
            <div class="list__why">
              <div class="why--item">
                  <div class="why--icon">
                    <img src="/img/icon-certificate.png" alt="icon-certificate">
                  </div>
                  <div class="why--text">
                    <p class="title">Certificados</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel et modi cupiditate illum quisquam dolorem expedita suscipit, asperiores numquam accusamus non sequi</p>
                  </div>
              </div>
              <div class="why--item">
                  <div class="why--icon">
                    <img src="/img/icon-wallet.png" alt="icon-wallet">
                  </div>
                  <div class="why--text">
                    <p class="title">Precios</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel et modi cupiditate illum quisquam dolorem expedita suscipit</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content__products">
      <div class="container">
        <div class="block__title">
          <h4>NUESTROS PRODUCTOS</h4>
        </div>
        <div class="product__list">
          <div class="product__item clearfix">
            <div class="product__inner">
              <div class="product--photo">
                <img src="/img/home-onion.png" alt="onion">
              </div>
              <div class="product--detail">
                CEBOLLA
              </div>
            </div>
          </div>
          <div class="product__item clearfix">
            <div class="product__inner">
              <div class="product--photo">
                <img src="/img/home-paprika.png" alt="paprika">
              </div>
              <div class="product--detail">
                PAPRIKA
              </div>
            </div>
          </div>
          <div class="product__item clearfix">
            <div class="product__inner">
              <div class="product--photo">
                <img src="/img/home-stevia.png" alt="stevia">
              </div>
              <div class="product--detail">
                ESTEVIA
              </div>
            </div>
          </div>
          <div class="product__item clearfix">
            <div class="product__inner">
              <div class="product--photo">
                <img src="/img/home-granada.png" alt="granada">
              </div>
              <div class="product--detail">
                GRANADA
              </div>
            </div>
          </div>
          <div class="product__item clearfix">
            <div class="product__inner">
              <div class="product--photo">
                <img src="/img/home-paprika.png" alt="paprika">
              </div>
              <div class="product--detail">
                PAPRIKA
              </div>
            </div>
          </div>
          <div class="product__item clearfix">
            <div class="product__inner">
              <div class="product--photo">
                <img src="/img/home-stevia.png" alt="stevia">
              </div>
              <div class="product--detail">
                ESTEVIA
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content__clients">
      <div class="container">
        <div class="b--title">
          <h3>CLIENTES</h3>
          <p>Estamos encantados de responder sus preguntas</p>
        </div>
        <div class="client__slider">
          <button type="button" @click="getStepClients('prev')" class="slide__control btn-left"><span class="arrow"></span></button>
          <button type="button" @click="getStepClients('next')" class="slide__control btn-right"><span class="arrow"></span></button>
          <!-- /div -->
          <tiny-slider ref="tinyClients" :mouse-drag="false" :loop="true" auto-height :animate-delay="900" :controls="false" items="5" gutter="20">
            <div class="client__item" v-for="(item, index) in clients" :key="index">
              <div class="client__inner">
                <div class="vertical"><img :src="'/img/clients/'+item+'.png'" alt="name"></div>
              </div>
            </div>
          </tiny-slider>
        </div>
      </div>
    </div>
    <!-- div class="content__contact">
      <div class="container">
        <div class="b--title">
          <h3>CONTÁCTANOS</h3>
          <p>Estamos encantados de responder sus preguntas</p>
        </div>
        <div class="b--maps clearfix">
          <div class="city--item pull-left">
            <div class="gmap"></div>
            <div class="b-body">
              <h4>Lima</h4>
              <ul class="nav nav-detail">
                <li><i class="material-icons">place</i> Los Forestales 444 Urb. Las Acacias, La Molina</li>
                <li><i class="material-icons">phone</i> +51 1 348 7272</li>
                <li><i class="material-icons">email</i> ogranados@novoliz.biz</li>
              </ul>
            </div>
          </div>
          <div class="city--item pull-right">
            <div class="gmap"></div>
            <div class="b-body">
              <h4>Ica</h4>
              <ul class="nav nav-detail">
                <li><i class="material-icons">place</i> Los Forestales 444 Urb. Las Acacias, La Molina</li>
                <li><i class="material-icons">phone</i> +51 1 348 7272</li>
                <li><i class="material-icons">email</i> ogranados@novoliz.biz</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div -->
  </div>
</template>
<script>
const clients = ['walmart', 'realwweet', 'grfarms', 'keystone', 'jumosol', 'lomar', 'ruescas', 'top_onions', 'peru_spices', 'greenland_peru', 'stevia_coronel', 'grupo_huamani']
import TinySlider from 'vue-tiny-slider'
export default {
  name: 'HomePage',
  components: {
    TinySlider
  },
  data () {
    return {
      nowItemIndex: 0,
      clients
    }
  },
  created () {
  },
  methods: {
    eventModalSubscribe () {
      this.$store.dispatch('openModalSubscribe')
    },
    getIndex (step) {
      this.nowItemIndex = step
      this.$refs.tinySlider.slider.goTo(step)
    },
    getStep (step) {
      // this.nowItemIndex = step === 'next'
      this.$refs.tinySlider.slider.goTo(step)
      let index = this.$refs.tinySlider.slider.getInfo()
      this.nowItemIndex = index.index % 2
      // console.log(index)
    },
    getStepClients (step) {
      this.$refs.tinyClients.slider.goTo(step)
    }
  }
}
</script>
<style lang="scss">
#example-custom-transition{
  .fade{
    &-enter-active, &-leave-active, &-leave-to{
      transition: .3s ease-out;
      position: absolute;
      top: 0;
      left: 0;
    }
    &-enter, &-leave, &-leave-to{
      opacity: 0;
    }
  }
}
</style>
