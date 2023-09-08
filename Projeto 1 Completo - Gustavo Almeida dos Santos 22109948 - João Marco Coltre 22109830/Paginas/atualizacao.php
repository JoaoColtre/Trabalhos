<?php
require('../php/incluir/conectar.php');


if (isset($_POST['id_pedido']) && isset($_POST['titulo']) && isset($_POST['descricao']) && isset($_POST['publico'])) {
    $id_pedido = $_POST['id_pedido'];
    $titulo = strip_tags($_POST['titulo']);
    $descricao = strip_tags($_POST['descricao']);
    $publico = strip_tags($_POST['publico']);

    try {
    
        $atualizar = $conn->prepare("UPDATE solicitacao SET titulo = :titulo, descricao = :descricao, publico = :publico WHERE id_pedido = :id_pedido");
        $atualizar->bindParam(':titulo', $titulo);
        $atualizar->bindParam(':descricao', $descricao);
        $atualizar->bindParam(':publico', $publico);
        $atualizar->bindParam(':id_pedido', $id_pedido);
        $atualizar->execute();

    
        echo '<script>alert("Atualização concluída com sucesso!");</script>';
        
        echo '<script>setTimeout(function() { window.location.href = "../Paginas/solicitacao.php"; }, 1000);</script>';
        exit();
    } catch(PDOException $e) {
        
        echo "Falha na atualização da solicitação: " . $e->getMessage();
    }

    $conn = null;
}
?>
