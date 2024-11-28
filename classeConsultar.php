<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
        }

        .menu-title {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-secondary:hover {
            background-color: #6c757d;
            border-color: #545b62;
        }

        legend {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                    <h1 class="menu-title">Produtos Cadastrados</h1>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <form name="cliente" method="POST" action="">
                            <fieldset class="mb-3">
                                <legend>Informe o Produto Desejado</legend>
                                <div class="mb-3">
                                    <label for="txtnome" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Nome do Produto" maxlength="40">
                                </div>
                            </fieldset>
                            <fieldset class="mb-3">
                                <legend>Opções</legend>
                                <button type="submit" class="btn btn-primary" name="btnenviar">Consultar</button>
                                <button type="reset" class="btn btn-secondary">Limpar</button>
                            </fieldset>
                        </form>
                     </div>
                </div>
                
                <div class="mt-4 text-center">
                    <a href="menuProduto.php" class="btn btn-outline-primary">Voltar</a>
               
                </div>
            </div>
            <legend> Resultado: </legend>
        </div>
    </div>

    <?php
    extract($_POST, EXTR_OVERWRITE);

    if (isset($btnenviar)) {
        include_once 'classeProduto.php';

        $p = new Produto();
        $p->setNome($txtnome . '%');
        $pro_bd = $p-> consultar();

        echo '<div class="container mt-4">';
        echo '<div class="card">';
        echo '<div class="card-body">';

        foreach ($pro_bd as $pro_mostrar) {

            echo "<p><b>ID:</b> {$pro_mostrar[0]} &nbsp;&nbsp;&nbsp;";
            echo "<b>Nome:</b> {$pro_mostrar[1]} &nbsp;&nbsp;&nbsp;";
            echo "<b>Estoque:</b> {$pro_mostrar[2]}</p>";
        }
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
