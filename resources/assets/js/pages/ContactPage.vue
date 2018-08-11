<template>
  <section class="section__contact">
    <div class="content__banner">
      <div class="bg--black">
        <div class="container">
          <h2 class="title">Contáctanos</h2>
        </div>
      </div>
    </div>
    <div class="content__contact">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="block__detail">
              <ul class="nav nav_location">
                <li>
                  <div class="circle--hover">
                    <div class="circle-back"></div>
                    <div class="circle-front"><i class="material-icons">place</i></div>
                  </div>
                  <div>
                    <p class="name">Ubicación</p>
                    <span>Los Forestales 444 Urb. Las Acacias, La Molina - Lima</span>
                    <span>Los Forestales 444 Urb. Las Acacias, La Molina - Ica</span>
                  </div>
                </li>
                <li>
                  <div class="circle--hover">
                    <div class="circle-back"></div>
                    <div class="circle-front"><i class="material-icons">phone</i></div>
                  </div>
                  <div>
                    <p class="name">Teléfono</p>
                    <span>+51 1 348 7272 - Lima</span>
                    <span>+51 1 348 7272 - Ica</span>
                  </div>
                </li>
                <li>
                  <div class="circle--hover">
                    <div class="circle-back"></div>
                    <div class="circle-front"><i class="material-icons">email</i></div>
                  </div>
                  <div>
                    <p class="name">Correo</p>
                    <span>ogranados@novoliz.biz</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="block__form">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <ui-textbox placeholder="Nombre" type="text" v-model="form.name"></ui-textbox>
                  <p v-if="flagName">Nombre es {{errorName}}</p>
                </div>
                <div class="col-xs-12 col-sm-12">
                  <ui-textbox placeholder="Email" type="email" v-model="form.email"></ui-textbox>
                  <p v-if="flagEmail">Email es {{errorEmail}}</p>
                </div>
                <div class="col-xs-12 col-sm-12">
                  <ui-textbox placeholder="Teléfono" type="text" v-model="form.phone_number"></ui-textbox>
                  <p v-if="flagPhone">Teléfono es {{errorPhone}}</p>
                </div>
                <div class="col-xs-12">
                  <ui-textbox class="input-textarea" placeholder="Comentario" multi-line type="text" v-model="form.comment"></ui-textbox>
                  <p v-if="flagComment">Comentario es {{errorComment}}</p>
                </div>
              </div>
              <div class="b_send">
                <div class="text-right">
                  <ui-button @click="validateForm()" :loading="loadForm" color="sport-primario">ENVIAR</ui-button>
                  <div v-if="flagForm" class="clearfix" style="margin-top: 10px;">
                    {{textForm}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block__map">
        <div id="gmap" class="gmap"></div>
      </div>
    </div>
  </section>
</template>
<script>
const MAPS_KEY = 'AIzaSyBMJKIi1lVCTh3VMJu_63ZUFhnTs0R_2qo'
import {stylemap} from '../utils/stylemap'
export default {
  data () {
    return {
      textForm: 'Su Mensaje a sido enviado correctamente',
      flagForm: false,
      loadForm: false,
      flagName: false,
      flagEmail: false,
      flagPhone: false,
      flagComment: false,
      errorName: 'invalido',
      errorEmail: 'invalido',
      errorPhone: 'invalido',
      errorComment: 'invalido',
      form: {
        name: '',
        email: '',
        phone_number: '',
        comment: ''
      },
      map: null,
      marker: null,
      optionsMap: {
        center: {lat: -12.065287, lng: -76.953005},
        zoom: 17,
        mapTypeControl: false,
        navigationControl: false,
        streetViewControl: false,
        scaleControl: false,
        zoomControl: true,
        fullscreenControl: false,
        draggable: true,
        scrollwheel: false,
        styles: stylemap,
        // maxZoom: 17,
        minZoom: 7
      }
    }
  },
  mounted () {
    this.validateScript()
  },
  methods: {
    validateForm () {
      this.flagForm = false
      this.flagName = false
      this.flagEmail = false
      this.flagPhone = false
      this.flagComment = false
      if (this.isEmpty(this.form.name) && this.isEmpty(this.form.email) && this.isEmpty(this.form.comment) && this.isEmpty(this.form.phone_number)) {
        return
      }
      if (this.isEmpty(this.form.name)) {
        this.errorName = 'requerido'
        this.flagName = true
      }
      if (this.isEmpty(this.form.email)) {
        this.errorEmail = 'requerido'
        this.flagEmail = true
      }
      if (this.isEmpty(this.form.phone_number)) {
        this.errorPhone = 'requerido'
        this.flagPhone = true
      }
      /*
      else if (!this.validateEmail(this.form.email)) {
        this.errorEmail = 'invalido'
        this.flagEmail = true
      }
      */
      if (this.isEmpty(this.form.comment)) {
        this.errorComment = 'requerido'
        this.flagComment = true
      }
      if (!this.flagName && !this.flagEmail && !this.flagComment) {
        this.onSubmitContact()
      }
    },
    onSubmitContact () {
      this.loadForm = true
      this.axios.post('/api/contact/create', this.form).then(response => {
        // let data = response.data
        // this.beer = data.data
        // console.log('response', data.data)
        this.clearForm()
        this.textForm = 'Su Mensaje a sido enviado correctamente'
        this.flagForm = true
        // this.fetchUser(data.data.token)
        this.loadForm = false
      }).catch(error => {
        console.log('error', error)
        this.loadForm = false
        this.textForm = 'Hubo un error en el proceso, vuelva a intentarlo'
        this.flagForm = true
      })
    },
    clearForm () {
      this.form.name = ''
      this.form.email = ''
      this.form.phone_number = ''
      this.form.comment = ''
    },
    validateScript () {
      let script = document.getElementById('script_gmaps')
      if (!script) {
        this.createGoogleMaps().then(this.createMap, this.googleMapsFailedToLoad)
      } else {
        this.createMap()
      }
    },
    createGoogleMaps () {
      return new Promise((resolve, reject) => {
        let gmap = document.createElement('script')
        gmap.setAttribute('id', 'script_gmaps')
        gmap.src = `https://maps.googleapis.com/maps/api/js?key=${MAPS_KEY}&libraries=geometry,drawing`
        gmap.type = 'text/javascript'
        gmap.onload = resolve
        gmap.onerror = reject
        document.body.appendChild(gmap)
      })
    },
    googleMapsFailedToLoad () {
      console.log('error init map')
      // this.$router.push({ name: 'person' })
    },
    createMap () {
      this.$nextTick(() => {
        if (document.getElementById('gmap')) {
          this.map = new google.maps.Map(document.getElementById('gmap'), this.optionsMap)
          this.marker = new google.maps.Marker({
            position: this.optionsMap.center,
            map: this.map,
            title: 'Ir de Viaje'
          })
        }
      })
    }
  }
}
</script>