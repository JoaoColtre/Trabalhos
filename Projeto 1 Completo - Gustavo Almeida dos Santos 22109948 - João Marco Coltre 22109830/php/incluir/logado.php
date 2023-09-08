<!---- verificar se esta logado ---->

<?php
session_start();

if(isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioLogado'] === true) {
  header("Location: ../../Paginas/solicitacao.php");
  
} else {
header("Location: ../../Paginas/Login-Registro.php");
}
?>
