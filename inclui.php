<?php
require_once 'inicia.php';

$tituloLivro = isset($_POST['tituloLivro']) ? $_POST['tituloLivro'] : null;
$codIsbn = isset($_POST['codigoIsbn']) ? $_POST['codigoIsbn'] : null;
$autorLivro = isset($_POST['autorLivro']) ? $_POST['autorLivro'] : null;
$nomeEditora = isset($_POST['nomeEditora']) ? $_POST['nomeEditora'] : null;
$quantPaginas = isset($_POST['quantPaginas']) ? $_POST['quantPaginas'] : null;

if (empty($tituloLivro) || empty($codIsbn) || empty($autorLivro) || empty($nomeEditora) || empty($quantPaginas)) {
    echo "Insira todas as informações!";
    exit;
}

try {
    $PDO = conecta_bd();
    $sql = "INSERT INTO livro (tituloLivro, codigoIsbn, autorLivro, nomeEditora, quantPaginas) VALUES (:tituloLivro, :codigoIsbn, :autorLivro, :nomeEditora, :quantPaginas)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':tituloLivro', $tituloLivro);
    $stmt->bindParam(':codigoIsbn', $codIsbn);
    $stmt->bindParam(':autorLivro', $autorLivro);
    $stmt->bindParam(':nomeEditora', $nomeEditora);
    $stmt->bindParam(':quantPaginas', $quantPaginas);

    if ($stmt->execute()) {
        header('Location: form_inclui.php');
        exit;
    } else {
        echo "Erro de inclusão: ";
        print_r($stmt->errorInfo());
    }
} catch (PDOException $e) {
    echo "Erro de conexão: " . htmlspecialchars($e->getMessage());
}
?>
