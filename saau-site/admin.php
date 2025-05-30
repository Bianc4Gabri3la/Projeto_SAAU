<?php
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Painel Administrativo - SAAU</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <a href="index.html" class="logo-link">
      <img src="imagens/logo.png" alt="Logo SAAU" class="logo-header" />
      <span>ONG SAAU</span>
    </a>
    <nav>
      <a href="logout.php">Sair</a>
    </nav>
  </header>
  <main>
    <h2>Painel Administrativo</h2>
    <ul>
      <li><a href="admin_animais.php">Gerenciar Animais</a></li>
      <li><a href="admin_eventos.php">Gerenciar Eventos</a></li>
      <li><a href="admin_rifas.php">Gerenciar Rifas</a></li>
    </ul>
  </main>
</body>
</html>