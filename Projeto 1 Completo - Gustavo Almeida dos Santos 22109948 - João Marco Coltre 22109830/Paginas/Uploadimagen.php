<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8"/>
    <meta meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="./Css/CssUI.css"/>

  <!------ espaco para fontes ------>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!---espaco para icones-->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="icon" href="../Imagens/Logo-normal.png">
  <!--Estrutura da pagina-->
    <title>Upload imagem</title>
  </head>
  <body>
  <?php include '../php/incluir/header.php';?>
    <div class="fundo">
    <div class="hero">
        <div class="tt"><h1>Upload de imagens</h1></div>
        <form action="mailto:" class="formulario">
            <label for="titulo">Insira um titulo para sua arte<br>
            <input type="text" id="titulo" name="titulo"><br></label>
            <label for="tags">Insira as categorias da sua arte<br>
            <input type="tel" id="tags" name="tags"><br></label>
            <label for="descricao">Insira uma descrição para sua arte<br>
            <textarea name="descricao" rows="10" cols="100"></textarea><br></label>
            <label for="imagem" >Faça o upload da imagem<br></label>
            <input id="imagem" name="imagem" type="file"><br>
            
            <button type="submit" class="submit-btn">Enviar</button>
        </form>
    </div>
</div>
  <?php include '../php/incluir/footer.php';?>
  </body>
 </html>