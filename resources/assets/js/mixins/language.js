export default {
  data () {
    let _lang = {
      es: {
        /*
          * Header
          */
        header_menu_anda: 'Anda Watch',
        header_menu_features: 'Características',
        header_menu_contact: 'Contacto',
        header_menu_support: 'Soporte',
        header_btn_buy: 'COMPRAR',
        /*
          * Footer
          */
        footer_form_title: '¡SUSCRÍBETE AHORA!',
        footer_form_description: 'Quieres estar al tanto de todas las noticias de nuestros relojes y otras novedades. Suscríbete ahora dejando tu correo electrónico.',
        footer_form_placeholder: 'Ingresa tu email',
        footer_form_btn: 'SUSCRIBIRSE',
        footer_information_title: 'INFORMACIÓN',
        footer_link_company: '¿Quiénes somos?',
        footer_link_terms: 'Términos y condiciones',
        footer_link_privacy: 'Políticas de privacidad',
        footer_link_manual: 'Manuales de usuario',
        footer_link_markers: 'Puntos de venta',
        footer_link_book: 'Libro de reclamaciones',
        footer_contact_title: 'CONTACTO',
        footer_message: 'SIEMPRE CONTIGO',
        footer_copy: 'ANDA TECHNOLOGIES, DERECHOS RESERVADOS',
        /*
          * Not Found Page
          */
        notfound_title: '¡OOPS!<br><span>ERROR 404</span>',
        notfound_description: 'Lo siento, no podemos encontrar la página que estás buscando.',
        notfound_message: 'Tal vez quisiste entrar a una de estas páginas:',
        /*
          * Company Page
          */
        about_title: '¿Quiénes somos?',
        about_description1: 'Anda es una plataforma para la conexión y la comunicación en la familia. Nuestro primer producto para cumplir con este objetivo es un reloj inteligente con conectividad 4G para niños. Además estamos desarrollando un reloj para adultos mayores y un segundo reloj para niños.',
        about_description2: 'Para permitir comunicación inmediata y emocional entre miembros de una familia no solo nos enfocamos en el desarrollo de hardware sino que tenemos un compromiso fuerte en el desarrollo de software. Hemos creado un sólido ecosistema que les permite comunicarse a través de sus teléfonos inteligentes y de sus dispositivos Anda.',
        /*
          * Carts Page
          */
        carts_message: '¡GRACIAS POR TU INTERÉS EN EL ANDA WATCH!',
        carts_indiegogo_text: 'Apoyanos en nuestra campaña y obtén grandes recompensas.',
        carts_btn_campaign: 'VER CAMPAÑA',
        carts_point_sale_title: 'Puntos de venta',
        carts_point_sale_text: 'Visita nuestros centros de experiencia de lunes a domingo.',
        carts_btn_map: 'VER MAPA',
        carts_footer_text1: 'El uso de este servicio, significa que usted está de acuerdo con los términos y condiciones, así como las modificaciones que sean aplicables y se encuentren vigentes al momento de realizar la compra del ANDA WATCH.',
        carts_footer_text2: 'La elección del color y entrega del producto se coordinará por correo electrónico Para mayor información, por favor consulte nuestras condiciones de uso y políticas de privacidad o comuniquese con nosotros.',
        carts_physical_store_title: 'Tienda Física',
        carts_virtual_store_title: 'Tienda Virtual',
        /*
          * Home Page
          */
        // Menu Landing
        landing_menu1: 'Anda Watch',
        landing_menu2: 'Comunicación',
        landing_menu3: 'Geolocalización',
        landing_menu4: 'Especificaciones',
        landing_menu5: 'Más',
        // Section Smartwatch
        smartwatch_title: 'RELOJ INTELIGENTE<br>PARA NIÑOS',
        smartwatch_description: 'No sientas distancia de tus hijos durante el día. El reloj de Anda tiene llamadas, un sistema de mensajería y lenguaje de símbolos. También tiene seguimiento por GPS y es totalmente configurable a través de nuestras Apps.',
        smartwatch_message: 'Siempre Contigo',
        smartwatch_btn_video: 'Ver<br>video',
        smartwatch_multiplatform_title: 'NUESTRA APP<br>MULTIPLATAFORMA',
        smartwatch_multiplatform_message1: 'El Anda Watch puede administrarse a través de la aplicación móvil de Anda (disponible para iOS y Android) y la web de Anda en web.anda.pe',
        smartwatch_multiplatform_message2: 'Utiliza nuestra App para configurar el reloj, ver dónde está y mandarle mensajes de voz, texto, emojis, dibujos y stickers con nuestro sistema.',
        // Section Feature - List Cards
        feature_title: 'CARACTERÍSTICAS',
        feature_description: 'Conectamos familias incorporando a los más pequeños al mundo digital dándole acceso únicamente a lo que necesitan.',
        feature_cards_title1: 'MODO CLASES',
        feature_cards_description1: 'Configura un horario de clases o estudio y restringiremos las funcionalidades distractoras del reloj.',
        feature_cards_title2: 'LISTA DE CONTACTOS',
        feature_cards_description2: 'Para su seguridad, los niños sólo podrán comunicarse con los contactos asignados por los padres.',
        feature_cards_title3: 'HACER AMIGOS',
        feature_cards_description3: 'Tus hijos podrán agregar a otros niños que tengan un Anda Watch a su lista de amigos, con tu aprobación',
        feature_cards_title4: 'JUEGOS',
        feature_cards_description4: 'Incluimos 4 juegos cuidadosamente desarrollados para estimular su curiosidad a la vez que se divierten.',
        feature_cards_title5: 'INFORMACIÓN RELEVANTE',
        feature_cards_description5: 'Tu hijo podrá mostrar en su reloj toda aquella información médica relevante para casos de urgencia.',
        feature_cards_title6: 'SENSOR DE PRESENCIA',
        feature_cards_description6: 'Podrás saber cuándo tu niño tiene puesto o no el reloj.',
        // Section Feature - Comunication
        feature_comunication_title: 'Comunicación',
        feature_comunication_description: 'Damos las herramientas para que siempre estes en contacto.',
        feature_comunication_card_t1: 'Mensajería completa',
        feature_comunication_card_d1: 'Podrán enviarse mensajes de texto, audio, emoticones, pegatinas y hasta dibujos.',
        feature_comunication_card_t2: 'Llamadas',
        feature_comunication_card_d2: 'Se podrán hacer llamadas desde y hacia los relojes Anda.',
        feature_comunication_card_t3: 'Lenguaje de Símbolos',
        feature_comunication_card_d3: 'Permite que hasta los más pequeños puedan comunicarte lo que les está pasando.',
        feature_btn_more: 'Ver<br>más',
        // Section Feature - Geofence
        feature_geofence_title: 'Geolocalización',
        feature_geofence_description: 'La facilidad de saber dónde están y la tranquilidad de saber que no han salido de donde deberían estar.',
        feature_geofence_card_t1: 'Historial de posiciones',
        feature_geofence_card_d1: 'El reloj constantemente está mandando su ubicación y creando un historial de sus movimientos día a día.',
        feature_geofence_card_t2: 'Creación de Zonas seguras',
        feature_geofence_card_d2: 'Con nuestro sistema de ubicación, el reloj inteligente informa si está dentro o fuera de las Zonas seguras a las que fue asignado.',
        // Section specification - List
        specification_list_title: '"Te brindamos tecnología del más alto nivel"',
        specification_list_item1: 'BASADO EN ANDROID 7.1',
        specification_list_item2: 'MATERIALES HIPOALERGÉNICOS',
        specification_list_item3: '2G, 3G<br>Y 4G LTE',
        specification_list_item4: 'BATERÍA DE<br>400mAh',
        specification_list_item5: 'UBICACIÓN POR GPS, GLONASS, NETWORK Y WIFI',
        specification_list_item6: 'SENSOR DE MOVIMIENTO Y PRESENCIA',
        specification_list_item7: 'RESISTENTENCIA AL POLVO Y AGUA (IP67)',
        specification_list_item8: 'QUALCOMM SNAPDRAGON WEAR 2100',
        specification_list_item9: 'PANTALLA AMOLED + GORILLA GLASS 3',
        specification_list_item10: 'BLUETOOTH PARA HACER AMIGOS ENTRE RELOJES',
        specification_choose_anda: 'ELIGE TU ANDA WATCH',
        specification_pick_color: 'ELIGE UN COLOR',
        specification_btn_carts: 'COMPRAR',
        // Section Medios
        medios_title: 'ANDA WATCH EN LOS MEDIOS',
        medios_form_title: '¿TIENES ALGUNA DUDA?',
        medios_form_description: 'Para obtener información adicional sobre el reloj o cómo comprarlo escribenos un mensaje.',
        medios_btn_article: '> Ver artículo',
        medios_form_btn: 'ENVIAR',
        medios_placeholder_name: 'Nombre',
        medios_placeholder_invalid_name: 'Nombre incorrecto',
        medios_placeholder_mail: 'Email',
        medios_placeholder_invalid_email: 'Correo electrónico incorrecto',
        medios_placeholder_message: 'Mensaje',
        medios_placeholder_invalid_message: 'Mensaje incorrecto',
        /*
          * Feature Page
          */
        features_title: 'COMUNICACIÓN<br>Y GEOLOCALIZACIÓN',
        features_message_title: 'Mensajes',
        features_message_description: 'También estarán comunicados por medio de un chat completo con el cual podrán enviarse mensajes de texto, audio, emoticones, pegatinas y hasta dibujos. Las personas con los que los niños se podrán comunicar estarán controlados por los padres.',
        features_calls_title: 'Llamadas',
        features_calls_description: 'Se podrán hacer llamadas desde y hacia los relojes Anda. Las personas no autorizadas no podrán comunicarse con tus niños.',
        features_symbols_title: 'Lenguaje de símbolos',
        features_symbols_description: 'Permite que hasta los más pequeños puedan comunicarte lo que les está pasando. Solo con dibujar o seleccionar formas básicas como círculos y triángulos. Estos mensajes llegarán a las personas previamente configuradas por 3 distintos canales: chat, SMS y/o correo electrónico.',
        features_history_title: 'Historial de posiciones',
        features_history_description: 'El reloj constantemente esta mandando su ubicación y creando un historial de sus movimientos día a día. Los padres podrán ver el historial detallado de las últimas 24 horas con la hora de cada una de sus ubicaciones.',
        features_safezone_title: 'Zona seguras',
        features_safezone_description: 'El reloj puede identificar cuando ingresa o sale de una Zona segura designada. Los padres pueden crear cuantas Zonas seguras quieran.',
        features_btn_back: 'Volver',
        /*
          * Complaints Page
          */
        complaints_titl1: 'Información del Consumidor Reclamante',
        complaints_placeholder_person_natural: 'Persona natural',
        complaints_placeholder_company: 'Empresa',
        complaints_placeholder_name: 'Nombre',
        complaints_placeholder_lastname_father: 'Apellido Paterno',
        complaints_placeholder_lastname_mother: 'Apellido Materno',
        complaints_placeholder_dni: 'DNI',
        complaints_placeholder_carnet: 'Carnet de extranjeria',
        complaints_placeholder_number: 'Número de documento',
        complaints_placeholder_child: '¿Eres menor de edad?',
        complaints_placeholder_phone: 'Teléfono',
        complaints_placeholder_email: 'Email',
        complaints_placeholder_address: 'Dirección',
        // part 2
        complaints_titl2: 'Identificación del Bien Contratado',
        complaints_placeholder_type: 'Tipo de bien',
        complaints_placeholder_product: 'Producto',
        complaints_placeholder_service: 'Servicio',
        complaints_placeholder_monto: 'Monto',
        complaints_placeholder_escription: 'Descripción',
        // part 3
        complaints_titl3: 'Detalle de la Reclamación',
        complaints_placeholder_reclamo: 'Reclamo, disconformidad relacionada a los productos y/o servicios.',
        complaints_placeholder_queja: 'Queja, disconformidad no relacionada a los productos y/o servicios o malestar o descontento a la atención al público.',
        complaints_placeholder_detlle: 'Detalle',
        complaints_placeholder_pedido: 'Pedido',
        // Dialog
        dialog_manual_title: 'DESCARGA NUESTROS MANUALES DE USUARIO',
        dialog_newsletter_title: 'SUSCRIPCIÓN EXITOSA',
        dialog_contact_title: '¡GRACIAS POR CONTACTARNOS!<br><span>Te estaremos respondiendo pronto.</span>',
        dialog_error_title: 'Hubo un error en el proceso, vuelva a intentarlo.',
        dialog_btn_close: 'CERRAR'
      },
      us: {
        /*
          * Header
          */
        header_menu_anda: 'Anda Watch',
        header_menu_features: 'Features',
        header_menu_contact: 'Contact',
        header_menu_support: 'Support',
        header_btn_buy: 'BUY',
        /*
          * Footer
          */
        footer_form_title: 'SUBSCRIBE NOW!',
        footer_form_description: 'If you want to be notified with the news of our watches. Subscribe now by leaving your email.',
        footer_form_placeholder: 'Enter your email',
        footer_form_btn: 'SUBSCRIBE',
        footer_information_title: 'INFORMATION',
        footer_link_company: 'About us',
        footer_link_terms: 'Terms and Conditions',
        footer_link_privacy: 'Privacy policies',
        footer_link_manual: 'User manual',
        footer_link_markers: 'Points of sale',
        footer_link_book: 'Complaints book',
        footer_contact_title: 'CONTACT',
        footer_message: 'ALWAYS WITH YOU',
        footer_copy: 'ANDA TECHNOLOGIES, ALL RIGHTS RESERVED',
        /*
          * Not Found Page
          */
        notfound_title: '¡OOPS!<br><span>ERROR 404</span>',
        notfound_description: 'Sorry, we can\'t find the page you\'re looking for.',
        notfound_message: 'Maybe you wanted to enter one of these pages:',
        /*
          * Company Page
          */
        about_title: 'About us',
        about_description1: 'We are a platform for family communication and connection, our first product is a LTE smartwatch for children and we have an elderly watch and a second watch for children on the pipeline.',
        about_description2: 'To enable immediate and emotional communication between family members we are not only a hardware company but a commited software company and we have devolped a strong ecosystem that connects them through their mobile phones and through their Anda hardware products.',
        /*
          * Carts Page
          */
        carts_message: 'THANK YOU FOR YOUR INTEREST IN THE ANDA WATCH!',
        carts_indiegogo_text: 'Support us in our campaign and get great rewards.',
        carts_btn_campaign: 'SEE CAMPAIGN',
        carts_point_sale_title: 'Points of sale',
        carts_point_sale_text: 'Visit our experience centers from Monday to Sunday.',
        carts_btn_map: 'SEE MAP',
        carts_footer_text1: 'The use of this service means that you agree to the terms and conditions, as well as the modifications that are applicable and are in effect at the time of purchasing the ANDA WATCH.',
        carts_footer_text2: 'The choice of color and delivery of the product will be coordinated by email For more information, please check our terms of use and privacy policies or contact us.',
        carts_physical_store_title: 'Physical Store',
        carts_virtual_store_title: 'Virtual Store',
        /*
          * Home Page
          */
        // Menu Landing
        landing_menu1: 'Anda Watch',
        landing_menu2: 'Communication',
        landing_menu3: 'Location',
        landing_menu4: 'Specification',
        landing_menu5: 'More',
        // Section Smartwatch
        smartwatch_title: 'SMARTWATCH<br>FOR KIDS',
        smartwatch_description: "Don't feel the distance between your children and you during the day. The Anda Watch has mobile calling, a messaging system and symbol language. It also has GPS tracking and is fully configurable through our Apps.",
        smartwatch_message: 'Always with you',
        smartwatch_btn_video: 'Watch<br>video',
        smartwatch_multiplatform_title: 'OUR MULTIPLATFORM<br>APPS',
        smartwatch_multiplatform_message1: 'The Anda Watch can be managed through the Anda mobile application (available for iOS and Android) and the Anda website at web.anda.pe',
        smartwatch_multiplatform_message2: 'Use our App to setup the watch, see where your kis is and send voice messages, text, emoticons, drawings and stickers with our messaging system.',
        // Section Feature - List Cards
        feature_title: 'FEATURES',
        feature_description: 'We connect families by incorporating the youngest into the digital world by giving them access only to what they need.',
        feature_cards_title1: 'CLASS MODE',
        feature_cards_description1: 'Set a class or study schedule and restrict the distracting features of the watch.',
        feature_cards_title2: 'CONTACTS LIST',
        feature_cards_description2: 'For their safety, children will only be able to communicate with the contacts assigned by the parents.',
        feature_cards_title3: 'MAKE FRIENDS',
        feature_cards_description3: 'Your children can add other children who have an Anda Watch to their friends list, with your approval.',
        feature_cards_title4: 'GAMES',
        feature_cards_description4: 'We include 4 games developed to stimulate their curiosity while having fun.',
        feature_cards_title5: 'RELEVANT INFORMATION',
        feature_cards_description5: 'Your child will be able to show on his watch relevant medical information in cases of urgency.',
        feature_cards_title6: 'PRESENCE SENSOR',
        feature_cards_description6: 'You can know whether your child is wearing the watch or not.',
        // Section Feature - Comunication
        feature_comunication_title: 'Communication',
        feature_comunication_description: 'We give you the tools so you can always be in touch.',
        feature_comunication_card_t1: 'Complete messaging system',
        feature_comunication_card_d1: 'You can send text, audio, emoji, stickers and drawings.',
        feature_comunication_card_t2: 'Calling',
        feature_comunication_card_d2: 'You can make phone calls from and to the Anda watch.',
        feature_comunication_card_t3: 'Symbol-based language',
        feature_comunication_card_d3: 'A simple system so smaller children can tell you about their situation.',
        feature_btn_more: 'View<br>more',
        // Section Feature - Geofence
        feature_geofence_title: 'Location',
        feature_geofence_description: 'The ease of knowing where they are and the safety of being alerted when they move out of where they should be.',
        feature_geofence_card_t1: 'Location history',
        feature_geofence_card_d1: 'The watch is constantly sending its location and building a record you can view of its movements during the day.',
        feature_geofence_card_t2: 'Safe Zones',
        feature_geofence_card_d2: 'With our location system the watch will let you know if the watch moves out or into a designated safe zone.',
        // Section specification - List
        specification_list_title: '"We use the best technology"',
        specification_list_item1: 'BASED ON ANDROID 7.1',
        specification_list_item2: 'NON-ALERGIC MATERIALS',
        specification_list_item3: '2G, 3G<br>AND 4G LTE',
        specification_list_item4: '400mAh<br>BATTERY',
        specification_list_item5: 'GPS, GLONASS, NETWORK AND WIFI LOCATION',
        specification_list_item6: 'MOVEMENT AND PRESENCE SENSORS',
        specification_list_item7: 'IP67 WATER AND DUST PROTECTION',
        specification_list_item8: 'QUALCOMM SNAPDRAGON WEAR 2100',
        specification_list_item9: 'AMOLED SCREEN + GORILLA GLASS 3',
        specification_list_item10: 'BLUETOOTH FOR WATCH TO WATHC PAIRING',
        specification_choose_anda: 'SELECT YOUR ANDA WATCH',
        specification_pick_color: 'PICK A COLOR',
        specification_btn_carts: 'BUY',
        // Section Medios
        medios_title: 'ANDA WATCH IN THE NEWS',
        medios_form_title: '¿ANYTHING ELSE YOUS WOULD WANT TO KNOW?',
        medios_form_description: 'Get additional infomation about the watch or how to buy it.',
        medios_btn_article: '> View more',
        medios_form_btn: 'SEND',
        medios_placeholder_name: 'Name',
        medios_placeholder_invalid_name: 'Invalid Name',
        medios_placeholder_mail: 'Email',
        medios_placeholder_invalid_email: 'Invalid Email',
        medios_placeholder_message: 'Message',
        medios_placeholder_invalid_message: 'Invalid Message',
        /*
          * Feature Page
          */
        features_title: 'COMUNICATION<br>& LOCATION',
        features_message_title: 'Messaging',
        features_message_description: 'They will be connected through a messaging system where they can send text, audio, emoji and drawings. And you control who your child will be able to chat with.',
        features_calls_title: 'Calling',
        features_calls_description: "You can make calls from and to the Anda watch. People not authorized won't be able to reach your children.",
        features_symbols_title: 'Symbol-based language',
        features_symbols_description: 'Younger children will be able to tell you about their status with only drawing or selecting simple geometric shapes. These messages will reach those you decide via chat, SMS and email.',
        features_history_title: 'Location history',
        features_history_description: 'The watch is constantly sending its location and creating a history of its movements during the day. Parents can see a detailed 24 hour history of locations.',
        features_safezone_title: 'Safe zones',
        features_safezone_description: 'The watch will let you know if it goes in or out of a designated safe zone. Parents can create as many safe zones as wanted.',
        features_btn_back: 'Back',
        /*
          * Complaints Page
          */
        complaints_titl1: 'Información del Consumidor Reclamante (Consumer information)',
        complaints_placeholder_person_natural: 'Persona natural (person)',
        complaints_placeholder_company: 'Empresa (company)',
        complaints_placeholder_name: 'Nombre (name)',
        complaints_placeholder_lastname_father: 'Apellido Paterno (father family name)',
        complaints_placeholder_lastname_mother: 'Apellido Materno (mother family name)',
        complaints_placeholder_dni: 'DNI (national id number)',
        complaints_placeholder_carnet: 'Carnet de extranjeria (foreign card)',
        complaints_placeholder_number: 'Número de documento (document number)',
        complaints_placeholder_child: '¿Eres menor de edad? (¿are you a minor?)',
        complaints_placeholder_phone: 'Teléfono (phone)',
        complaints_placeholder_email: 'Email (email)',
        complaints_placeholder_address: 'Dirección (address)',
        // part 2
        complaints_titl2: 'Identificación del Bien Contratado (acquired item identification)',
        complaints_placeholder_type: 'Tipo de bien (item type)',
        complaints_placeholder_product: 'Producto (product)',
        complaints_placeholder_service: 'Servicio (service)',
        complaints_placeholder_monto: 'Monto (amount)',
        complaints_placeholder_escription: 'Descripción (description)',
        // part 3
        complaints_titl3: 'Detalle de la Reclamación (complaint details)',
        complaints_placeholder_reclamo: 'Reclamo, disconformidad relacionada a los productos y/o servicios. (complaint, non-comformance related to the producs and/or services)',
        complaints_placeholder_queja: 'Queja, disconformidad no relacionada a los productos y/o servicios o malestar o descontento a la atención al público. (Unsatifaction or disconformity not related to the products and/or services or discontent with the service.',
        complaints_placeholder_detlle: 'Detalle (detail)',
        complaints_placeholder_pedido: 'Pedido (request)',
        // Dialog
        dialog_manual_title: 'DOWNLOAD OUR USER MANUALS',
        dialog_newsletter_title: 'SUSCRRIBED',
        dialog_contact_title: '¡THANKS FOR CONTACTING US!<br><span>We will be answering you soon.</span>',
        dialog_error_title: 'There was an error, try again.',
        dialog_btn_close: 'CLOSE'
      }
    }
    let storage = window.localStorage.getItem('language') || null
    let lang
    if (!storage) {
      lang = this.browserLang === 'es' ? _lang.es : _lang.us
    } else {
      lang = storage === 'es' ? _lang.es : _lang.us
    }
    return {
      lang
    }
  }
}
