<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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
                <a class="navbar-brand" href="#">Livraria do bolas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
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
            <p>Preencha os campos a seguir para cadastrar os livros</p>
        </div>
        <div class="row">
            <div class="col-lg-3 p-3"></div>

            <!--Inicio forms de cadastro dos livros-->
            <div class="col-lg-6 p-3 bg-dark text-white">
                <form action="inclui.php" method="POST" class="forms">
                    <div class="mb-3">
                        <label for="tituloLivro" class="form-label">Título do livro:</label>
                        <input type="text" class="form-control" name="tituloLivro" id="tituloLivro">
                    </div>

                    <div class="mb-3">
                        <label for="codigoIsbn" class="form-label">Código ISBN:</label>
                        <input type="text" class="form-control" name="codigoIsbn" id="codigoIsbn">
                    </div>

                    <div class="mb-3">
                        <label for="autorLivro" class="form-label">Autor do Livro:</label>
                        <input type="text" class="form-control" name="autorLivro" id="autorLivro">
                    </div>

                    <div class="mb-3">
                        <label for="nomeEditora" class="form-label">Editora:</label>
                        <input type="text" class="form-control" name="nomeEditora" id="nomeEditora">
                    </div>

                    <div class="mb-3">
                        <label for="quantPaginas" class="form-label">Quantidade de Páginas:</label>
                        <input type="number" class="form-control" name="quantPaginas" id="quantPaginas">
                    </div>

                    <button type="submit" class="btn btn-primary">Incluir</button>
                </form>
                <a href="form_exibir.php">
                    <button type="submit" class="btn btn-primary">Exibir</button>
                </a>
            </div>
            <div class="col-lg-3 p-3"></div>
        </div>
    </div>

</body>

</html>
