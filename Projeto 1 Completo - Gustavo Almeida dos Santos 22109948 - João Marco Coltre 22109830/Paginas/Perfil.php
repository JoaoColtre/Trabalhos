<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8"/>
    <meta meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="../Css/cssPR.css"/>

  <!------ espaco para fontes ------>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!---espaco para icones-->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="icon" href="../Imagens/Logo-normal.png">
  <!--Estrutura da pagina-->
    <title>JGArtFolio</title>
  </head>
  <body>
  <?php include '../php/incluir/header.php';?>
        <script src="Javascript/script.js"></script>
      <main class= "content">
        <div class="fundo">
          <div class= "perfil-principal">
            <img src="../Imagens/Avatar2.jpg">
            <div class="descricao-perfil">
              <h1> mavus_pxl</h1>
              <p> Bem vindos ao meu perfil, aqui você encontrará parte do meu trabalho. Tenho como foco principal pixelart, após avaliar meu portfólio, se desejar fazer um orçamento, ficarei feliz de lhe atender. </p>
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            </div>
            <div class="botao">
              <a href="../php/incluir/logado.php">
                  <h2> Solicitação </h2>
              </a>
            </div>
          </div>
        </div>
        <div class="titulo">
            <h1> Confira as artes de Mavus_pxl</h1>
            <div class="portfolio">
            <img src="../Imagens/Maicon1.jpeg">
            <img src="../Imagens/Maicon2.jpeg">
            <img src="../Imagens/Maicon3.jpeg">
            <img src="../Imagens/Maicon4.jpeg">
            <img src="../Imagens/Maicon5.jpeg">
            <img src="../Imagens/Maicon.png" id="sexta-img">
          </div>
        </div>
      </main>
      <?php include '../php/incluir/footer.php';?>
    </body>
  </html>