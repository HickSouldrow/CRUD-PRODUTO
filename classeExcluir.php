
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 20px;
            background-color: #f8f9fa;
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
            text-align: center;
            margin-bottom: 30px;
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
                    <h1 class="menu-title">Exclusão de Produtos Cadastrados</h1>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <form name="cliente" method="POST" action="">
                            <fieldset class="mb-3">
                                <legend>Informe o ID do Produto Desejado</legend>
                                <div class="mb-3">
                                    <label for="txtid" class="form-label">ID:</label>
                                    <input type="text" class="form-control" id="txtid" name="txtid" maxlength="5" placeholder="ID do Produto">
                                </div>
                            </fieldset>
                            <fieldset class="mb-3">
                                <legend>Opções</legend>
                                <button type="submit" class="btn btn-danger" name="btnenviar">Excluir</button>
                                <button type="reset" class="btn btn-secondary">Limpar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <a href="menuProduto.php" class="btn btn-outline-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if (isset($btnenviar)) {
        include_once 'classeProduto.php';
        $p = new Produto();
        $p->setId($txtid);

        echo '<div class="container mt-4">';
        echo '<div class="card">';
        echo '<div class="card-body text-center">';
        echo '<h3>' . $p->exclusao() . '</h3>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>