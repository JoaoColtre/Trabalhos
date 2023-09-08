<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="../../Css/CssED.css"/>

        <!------ espaco para fontes ------>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!---espaco para icones-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <title>Entrar/Registrar</title>
    </head>
    <link rel="icon" href="../../Imagens/Logo-normal.png">
    <body>
        <div class="hero">
        <div class="formulario">
        <h1 id="countdown">5</h1>
        <script>
    var countdownElement = document.getElementById('countdown');
    var totalTime = 5;
    var currentTime = totalTime;

    var timer = setInterval(function() {
      currentTime -= 1;
      countdownElement.innerText = currentTime;

      if (currentTime <= 0) {
        clearInterval(timer);
        window.location.href = "../../Paginas/Login-Registro.php";
      }
    }, 1000);
  </script>

        <?php
include 'conectar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = filter_input(INPUT_POST, 'userR', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'emailR', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['passwordR'];

    $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        die("Erro: O nome de usuário já existe.");
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (:usuario, :email, :senha)");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senhaHash);
        $stmt->execute();

        echo "Usuário registrado com sucesso! Agora você já pode fazer login no site.";
    } catch (PDOException $e) {
        error_log("Erro ao registrar usuário: " . $e->getMessage());
        die("Ocorreu um erro ao registrar o usuário. Por favor, tente novamente mais tarde.");
    }
}
?>
</div>
        </div>



