<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nombre del Sitio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Estilo personalizado para mostrar el submenú al hacer hover */
    .navbar-nav .dropdown-menu {
      display: none;
    }

    .navbar-nav .nav-item:hover .dropdown-menu {
      display: block;
      transition: all 0.3s ease-in-out;
      margin-top: 0; /* Ajustar si hay algún desplazamiento vertical */
    }
  </style>
</head>
<body>
  <header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Nombre de la Empresa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" data-translate="home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-translate="about">Acerca de</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-translate="services">Servicios</a>
            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
              <a class="dropdown-item" href="#" data-translate="service1">Servicio 1</a>
              <a class="dropdown-item" href="#" data-translate="service2">Servicio 2</a>
              <a class="dropdown-item" href="#" data-translate="service3">Servicio 3</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-translate="products">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-translate="contact">Contacto</a>
          </li>
        </ul>
        <button class="btn btn-outline-light" id="changeLanguage">English</button>
      </div>
    </div>
  </header>

  <!-- Slider de Fotos -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagen1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagen2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagen3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <!-- Sección de Servicios -->
  <section class="container mt-5">
    <h2 class="text-center mb-4" data-translate="ourServices">Nuestros Servicios</h2>
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <img src="servicio1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" data-translate="service1">Servicio 1</h5>
            <p class="card-text" data-translate="service1Description">Descripción del Servicio 1.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <img src="servicio2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" data-translate="service2">Servicio 2</h5>
            <p class="card-text" data-translate="service2Description">Descripción del Servicio 2.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <img src="servicio3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" data-translate="service3">Servicio 3</h5>
            <p class="card-text" data-translate="service3Description">Descripción del Servicio 3.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-light mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5 data-translate="contactInfo">Información de Contacto</h5>
          <p data-translate="email">Correo: info@example.com</p>
          <p data-translate="address">Dirección: Dirección de la empresa</p>
          <p data-translate="phone">Teléfono: +1234567890</p>
        </div>
        <div class="col-md-6">
          <h5 data-translate="socialMedia">Redes Sociales</h5>
          <!-- Aquí puedes colocar iconos de redes sociales utilizando fuentes de iconos o imágenes -->
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    const translations = {
      en: {
        home: "Home",
        about: "About",
        services: "Services",
        service1: "Service 1",
        service2: "Service 2",
        service3: "Service 3",
        products: "Products",
        contact: "Contact",
        ourServices: "Our Services",
        service1Description: "Description of Service 1.",
        service2Description: "Description of Service 2.",
        service3Description: "Description of Service 3.",
        contactInfo: "Contact Information",
        email: "Email: info@example.com",
        address: "Address: Company address",
        phone: "Phone: +1234567890",
        socialMedia: "Social Media"
      },
      es: {
        home: "Inicio",
        about: "Acerca de",
        services: "Servicios",
        service1: "Servicio 1",
        service2: "Servicio 2",
        service3: "Servicio 3",
        products: "Productos",
        contact: "Contacto",
        ourServices: "Nuestros Servicios",
        service1Description: "Descripción del Servicio 1.",
        service2Description: "Descripción del Servicio 2.",
        service3Description: "Descripción del Servicio 3.",
        contactInfo: "Información de Contacto",
        email: "Correo: info@example.com",
        address: "Dirección: Dirección de la empresa",
        phone: "Teléfono: +1234567890",
        socialMedia: "Redes Sociales"
      }
    };

    $(document).ready(function(){
      $('#changeLanguage').click(function(){
        var currentLanguage = $(this).text().trim();
        var newLanguage = (currentLanguage === 'Español') ? 'en' : 'es';
        var btnText = (currentLanguage === 'Español') ? 'Español' : 'English';
        $(this).text(btnText);

        $('[data-translate]').each(function(){
          var key = $(this).data('translate');
          $(this).text(translations[newLanguage][key]);
        });
      });
    });
  </script>
</body>
</html>
