<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('../php/incluir/conectar.php');


    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $estilo = filter_input(INPUT_POST, 'tags', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $publico = filter_input(INPUT_POST, 'Publico?', FILTER_SANITIZE_STRING);

    try {

        $ins = $conn->prepare("INSERT INTO solicitacao (titulo, estilo, descricao, publico) VALUES (:titulo, :estilo, :descricao, :publico)");

        $ins->bindParam(':titulo', $titulo);
        $ins->bindParam(':estilo', $estilo);
        $ins->bindParam(':descricao', $descricao);
        $ins->bindParam(':publico', $publico);

        $ins->execute();


        header("Location: solicitacao.php");
        exit;
    } catch(PDOException $e) {
        $msgErr = "Erro na inclusão:<br />" . $e->getMessage();
        $_SESSION['msgErr'] = $msgErr;
        header('Location: solicitacao.php');
        exit;
    }
}

require('../php/incluir/conectar.php');

try {

    $sel = "SELECT id_pedido, titulo, estilo, descricao, publico FROM solicitacao ORDER BY id_pedido DESC LIMIT 10";
    $result = $conn->query($sel);

    // Variável para armazenar os resultados da consulta
    $solicitacoes = array();

    // Loop para recuperar os resultados da consulta
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $solicitacoes[] = $row;
    }
} catch(PDOException $e) {
    echo "Consulta falha...<br />" . $e->getMessage();
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../Css/CssUI.css" />

    <!------ espaco para fontes ------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!---espaco para icones-->
    <link
        rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="icon" href="../Imagens/Logo-normal.png">
    <!--Estrutura da pagina-->
    <title>Solicitação de arte</title>
    <style>
        .hide {
            display: none;
        }
    </style>
</head>
<body>
<?php include '../php/incluir/header.php';?>
<div class="fundo">
    <div class="hero">
        <div class="tt">
            <h1>Solicitação de arte</h1>
        </div>
        <form action="" method="POST" class="formulario">
            <!-- Campos do formulário -->
            <label for="titulo">Insira um título para a arte solicitada<br />
                 <input type="text" id="titulo" name="titulo" required /><br /></label>
            <label for="tags">Escreva os estilos que você gostaria<br />
                <input type="text" id="tags" name="tags" required /><br /></label>
            <label for="descricao">Descreva como você deseja sua solicitação de arte<br />
            <textarea name="descricao" rows="10" cols="100" required></textarea><br /></label>
            <h3>Gostaria de deixar público?</h3>
            <input type="radio" id="pubs" name="Publico?" value="sim" class="radio" style="width: 40px;" required />
            <label for="pubs" class="radio">Sim</label><br />
            <input type="radio" id="pubn" name="Publico?" value="nao" class="radio" style="width: 40px;" required />
            <label for="pubn" class="radio">Não</label><br />
            <button type="submit" class="submit-btn">Solicitar</button>
        </form>

        <button id="listarBtn" class="submit-btn">Listar</button>

        <div id="successMessage"></div>
        <div id="listaSolicitacoes" class="hide">
        <?php
        if (!empty($solicitacoes)) {
            echo "<h2 class='titulo'>Relação de Solicitações de Arte</h2>";
            echo "<div class='tabela'>";
            foreach ($solicitacoes as $solicitacao) {
                echo "<div class='row'> <p class='texto'><b class='cor'>Título: </b>" . $solicitacao['titulo'] .
                    " - <b class='cor'>Estilo: </b>" . $solicitacao['estilo'] .
                    " - <b class='cor'>Descrição: </b>" . $solicitacao['descricao'] .
                    " - <b class='cor'>Público: </b>" . $solicitacao['publico'] .
                    " - <a href='editar.php?id_pedido=" . $solicitacao['id_pedido'] . "'>Editar</a>" .
                    " - <a href='excluir.php?id_pedido=" . $solicitacao['id_pedido'] . "' id='excluirLink' data-id='" . $solicitacao['id_pedido'] . "'>Excluir</a></p></div><hr>";
            }         
        }
        ?>
    </div>

        <script>
            document.getElementById('listarBtn').addEventListener('click', function () {
                var listaSolicitacoes = document.getElementById('listaSolicitacoes');
                listaSolicitacoes.classList.toggle('hide');
            });
        </script>
    </div>
</div>
<?php include '../php/incluir/footer.php';?>
    <script src="../Javascript/confirmacao.js"></script>    
    <script src="../Javascript/exclusao.js"></script>
</body>
</html>
