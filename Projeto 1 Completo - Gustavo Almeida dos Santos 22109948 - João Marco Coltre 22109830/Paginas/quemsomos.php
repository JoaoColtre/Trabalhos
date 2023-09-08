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


   
  <script src="../Javascript/Animacao.js"></script>


  <main class="content">
    <div class="fundo-superior">  <!--Define o que ficará escrito na parte superior do site--> 
        <br><h1 class="titulo"> Quem somos? </h1></br> 
        <p class="cont-titulo"> <br> JGArtfolio é uma plataforma online que oferece uma ampla gama de serviços para artistas freelancer e clientes que procuram contratar seus serviços. A plataforma possui uma vasta base de dados de artistas de diversas áreas, incluindo ilustração, animação, design gráfico, artes visuais, dentre outras. Com essa variedade de profissionais, é possível encontrar o artista perfeito para qualquer tipo de projeto, independentemente da sua complexidade ou estilo.  </p>
        <img src="../Imagens/Logo-fundo.png" id="animacao" style="display: block; margin: 0 auto; width: 40%; transition: transform 1s ease-in-out;">
        <p class="cont-titulo"> <br> Um dos destaques da JGArtfolio é a possibilidade de visualizar demonstrações de trabalhos de cada artista em um perfil personalizado, onde o próprio artista pode mostrar seu portfólio e as habilidades que possui. Dessa forma, o cliente pode ter uma ideia clara do estilo e da qualidade do trabalho de cada profissional antes mesmo de contratá-lo. Além disso, a plataforma é extremamente fácil de usar. Os clientes podem fazer solicitações e contratar os serviços dos artistas com apenas um clique de botão. Os artistas, por sua vez, podem facilmente criar um perfil, atualizar seu portfólio, gerenciar solicitações de projetos e se comunicar com seus clientes através da plataforma.</div></p>
    </div>
    <div id="1">
        <h1 style="text-align: center; margin-top: 30px; margin-bottom: 30px; font-size: 50px;">Onde estamos</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0814491796614!2d-46.63514318824885!3d-23.529572760338414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce585f8b81eb75%3A0xb742158dee17d684!2sFatec%20S%C3%A3o%20Paulo%20-%20Faculdade%20de%20Tecnologia%20de%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1681438727421!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="fundo-superior" id="2">
        <h2 class="titulo" >Nossas motivações</h2>
        <p class="cont-titulo">Nossa principal motivação na criação da JGArtfolio foi a necessidade de oferecer uma plataforma que valorizasse os artistas freelancer no Brasil e ao mesmo tempo fornecesse aos clientes uma maneira fácil e eficiente de contratar seus serviços. Acreditamos que o talento artístico é um dos recursos mais valiosos que um país pode ter e que é fundamental apoiar e incentivar a criatividade e a expressão artística em todas as suas formas.</p>
        <h2 class="titulo">Visão</h2>
        <p class="cont-titulo">nossa visão é ser uma plataforma de referência no mercado de arte freelancer, oferecendo um espaço onde os artistas possam expor e vender seu trabalho, além de se conectar com clientes em busca de serviços de qualidade. Queremos ser reconhecidos pela qualidade dos serviços prestados, pela facilidade de uso e pela valorização dos artistas e suas habilidades únicas. </p>
        <h2 class="titulo">Valores</h2>
        <p class="cont-titulo"> Em relação aos nossos valores, a JGArtfolio acredita na importância de valorizar e remunerar adequadamente os artistas pelo seu trabalho. Sabemos que muitos artistas são subvalorizados e que o mercado muitas vezes não reconhece o verdadeiro valor de seu trabalho. Por isso, queremos oferecer um espaço onde os artistas possam se sentir valorizados e remunerados de forma justa pelo seu trabalho. </p>
        <p class="cont-titulo">Além disso, somos completamente contra a produção de arte gerada por inteligência artificial. Acreditamos que a arte é uma forma de expressão humana única e que a criação de arte por meio de IA pode minar a criatividade e a originalidade dos artistas. Por isso, somos uma plataforma exclusivamente para artistas humanos, valorizando a originalidade e a criatividade em todos os aspectos da arte.</p>
    </div>
    <div class="audio">
      <audio controls="controls"> 
        <source src="../Audio/Continua.mp3" type="audio/mp3"/> Continua 
      </audio> 
    </div>
    </main>
    <?php include '../php/incluir/footer.php';?>
</body>
</html>