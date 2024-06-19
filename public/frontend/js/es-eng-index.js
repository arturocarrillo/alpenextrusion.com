
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

  // Cambiar texto acerca de
  document.getElementById('acerca-titulo').innerText = 'Sobre nosotros';
  document.getElementById('acerca-subtitulo').innerText = 'Somos una empresa establecida en el estado de Yucatán con procesos innovadores en la creación del aluminio, ofreciendo soluciones integrales en el mercado.';
  document.getElementById('acerca-ver-mas').innerText = 'Contáctanos';

  // Cambiar texto highlight
  document.getElementById('t-hig-1').innerText = 'Empresa Líder en el sureste de México';
  document.getElementById('t-hig-2').innerText = 'Más de 25 años de experiencia';
  document.getElementById('t-hig-3').innerText = 'Soluciones integrales';
  document.getElementById('t-hig-4').innerText = 'Empresa Certificada';
  document.getElementById('t-hig-5').innerText = 'Responsable con el medio ambiente';
  document.getElementById('t-hig-6').innerText = 'Empresa 100% Mexicana';

  // Cambiar texto servicios
  document.getElementById('t-serv-1').innerText = 'Conoce nuestros servicios';
  document.getElementById('t-serv-2').innerText = 'En Alpen Extrusión ofrecemos una amplia variedad de aleaciones de aluminio , comprometidos con la innovación, la calidad y el rendimiento, ofrecemos servicios que se adaptan a diversas aplicaciones en las industrias.';
  document.getElementById('t-serv-btn-1').innerText = 'Automotriz';
  document.getElementById('t-serv-btn-2').innerText = 'Arquitectónico';
  document.getElementById('t-serv-btn-3').innerText = 'Industrial';

  // Team
  document.getElementById('t-map-1').innerText = 'Equipo Alpen';
  document.getElementById('t-map-2').innerText = 'Con más de 25 años de experiencia, nos hemos consolidado como líderes en nuestro sector, ofreciendo servicios de alta calidad y soluciones innovadoras a nuestros clientes. A lo largo de estas décadas, hemos perfeccionado nuestras técnicas y procesos, adaptándonos a las demandas cambiantes del mercado y asegurándonos de estar siempre a la vanguardia.';

  //footer
  document.getElementById('t-foo-1').innerText = 'Calle 99 No. 999 x 99 y 99, Colonia, CP 99999, Umán, Mérida, Yucatán';
  document.getElementById('t-foo-2').innerText = '9886 88 07 06';
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

  // Cambiar texto acerca de
  document.getElementById('acerca-titulo').innerText = 'About Us';
  document.getElementById('acerca-subtitulo').innerText = 'We are a company established in the state of Yucatan with innovative processes in the creation of aluminum, offering integral solutions in the market.';
  document.getElementById('acerca-ver-mas').innerText = 'Contact Us';

  // hightligh
  document.getElementById('t-hig-1').innerText = 'Leading company in southeastern Mexico';
  document.getElementById('t-hig-2').innerText = 'Over 25 years of experience';
  document.getElementById('t-hig-3').innerText = 'Integrated solutions';
  document.getElementById('t-hig-4').innerText = 'Certified Company';
  document.getElementById('t-hig-5').innerText = 'Environmentally responsible';
  document.getElementById('t-hig-6').innerText = '100% Mexican Company';

  // hightligh    
  document.getElementById('t-serv-1').innerText = 'Our services';
  document.getElementById('t-serv-2').innerText = 'In Alpen Extrusion we offer a wide variety of aluminum alloys, committed to innovation, quality and performance, we offer services that suit various applications in industries.';
  document.getElementById('t-serv-btn-1').innerText = 'Automotive';
  document.getElementById('t-serv-btn-2').innerText = 'Architectonic';
  document.getElementById('t-serv-btn-3').innerText = 'Industry';

  // Team
  document.getElementById('t-map-1').innerText = 'Team Alpen';
  document.getElementById('t-map-2').innerText = 'With over 25 years of experience, we have established ourselves as leaders in our sector, offering high quality services and innovative solutions to our customers. Throughout these decades, we have perfected our techniques and processes, adapting to the changing demands of the market and ensuring that we are always at the forefront.';

  //footer
  document.getElementById('t-foo-1').innerText = 'Street 99 No. 999 x 99 y 99, Col., C.P. 99999, Umán, Mérida, Yucatán';
  document.getElementById('t-foo-2').innerText = '+529886880706';
  document.getElementById('t-foo-4').innerText = 'Monday to Friday from 8:00 to 17:00 hrs. Saturday from 8:00 to 13:00 hrs.';
  document.getElementById('f-social').innerText = 'FOLLOW US ON SOCIAL MEDIA';


}
