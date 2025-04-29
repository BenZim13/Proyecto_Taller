
<nav class="navbar cabec navbar-expand-md  fixed-top">
  <div class="container-fluid d-flex align-content-start flex-wrap">
  <a class="navbar-brand" href="<?= base_url('/') ?>">SuperCarpi</a>

    <!-- Barra de búsqueda -->
    
    <form class="d-flex" role="search">
      <input class="form-control " type="search" placeholder="Buscar Productos" aria-label="Search">
    </form>


    <!-- Botón toggler -->
     

    <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <i class="bi bi-list"></i>
    </button>

    <!-- Menú desplegable tipo offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('comercializacion') ?>">Comercialización</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('quienessomos') ?>">Quiénes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('contacto') ?>">Información de Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('terminos') ?>">Términos y Usos</a>
          </li>
        </ul>
      </div>
    </div>
</div>
</nav>
