<link rel="stylesheet" href="<?= base_url('css/login.css') ?>">

<div class="container">
  <div class="logo">
    <img src="<?= base_url('imagenes/logo-academia.jpg') ?>" alt="Logo Amateurs Club" id="logo" />
  </div>

  <div class="inicio">
    <h1 id="Sesion">Iniciar Sesión</h1>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
    <?php endif; ?>

    <form class="formulario" method="post" action="<?= site_url('login/acceder') ?>">
      <?= csrf_field() ?>

      <label for="username">Usuario:</label>
      <input type="text" id="username" name="username" placeholder="Ej: pepito perez" required>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" placeholder="Ej: pepito11" required>

      <button type="submit" class="btn">Iniciar Sesión</button>

      <a href="#">¿Olvidaste tu contraseña?</a>
      <p class="divider">_____________________________________</p>

      <a href="<?= site_url('registro') ?>" class="btn">Crear cuenta nueva</a>
    </form>
  </div>
</div>

<footer class="footer">
  <p>&copy; 2025 Club Amateur. Todos los derechos reservados.</p>
  <p><a href="<?= base_url('documentos/contrato.pdf') ?>" target="_blank" id="documento">📄 Reglas del Club</a></p>
  <p>Síguenos en nuestras redes:</p>
  <p>
    <a href="https://www.instagram.com/club__amateur/?utm_source=qr&igsh=MXRyb2M3cGpybXZreg%3D%3D#" target="_blank" class="redes">Instagram</a>
  </p>
</footer>

