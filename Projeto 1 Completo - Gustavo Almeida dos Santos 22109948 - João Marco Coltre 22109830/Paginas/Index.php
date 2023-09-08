<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8"/>
    <meta meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="../Css/Css.css"/>

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
    <main class="content">
      <div class="fundo-superior">  <!--Define o que ficará escrito na parte superior do site--> 
        <br><h1 class="titulo"> BEM VINDOS </h1></br> 
        <p class="cont-titulo"> <br> JGArtfolio é a melhor plataforma para artistas freelancer do Brasil. Com uma vasta quantidade de artistas, você encontrará o artista perfeito para seu projeto. Veja demonstrações de seus trabalhos em um perfil personalizado pelo próprio artista. Desde Pixel Art à trabalhos 3D, você pode contratar o artista perfeito a um clique de botão.  </p>

	
		  </div>
		<div class="titulo1">
     <h1> DESTAQUES DO DIA</h1> 
    </div>
		<div class="area-perfis">
			<div class="perfis">
        <img src="../Imagens/teste1.jpg">
			  <div class="thumbnail">

			  </div>
			  <div class="profile">
				<img src="../Imagens/avatar.jpg" alt="" srcset="">
				<div>	
					<h2>JaoCrusader</h2>
					<p><b>Preço a combinar</b></p>
				</div>
			  </div> 
			</div>
      <a href="../Paginas/Perfil.php">
			<div class="perfis">
        <img src="../Imagens/background-perfilM.jpg">
			  <div class="thumbnail">
			  </div>
			  <div class="profile">
				<img src="../Imagens/avatar2.jpg" alt="" srcset="">
				<div>	
					<h2>Mavus_pxl</h2>
					<p><b>R$ 30 - 60</b></p>
				</div>
			  </div> 
			</div>
      </a>
						<div class="perfis">
            <img src="../Imagens/background-perfil3.jpg">
			  <div class="thumbnail">
			  </div>
			  <div class="profile">
				<img src="../Imagens/avatar12.jpg" alt="" srcset="">
				<div>	
					<h2>Gusty</h2>
					<p><b>R$ 30 - 90</b></p>
				</div>
			  </div> 
			</div>
		</div>
		<div class="cont-vid">
		<h1 class="titulo1"> COMO FUNCIONA? </h1>
			<div class="cima"> 
        Encontre o artista perfeito para o seu projeto acessando nossa área de perfis e solicite um orçamento enviando sua ideia. 
        Em até cinco dias úteis, você receberá uma resposta e poderá conversar diretamente com o artista para alinhar detalhes do projeto. 
        Após o prazo acordado entre as partes, você receberá uma amostra da imagem com marca d'água. Depois de confirmar o pagamento, a versão final em 
        alta resolução será disponibilizada para você.
	  </div>
			<div class="baixo"> 
        <div class="video-c">
        <iframe src="../Videos/video.mp4" title="video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
        </div>
      </div>
    </div>
		<div class="area-busca">
      <div class="titulo2">
        <h1>O melhor para você!</h1>
      </div>
        <div class="texto-busca">
          <p> Viu como é fácil? Clique no botão abaixo e encontre o artista perfeito para sua ideia</p>
      </div>
        <div class="botao">
      <a href="../Paginas/artistas.php">
          <h2> Busque artistas </h2>
          </a>
        </div>
		</div>
	</main>
  <?php include '../php/incluir/footer.php';?>
  </body>
</html>