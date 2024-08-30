<?php
require_once"inicia.php";
$PDO=conecta_bd();
echo "Apoós a execução de conexão";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Livors</title>
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
            <div class="col-lg-2 p-3"></div>

            <!--Inicio forms de cadastro dos livros-->
            <div class="col-lg-8 p-3 bg-dark text-white">
                <div id="Tabela de Livors">
                    <h3>Cadastro de Livors</h3>
                    <a href="form_inclui.php">
                        <input type="button" class="btn btn-primary" value="Cadastrar Livro">
                    </a>
                    <br>
                    <br>
                    <h4>Lista de Livros cadastrados</h4>
                    <br>

                    <?php
                    $stmt_count=$PDO->prepare("SELECT COUNT(*) As total FROM livro");
                    $stmt_count->execute();
                    $stmt=$PDO->prepare("SELECT codigoLivro, tituloLivro, codigoIsbn, autorLivro, nomeEditora, quantPaginas FROM livro ORDER BY tituloLivro");
                    $stmt->execute();
                    $total=$stmt_count->fetchColumn();
                    if ($total>0):?>

                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">ISBN</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Editora</th>
                                <th scope="col">Qtde PAgina</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($resultado=$stmt->fetch(PDO::FETCH_ASSOC)):?>
                            <tr>
                                <td><?php echo $resultado['codigoLivro'] ?></td>
                                <td><?php echo $resultado['tituloLivro'] ?></td>
                                <td><?php echo $resultado['codigoIsbn'] ?></td>
                                <td><?php echo $resultado['autorLivro'] ?></td>
                                <td><?php echo $resultado['nomeEditora'] ?></td>
                                <td><?php echo $resultado['quantPaginas'] ?></td>
                                <td>
                                    <div style="margin: 2px;">
                                        <a href="form_altera.php?codigoLivro=<?php echo $resultado['codigoLivro']?>">
                                        <input type="button" class="btn btn-primary" value="Alterar">
                                        </a>
                                        <a href="exclui.php?codigoLivro=<?php echo $resultado['codigoLivro']?>" onclick="return confirm('Tem certeza?')">
                                    <div>
                                        <br>  
                                        <div style="margin: 2px;">      
                                        <input type="button" class="btn btn-primary" value="Excluir">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                        <p>Não a livro cadastrados</p>
                    <?php endif; ?>

                </div>



            </div>
            <div class="col-lg-2 p-3"></div>
        </div>
    </div>




</body>

</html>