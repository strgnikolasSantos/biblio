<?php
function conecta_bd() {
    try {
        $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $PDO;
    } catch (PDOException $e) {
        echo 'Erro de conexão: ' . htmlspecialchars($e->getMessage());
        exit;
    }
}
?>
