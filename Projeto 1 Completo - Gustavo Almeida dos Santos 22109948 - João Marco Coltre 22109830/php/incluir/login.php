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


$usuarioLogado = false;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['userL'];
    $senha = $_POST['passwordL'];

    try {

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
        $stmt->execute(['usuario' => $usuario]);
        $user = $stmt->fetch();

        if ($user && password_verify($senha, $user['senha'])) {
            session_start();
            $_SESSION['usuarioLogado'] = true;

            header("Location: ../../Paginas/Index.php");
            exit(); 
        } else {
            echo "Nome de usuário ou senha inválidos.";
        }
    } catch (PDOException $e) {
        die("Erro ao realizar o login: " . $e->getMessage());
    }
}
?>
</div>
        </div>




