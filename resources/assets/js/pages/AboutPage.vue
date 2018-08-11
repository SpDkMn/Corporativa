<template>
  <section class="section__about">
    <div class="content__banner">
      <div class="bg--black">
        <div class="container">
          <h2 class="title">Nosotros</h2>
        </div>
      </div>
    </div>
    <div class="content__about" id="history">
      <div class="container">
        <div class="">
          <h4 class="block--title">Nuesta Historia</h4>
          <p>Fundada en octubre de 1986, NOVOLIZ S.A. es parte del grupo Granados, un grupo progresivo y diversificado con más de 40 años de existencia en Perú. Novoliz es líder en producción de cebolla; hace 18 años fue la primera en Villacurí en adaptar el riego por goteo y el riego con cinta enterrada, además de innovar e implementar nuevas herramientas y practicas de cultivo, que hoy son familiares para todos los agricultores.</p>
          <p>Antes de cultivar CEBOLLAS, el grupo visitó todas las regiones del Perú e indentificó a Villacurí como el mejor lugar para la producción de estas.</p>
          <p>Actualmente producimos cebollas, paprika, granada, semilla de sandía y stevia.</p>
          <div class="text-left">
            <button type="button" @click="goToSection('mision')" class="btn--goTo">NUESTRA MISIÓN Y VISIÓN</button>
          </div>
        </div>
      </div>
    </div>
    <div class="content__about color--gray" id="mision">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-5">
            <h4 class="block--title">MISION</h4>
            <p>Producir cultivos con ventajas competitivas, organolépticas, contenido químico-nutricional, presentación y otros, sobre productos similares de otras zonas, adoptando continuamente mejores tecnologías agrícolas y procesos con responsabilidad social y ambiental.</p>
          </div>
          <div class="col-xs-12 col-md-5 col-md-offset-2">
            <h4 class="block--title">VISIÓN</h4>
            <p>Estar dentro del grupo líder en agronegocios, innovando constantemente, usando de manera eficiente y óptima los recursos agua y energía para asegurar su sostenibilidad para que continúen siendo útiles para las futuras generaciones. Maximizar nuestras ganancias para ayudar a mejorar la calidad de vida de las personas relacionadas directa o indirectamente con nuestra empresa, para que a su vez ayuden a reducir la pobreza y a la construcción de una sociedad más justa.</p>
          </div>
        </div>
        <div class="text-left">
          <button type="button" @click="goToSection('valores')" class="btn--goTo">NUESTROS VALORES</button>
        </div>
      </div>
    </div>
    <div class="content__about" id="valores">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-7">
            <h4 class="block--title">NUESTROS VALORES</h4>
            <ul class="nav nav_list">
              <li><i class="material-icons">done</i><b>Calidad:</b> En los productos y servicios que ofrecemos.</li>
              <li><i class="material-icons">done</i><b>Competitividad:</b> De productos y servicios.</li>
              <li><i class="material-icons">done</i><b>Innovación:</b> Constante y adaptando nuevas tecnologías.</li>
              <li><i class="material-icons">done</i><b>Puntualidad:</b> En la entrega de nuestros productos y servicios.</li>
              <li><i class="material-icons">done</i><b>Consistencia:</b> Entre el compromiso con nuestros clientes y nuestra capacidad de trabajo.</li>
              <li><i class="material-icons">done</i><b>Compromiso con nuestros clientes:</b> Para brindarles productos y servicios de calidad.</li>
              <li><i class="material-icons">done</i><b>Compromiso con la sociedad:</b> Brindando estabilidad y opciones de desarrollo a nuestros empleados y sus familias.</li>
              <li><i class="material-icons">done</i><b>Justicia:</b> Con trabajo justo independientemente del sexo, edad o discapacidad.</li>
              <li><i class="material-icons">done</i><b>Comunicación:</b> Constante entre miembros de la empresa, con clientes y proveedores.</li>
              <li><i class="material-icons">done</i><b>Confianza:</b> En la capacidad de nuestros trabajadores para realizar el trabajo de la mejor manera.</li>
              <li><i class="material-icons">done</i><b>Mejora Continua:</b> Sustentada en las contribuciones de nuestros empleados.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content__about color--gray" id="team">
      <div class="container">
        <h4 class="block--title">NUESTRO EQUIPO</h4>
        <ul class="nav nav_team">
          <li>
            <div class="team--item">
              <div class="team--inner">
                <div class="team--photo">
                  <img src="https://ld-wp.template-help.com/rockthemes/15708/wp-content/uploads/2017/11/team-3-1.jpg" alt="team1">
                </div>
                <h4 class="team--name">Oscar Granados Aliaga</h4>
                <p class="team--position">Presidente</p>
                <p class="team--description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quos, rem impedit corporis numquam veniam? Saepe tenetur blanditiis.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="team--item">
              <div class="team--inner">
                <div class="team--photo">
                  <img src="https://ld-wp.template-help.com/rockthemes/15708/wp-content/uploads/2017/11/team-3-1.jpg" alt="team1">
                </div>
                <h4 class="team--name">Ariana Granados</h4>
                <p class="team--position">Director</p>
                <p class="team--description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quos, rem impedit corporis numquam veniam? Saepe tenetur blanditiis.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="team--item">
              <div class="team--inner">
                <div class="team--photo">
                  <img src="https://ld-wp.template-help.com/rockthemes/15708/wp-content/uploads/2017/11/team-3-1.jpg" alt="team1">
                </div>
                <h4 class="team--name">Dora Berrospi Pardavé</h4>
                <p class="team--position">Director</p>
                <p class="team--description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quos, rem impedit corporis numquam veniam? Saepe tenetur blanditiis.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  data () {
    return {
      nowItemIndex: 0
    }
  },
  created () {
  },
  methods: {
    goToSection (name, duration = 200, easing = 'linear', callback = null) {
      const destination = document.getElementById(name)
      const easings = {
        linear (t) {
          return t
        }
      }
      const start = window.pageYOffset
      const startTime = 'now' in window.performance ? performance.now() : new Date().getTime()

      const documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight)
      const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight
      const destinationOffset = typeof destination === 'number' ? destination : destination.offsetTop
      const destinationOffsetToScroll = Math.round(documentHeight - destinationOffset < windowHeight ? documentHeight - windowHeight : destinationOffset)

      if ('requestAnimationFrame' in window === false) {
        window.scroll(0, destinationOffsetToScroll)
        if (callback) {
          callback()
        }
        return
      }

      function scroll() {
        const now = 'now' in window.performance ? performance.now() : new Date().getTime()
        const time = Math.min(1, ((now - startTime) / duration))
        const timeFunction = easings[easing](time)
        window.scroll(0, Math.ceil((timeFunction * (destinationOffsetToScroll - start)) + start))

        if (window.pageYOffset === destinationOffsetToScroll) {
          if (callback) {
            callback()
          }
          return
        }

        requestAnimationFrame(scroll)
      }
      scroll()
    }
  }
}
</script>