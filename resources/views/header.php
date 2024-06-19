<header class="fixed-top ">
  <nav class="navbar navbar-expand-lg navbar-azul">
    <a class="navbar-brand ml-5 mr-5" id="titulo" href="./index.php"><img class=""
        src="https://alpenextrusion.com/public/frontend/img/iconos/logo-Alpen.png" alt="Alpen Extrusion"></a>
    <button class="navbar-toggler p-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi" fill="currentColor" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
        </path>
      </svg>

      <span class="d-none fs-6 pe-1">Browse</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" id="inicio" href="./index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="acerca-de" href="./sobrenosotros.php">Sobre nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="servicios" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Servicios</a>
          <div class="dropdown-menu" aria-labelledby="servicesDropdown">
            <a class="dropdown-item" id="h-automotriz" href="./automotriz.php">Automotriz</a>
            <a class="dropdown-item" id="h-arquitectonico" href="./arquitectonico.php">Arquitectonico</a>
            <a class="dropdown-item" id="h-industrial" href="./industrial.php">Industrial</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="productos" href="./sucursales.php">Sucursales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contacto" href="./contacto.php">Contacto</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <button class="btn btn-leng mx-2" id="btn-espanol" onclick="cambiarIdiomaEspañol()">ES</button>
        <button class="btn btn-leng mx-2" id="btn-ingles" onclick="cambiarIdiomaIngles()">ENG</button>
      </div>
    </div>
  </nav>
</header>