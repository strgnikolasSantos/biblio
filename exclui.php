<?php
require_once 'inicia.php';

$codigoLivro = isset($_GET['codigoLivro']) ? (int) $_GET['codigoLivro'] : null;


try {
    $PDO = conecta_bd();
    $sql = "DELETE FROM livro WHERE codigoLivro = :codigoLivro";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':codigoLivro', $codigoLivro, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        header('Location: form_exibir.php');
        exit;
    } else {
        echo "Erro de Exclusão: ";
        print_r($stmt->errorInfo());
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>