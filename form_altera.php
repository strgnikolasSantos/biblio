<?php
require_once "inicia.php";

$codigoLivro = isset($_GET['codigoLivro']) ? (int) $_GET['codigoLivro'] : null;

if (empty($codigoLivro)) {
    echo "O código do livro para alteração não foi definido.";
    exit;
}

$PDO = conecta_bd();
$stmt = $PDO->prepare("SELECT codigoLivro, tituloLivro, codigoIsbn, autorLivro, nomeEditora, quantPaginas FROM livro WHERE codigoLivro = :codigoLivro");
$stmt->bindParam(":codigoLivro", $codigoLivro, PDO::PARAM_INT);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);


?>


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Livros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <div id="navbar">
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Livraria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <br><br><br>

    <div class="container-fluid mt-3">
        <div id="Cabecalho" class="cabecalho">
            <h1>Cadastro de Livros</h1>
            <p>Preencha os campos a seguir para alterar os livros</p>
        </div>
        <div class="row">
            <div class="col-lg-2 p-3"></div>

            <!--Inicio forms de cadastro dos livros-->
            <div class="col-lg-8 p-3 bg-dark text-white">
                <div id="Tabela_de_Livros">
                    <h3>Alterar Livros</h3>
                    <form action="altera.php" method="post">
                      

                        <label for="tituloLivro" class="form-label">Titulo:</label>
                        <input type="text" class="form-control" name="tituloLivro" id="tituloLivro" value="<?=$resultado['tituloLivro']?>">
                        
                        <br><br>
                        
                        <label for="codigoIsbn" class="form-label">ISBN:</label>
                        <input type="text" class="form-control" name="codigoIsbn" id="codigoIsbn" value="<?=$resultado['codigoIsbn']?>">
                        
                        <br><br>
                        
                        <label for="autorLivro" class="form-label">Autor:</label>
                        <input type="text" class="form-control" name="autorLivro" id="autorLivro" value="<?=$resultado['autorLivro']?>">
                        
                        <br><br>
                        
                        <label for="nomeEditora" class="form-label">Editora:</label>
                        <input type="text" class="form-control" name="nomeEditora" id="nomeEditora" value="<?=$resultado['nomeEditora']?>">
                        
                        <br><br>
                        
                        <label for="quantPaginas" class="form-label">Quantidade de Paginas:</label>
                        <input type="text" class="form-control" name="quantPaginas" id="quantPaginas" value="<?=$resultado['quantPaginas']?>">
                        
                        <input type="hidden" name="codigoLivro" id="codigoLivro" value="<?=$codigoLivro?>">

                        <br><br>
                        
                        <input type="submit" name="submit" class="btn btn-primary" value="Alterar">
                    </form>
                </div>
            </div>

            <div class="col-lg-2 p-3"></div>
        </div>
    </div>

</body>

</html>
