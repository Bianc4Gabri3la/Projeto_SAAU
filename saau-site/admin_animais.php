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
  <title>Gerenciar Animais - SAAU</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <a href="admin.php" class="logo-link">
      <img src="imagens/logo.png" alt="Logo SAAU" class="logo-header" />
      <span>ONG SAAU</span>
    </a>
    <nav>
      <a href="logout.php">Sair</a>
    </nav>
  </header>
  <main>
    <h2>Gerenciar Animais</h2>

    <h3>Cadastrar Novo Animal</h3>
    <form action="salvar_animal.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="nome" placeholder="Nome do animal" required />
      <input type="text" name="idade" placeholder="Idade" required />
      <textarea name="descricao" placeholder="Descrição" required></textarea>
      <input type="file" name="foto" accept="image/*" required />
      <button type="submit">Cadastrar</button>
    </form>

    <h3>Lista de Animais (Exemplo)</h3>
    <ul>
      <li>Mel - 2 anos - Fêmea, dócil e vacinada.</li>
      <li>Thor - 1 ano - Macho, brincalhão e saudável.</li>
      <!-- Aqui você pode listar os animais cadastrados do banco de dados futuramente -->
    </ul>
  </main>
</body>
</html>