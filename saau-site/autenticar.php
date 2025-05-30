<?php
<?php
session_start();

// Exemplo de usuários e senhas (substitua por banco de dados depois)
$usuarios = [
    'admin' => 'senha123',
    'funcionario' => 'func2025'
];

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
    $_SESSION['usuario'] = $usuario;
    header('Location: admin.php');
    exit;
} else {
    echo "<script>alert('Usuário ou senha inválidos!');window.location.href='login.html';</script>";
}
?>