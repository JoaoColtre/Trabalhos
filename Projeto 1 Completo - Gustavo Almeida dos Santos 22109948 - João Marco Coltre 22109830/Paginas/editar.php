<?php


require('../php/incluir/conectar.php');

$id_pedido = filter_input(INPUT_GET, 'id_pedido', FILTER_SANITIZE_NUMBER_INT);

try {

    $sql = "SELECT * FROM solicitacao WHERE id_pedido = :id_pedido";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_pedido', $id_pedido, PDO::PARAM_INT);
    $stmt->execute();


    if ($stmt->rowCount() > 0) {
        $solicitacao = $stmt->fetch(PDO::FETCH_ASSOC);

        $titulo = htmlspecialchars($solicitacao['titulo']);
        $estilo = htmlspecialchars($solicitacao['estilo']);
        $descricao = htmlspecialchars($solicitacao['descricao']);
        $publico = htmlspecialchars($solicitacao['publico']);
    } else {
       
    }
} catch(PDOException $e) {
    
    die("Erro na consulta do banco de dados: " . $e->getMessage());
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Editar Solicitação</title>
    <link rel="stylesheet" type="text/css" href="../Css/CssED.css">
    <link rel="icon" href="../Imagens/Logo-normal.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Outros cabeçalhos e estilos CSS -->
</head>
<body>
    <!-- Conteúdo da página -->

    <div class="formulario">
    <form action="atualizacao.php" method="POST">
        <!-- Campos do formulário preenchidos com os valores recuperados -->
        <div class="campo">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" required>
        </div>
        <div class="campo">
            <label for="estilo">Estilo:</label>
            <input type="text" id="estilo" name="estilo" value="<?php echo $estilo; ?>" required>
        </div>
        <div class="campo">
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required><?php echo $descricao; ?></textarea>
        </div>
        <div class="campo">
            <label for="publico">Público:</label>
            <select id="publico" name="publico" required>
                <option value="sim" <?php if ($publico === 'sim') echo 'selected'; ?>>Sim</option>
                <option value="nao" <?php if ($publico === 'nao') echo 'selected'; ?>>Não</option>
            </select>
        </div>
        <input type="hidden" name="id_pedido" value="<?php echo $id_pedido; ?>">
        <button type="submit">Salvar</button>
    </form>
</div>
   <!-- Scripts JavaScript -->
</body>
</html>
