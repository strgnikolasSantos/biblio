<?php
require_once 'inicia.php';

$codigoLivro = isset($_POST['codigoLivro']) ? $_POST['codigoLivro'] : null;
$tituloLivro = isset($_POST['tituloLivro']) ? $_POST['tituloLivro'] : null;
$codigoIsbn = isset($_POST['codigoIsbn']) ? $_POST['codigoIsbn'] : null;
$autorLivro = isset($_POST['autorLivro']) ? $_POST['autorLivro'] : null;
$nomeEditora = isset($_POST['nomeEditora']) ? $_POST['nomeEditora'] : null;
$quantPaginas = isset($_POST['quantPaginas']) ? $_POST['quantPaginas'] : null;

if (empty($codigoLivro) || empty($tituloLivro) || empty($autorLivro) || empty($nomeEditora) || empty($quantPaginas)) {
    echo "É preciso preencher todas as informações";
    exit;
}

$PDO = conecta_bd();
$sql = "UPDATE livro SET tituloLivro = :tituloLivro, codigoIsbn = :codigoIsbn, autorLivro = :autorLivro, nomeEditora = :nomeEditora, quantPaginas = :quantPaginas WHERE codigoLivro = :codigoLivro";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':codigoLivro', $codigoLivro, PDO::PARAM_INT);
$stmt->bindParam(':tituloLivro', $tituloLivro);
$stmt->bindParam(':codigoIsbn', $codigoIsbn);
$stmt->bindParam(':autorLivro', $autorLivro);
$stmt->bindParam(':nomeEditora', $nomeEditora);
$stmt->bindParam(':quantPaginas', $quantPaginas);

if ($stmt->execute()) {
    header('Location: form_exibir.php');
} else {
    echo "Ocorreu um erro na alteração do livro";
    print_r($stmt->errorInfo());
}
?>
