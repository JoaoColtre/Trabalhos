<link rel="stylesheet" href="../Css/Css.css"/>
<header class="header">
      <a class="header-geral">
      <a href="./Index.php" class="logo"><img src="../Imagens/Logo-fundo.png"><i><span>ArtFolio</span></i></a>
      <div class="bx bx-menu" id="menu-icon"> </div>

      <ul class="barranav">
        <li><a href="../Paginas/Index.php" class="usuario"><i class='bx bxs-home' ></i>Inicio</a></li>
        <li><a href="../Paginas/artistas.php" class="usuario"><i class='bx bxs-pencil' ></i>Artistas</a></li>
        <li><a href="../Paginas/quemsomos.php" class="usuario"><i class='bx bxs-group' ></i>Quem somos?</a></li>
        <li><a href="../Paginas/quemsomos.php#2" class="usuario"><i class='bx bxs-sun' ></i>Nossas motivações</a></li>
        <?php
session_start();

if (isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioLogado'] === true) {

    echo "<li><a href='../php/incluir/logout.php' class='usuario'><i class='bx bxs-log-out'></i>Sair</a></li>";
} else {

    echo "<li><a href='./Login-Registro.php' class='usuario'><i class='bx bxs-user-circle'></i>Entrar</a></li>";
}
?>
      </ul>
      </a>
      <script src="../Javascript/script.js"></script>
    </header>