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

    label {
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

</style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                <form name = "cliente" method = "POST" action = "ClasseAlterar2.php">
                    <h1 class="menu-title">Alteração de Produtos Cadastrados</h1>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                       
                        <form name="cliente" method="POST" action="">
                            <fieldset class="mb-3">
                                <legend>Informe o ID do Produto Desejado</legend>
                                <div class="form-group">
                                    <label for="txtid">ID do Produto:</label>
                                    <input name="txtid" type="text" class="form-control" id="txtid" maxlength="5" placeholder="ID do Produto">
                                </div>
                            </fieldset>
                            <fieldset class="mb-3">
                                <legend>Opções</legend>
                                <button type="submit" class="btn btn-primary" name="btnalterar">Buscar Produto</button>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>