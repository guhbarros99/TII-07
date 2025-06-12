<?php
session_start();
require_once "../UsuarioDAO.php";
require_once "../Usuario.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST,'nome');
    $email = filter_input ( INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input (INPUT_POST,'senha');
    $confirmSenha = filter_input ( INPUT_POST,'confirmSenha');

    if ($senha !== $confirmSenha || !$nome || !$email || !$senha) {
        $erro = "Dados inválidos ou senhas não conferem";
    } else {
        $dao = new UsuarioDAO();
        if ($dao->getByEmail($email)) {
            $erro = "Já existe usuário com esse email";
        } else {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT); // FORMA DE EMBARALHAR A SENHA
            $token = bin2hex(random_bytes (25));
            $usuario = new Usuario(null, $nome, $senhaHash, $email);
            if ($dao->create($usuario)) {

                $_SESSION['token'] = $token;
                header('Location: index.php');
                exit();
            } else {
                $erro = 'Erro ao cadastrar usuário!';
            }
        }
    }
}
?>

<h1>Cadastro</h1>
<?php if (isset($erro)) echo "<p style='color: red>$erro</p>"; ?>
<form method="POST">
    Nome: <input type="text" name="nome" required>
    Email: <input type="email" name="email" required>
    Senha: <input type="password" name="senha" required>
    Confirmar Senha: <input type="password" name="confirmSenha" required>
    <button type="submit">Cadastrar</button>

</form>

<a href="login.php">Já tem conta?</a>