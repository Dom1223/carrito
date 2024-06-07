<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid ">
    <a class="navbar-brand" href="/proyecto/carrito/public">mercado</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="productos">productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('carrito/ver') ?>">carrito</a>
        </li>
      </ul>
      <div class="ms-auto">
          <a href="login" style="text-decoration: none; color: inherit;">iniciar sesion
            <img src="icono/sesion.png" width="50" height="50"alt="" class="img-fluid" title="inicio de sesion" loading="lazy">
          </a>
        </div>
    </div>
  </div>
</nav>