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
                    <h1 class="menu-title">Alteração de Produtos Cadastrados</h1>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                      
                        <form name="cliente" method="POST" action="">
                            <fieldset class="mb-3">
                                <legend>Informe o ID do Produto Desejado</legend>
                                <div class="form-group">
                                    <label for="txtid">ID do Produto:</label>
                                    <input name="txtid" type="text" class="form-control" id="txtid" maxlength="5" placeholder="ID do Produto" required>
                                </div>
                            </fieldset>
                            <fieldset class="mb-3">
                                <legend>Opções</legend>
                                <button type="submit" class="btn btn-primary" name="btnalterar">Buscar Produto</button>
                                <button type="reset" class="btn btn-secondary">Limpar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>

    
                <?php
                if (isset($_POST["txtid"])) {
                    $txtid = $_POST["txtid"];

                    include_once 'classeProduto.php';
                    $p = new Produto();
                    $p->setId($txtid);
                    $pro_bd = $p->alterar();

                   
                    if (!empty($pro_bd)) {
                ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <form name="cliente2" method="POST" action="">
                            <?php
                            foreach ($pro_bd as $pro_mostrar) {
                            ?>
                            <input type="hidden" name="txtid" value="<?php echo $pro_mostrar[0]; ?>">
                            <div class="form-group">
                                <label>ID:</label>
                                <p class="form-control-plaintext"><?php echo $pro_mostrar[0]; ?></p>
                            </div>
                            <div class="form-group">
                                <label for="txtnome">Nome do Produto:</label>
                                <input type="text" name="txtnome" class="form-control" value="<?php echo $pro_mostrar[1]; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="txtestoq">Estoque:</label>
                                <input type="text" name="txtestoq" class="form-control" value="<?php echo $pro_mostrar[2]; ?>" required>
                            </div>
                            <button type="submit" name="btnalterar_produto" class="btn btn-success">Salvar Alterações</button>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
                <?php
                    } else {
                        echo "<div class='alert alert-danger mt-4'>Produto não encontrado. Verifique o ID informado.</div>";
                    }
                }
                ?>

                
                <?php
                if (isset($_POST["btnalterar_produto"])) {
                    $txtnome = $_POST["txtnome"];
                    $txtestoq = $_POST["txtestoq"];
                    $txtid = $_POST["txtid"];

                    include_once 'classeProduto.php';
                    $pro = new Produto();
                    $pro->setNome($txtnome);
                    $pro->setEstoque($txtestoq);
                    $pro->setId($txtid);

                    echo '<div class="container mt-4">';
                    echo '<div class="card">';
                    echo '<div class="card-body text-center">';
                    echo '<br><br><br>' . $pro->alterar2() . '<br><br>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    
                    @header("Location: classeAlterar.php");
                }
                ?>
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
