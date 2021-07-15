<nav>
  <div class="nav-wrapper">
    <a href="<?= base_url() ?>" class="brand-logo">Red Efectiva</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="<?= base_url('/home/create') ?>">Crear</a></li>
      <li><a href="<?= base_url('/home/reportes') ?>">Reportes</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="<?= base_url() ?>">Home</a></li>
  <li><a href="<?= base_url('/home/create') ?>">Crear</a></li>
  <li><a href="<?= base_url('/home/reportes') ?>">Reportes</a></li>
</ul>