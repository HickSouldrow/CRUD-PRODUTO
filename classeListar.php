<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relação de Produtos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .menu-title {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 30px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-outline-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
            color: #fff;
        }

        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center">
                    <h1 class="menu-title">Relação de Produtos Cadastrados</h1>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <?php
                        include_once 'classeProduto.php';
                        $p = new Produto();
                        $pro_bd = $p->listar();
                        if (count($pro_bd) > 0) {
                            echo '<table class="table table-striped">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th scope="col">ID</th>';
                            echo '<th scope="col">Nome</th>';
                            echo '<th scope="col">Estoque</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            foreach ($pro_bd as $pro_mostrar) {
                                echo '<tr>';
                                echo '<th scope="row">' . $pro_mostrar[0] . '</th>';
                                echo '<td>' . $pro_mostrar[1] . '</td>';
                                echo '<td>' . $pro_mostrar[2] . '</td>';
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        } else {
                            echo '<p class="text-center">Nenhum produto cadastrado.</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="menuProduto.php" class="btn btn-outline-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
