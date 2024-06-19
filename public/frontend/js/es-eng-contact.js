
window.addEventListener('scroll', function () {
  var scrollPosition = window.scrollY;
  var windowHeight = window.innerHeight;
  var aboutSections = document.querySelectorAll('.scroll-container');

  aboutSections.forEach(function (section) {
    var sectionTop = section.offsetTop;

    if (scrollPosition >= (sectionTop - windowHeight / 1)) {
      section.querySelector('.item-scroll').classList.remove('invisible');
      section.querySelector('.item-scroll').classList.add('visible');
    } else {
      section.querySelector('.item-scroll').classList.remove('visible');
      section.querySelector('.item-scroll').classList.add('invisible');

    }
  });
});

document.getElementById("refreshButton").addEventListener("click", function () {
  location.reload();
});

// Función para cambiar el idioma a español
function cambiarIdiomaEspañol() {

  // Cambiar texto del header
  document.getElementById('inicio').innerText = 'Inicio';
  document.getElementById('acerca-de').innerText = 'Sobre nosotros';
  document.getElementById('servicios').innerText = 'Servicios';
  document.getElementById('h-automotriz').innerText = 'Automotriz';
  document.getElementById('h-arquitectonico').innerText = 'Arquitectonico';
  document.getElementById('h-industrial').innerText = 'Industrial';
  document.getElementById('productos').innerText = 'Sucursales';
  document.getElementById('contacto').innerText = 'Contacto';
  document.getElementById('btn-espanol').innerText = 'ES';
  document.getElementById('btn-ingles').innerText = 'ENG';

  // Cambiar texto del slider
  document.getElementById('slider-titulo').innerText = 'Proveedor líder de aluminio de alta calidad';
  document.getElementById('ver-mas-slider').innerText = 'Contáctanos';
  document.getElementById('slider-titulo-2').innerText = 'Soluciones Integrales';
  document.getElementById('slider-parrafo-2').innerText = 'Con un equipo de profesionales experimentados y tecnología de punta, brindamos soluciones de primer nivel diseñadas para satisfacer las necesidades específicas de su negocio. Desde la fabricación personalizada hasta el mecanizado de precisión.';
  document.getElementById('ver-mas-slider-2').innerText = 'Contáctanos';
  document.getElementById('slider-titulo-3').innerText = '¿Listo para llevar tu proyecto al próximo nivel?';
  document.getElementById('ver-mas-slider-3').innerText = 'Contáctanos';

  // Cambiar texto
  document.getElementById('form-title').innerText = 'Contáctanos';
  document.getElementById('form-subtitle').innerText = 'Tenemos la experiencia y los recursos para ayudarte en tu próximo proyecto';
  document.getElementById('t-loc-2').innerText = 'Calle 99 No. 999 x 99 y 99, Colonia, CP 99999, Umán, Mérida, Yucatán';
  document.getElementById('t-loc-3').innerText = '(999) 999 999';
  document.getElementById('t-loc-4').innerText = 'Lunes a Viernes de 8:00 a 17:00 hrs. Sábado de 8:00 a 13:00 hrs.';
  document.getElementById('f-name').innerText = 'Nombre:';
  document.getElementById('f-tel').innerText = 'Telefono:';
  document.getElementById('f-mail').innerText = 'Correo:';
  document.getElementById('f-msn').innerText = 'Mensaje:';
  document.getElementById('f-send').innerText = 'Enviar';

  //footer
  document.getElementById('t-foo-1').innerText = 'Calle 99 No. 999 x 99 y 99, Colonia, CP 99999, Umán, Mérida, Yucatán';
  document.getElementById('t-foo-2').innerText = '(999) 999 999';
  document.getElementById('t-foo-4').innerText = 'Lunes a Viernes de 8:00 a 17:00 hrs. Sábado de 8:00 a 13:00 hrs.';
  document.getElementById('f-social').innerText = '¡SÍGUENOS EN REDES SOCIALES!';

}

// Función para cambiar el idioma a inglés
function cambiarIdiomaIngles() {

  // Cambiar texto del header
  document.getElementById('inicio').innerText = 'Home';
  document.getElementById('acerca-de').innerText = 'About';
  document.getElementById('servicios').innerText = 'Services';
  document.getElementById('h-automotriz').innerText = 'Automotive';
  document.getElementById('h-arquitectonico').innerText = 'Architectonic';
  document.getElementById('h-industrial').innerText = 'Industry';
  document.getElementById('productos').innerText = 'Locations';
  document.getElementById('contacto').innerText = 'Contact';
  document.getElementById('btn-espanol').innerText = 'ES';
  document.getElementById('btn-ingles').innerText = 'ENG';

  // Cambiar texto del slider
  document.getElementById('slider-titulo').innerText = 'Leading provider of high quality aluminum';
  document.getElementById('ver-mas-slider').innerText = 'contact us';
  document.getElementById('slider-titulo-2').innerText = 'Integral Solutions';
  document.getElementById('slider-parrafo-2').innerText = 'With a team of experienced professionals and state-of-the-art technology, we provide world-class solutions designed to meet your specific business needs. From custom fabrication to precision machining.';
  document.getElementById('ver-mas-slider-2').innerText = 'contact us';
  document.getElementById('slider-titulo-3').innerText = 'Ready to take your project to the next level?';
  document.getElementById('ver-mas-slider-3').innerText = 'contact us';

  // Cambiar texto
  document.getElementById('form-title').innerText = 'Contact us';
  document.getElementById('form-subtitle').innerText = 'We have the expertise and resources to help you with your next project.';
  document.getElementById('t-loc-2').innerText = 'Street 99 No. 999 x 99 y 99, Col., C.P. 99999, Umán, Mérida, Yucatán';
  document.getElementById('t-loc-3').innerText = '+52 (999) 999 999';
  document.getElementById('t-loc-4').innerText = 'Monday to Friday from 8:00 to 17:00 hrs. Saturday from 8:00 to 13:00 hrs.';
  document.getElementById('f-name').innerText = 'Name:';
  document.getElementById('f-tel').innerText = 'Phone:';
  document.getElementById('f-mail').innerText = 'Email:';
  document.getElementById('f-msn').innerText = 'Message:';
  document.getElementById('f-send').innerText = 'Send';

  //footer
  document.getElementById('t-foo-1').innerText = 'Street 99 No. 999 x 99 y 99, Col., C.P. 99999, Umán, Mérida, Yucatán';
  document.getElementById('t-foo-2').innerText = '+52 (999) 999 999';
  document.getElementById('t-foo-4').innerText = 'Monday to Friday from 8:00 to 17:00 hrs. Saturday from 8:00 to 13:00 hrs.';
  document.getElementById('f-social').innerText = 'FOLLOW US ON SOCIAL MEDIA';


}
