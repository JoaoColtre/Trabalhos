<?php
require('../php/incluir/conectar.php');

$id_pedido = $_GET['id_pedido'];

try {
    $del = $conn->prepare("DELETE FROM solicitacao WHERE id_pedido = :id_pedido");
    $del->bindParam(':id_pedido', $id_pedido);
    $del->execute();

    $msg = "Registro excluído com sucesso!";
    $_SESSION['msg'] = $msg;
    header('Location: solicitacao.php?excluido=1');
    exit;
} catch(PDOException $e) {
    $msgErr = "Erro ao excluir o registro: " . $e->getMessage();
    $_SESSION['msgErr'] = $msgErr;
    header('Location: solicitacao.php?excluido=0');
    exit;
}
?>
