
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

  // Cambiar texto del about-1
  document.getElementById('t-ab1-t1').innerText = 'Misión';
  document.getElementById('t-ab1-st1').innerText = 'Ofrecer la mejor calidad de Aluminio en el mercado procurando respetar el medio ambiente.';
  document.getElementById('t-ab1-t2').innerText = 'Visión';
  document.getElementById('t-ab1-st2').innerText = 'Consolidarnos como la empresa de extrusión de aluminio número uno en el Sureste.';

  document.getElementById('t-ab2-t1').innerText = 'Lo que hacemos';
  document.getElementById('t-ab2-st1').innerText = 'Transformamos el aluminio en productos de diversas formas y aplicaciones, nos centramos en perfiles estándar y personalizados adaptándonos a las necesidades específicas de cada cliente.';
  document.getElementById('acerca-ver-mas').innerText = 'Conoce nuestros servicios';

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

  // Cambiar texto del about-1
  document.getElementById('t-ab1-t1').innerText = 'Mission';
  document.getElementById('t-ab1-st1').innerText = 'To offer the best quality aluminum in the market while respecting the environment.';
  document.getElementById('t-ab1-t2').innerText = 'Vision';
  document.getElementById('t-ab1-st2').innerText = 'To consolidate our position as the number one aluminum extrusion company in the Southeast.';

  document.getElementById('t-ab2-t1').innerText = 'Our business';
  document.getElementById('t-ab2-st1').innerText = 'We transform aluminum into products of various shapes and applications, focusing on standard and customized profiles adapted to the specific needs of each customer.';
  document.getElementById('acerca-ver-mas').innerText = 'Know our services';

  //footer
  document.getElementById('t-foo-1').innerText = 'Street 99 No. 999 x 99 y 99, Col., C.P. 99999, Umán, Mérida, Yucatán';
  document.getElementById('t-foo-2').innerText = '+52 (999) 999 999';
  document.getElementById('t-foo-4').innerText = 'Monday to Friday from 8:00 to 17:00 hrs. Saturday from 8:00 to 13:00 hrs.';
  document.getElementById('f-social').innerText = 'FOLLOW US ON SOCIAL MEDIA';

}
