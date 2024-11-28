<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
            background-color: #f8f9fa;
        }

        .list-group-item {
            border: none;
            color: #212529;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .list-group-item:hover, .list-group-item:focus {
            background-color: #f1f1f1;
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
        }

        .list-group-item:first-child {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .list-group-item:last-child {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .list-group-item:not(:first-child):not(:last-child) {
            border-radius: 0;
        }

        .bi {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .menu-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="menu-title">Menu Principal</h1>
        <div class="list-group">
            <a href="classeListar.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="bi bi-list"></i> Listar Produtos
            </a>
            <a href="classeCadastrar.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="bi bi-plus-circle"></i> Cadastrar Produto
            </a>
            <a href="classeAlterar.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="bi bi-pencil-square"></i> Alterar Produto
            </a>
            <a href="classeExcluir.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="bi bi-trash3"></i> Excluir Produto
            </a>
            <a href="classeConsultar.php" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="bi bi-search"></i> Consultar Produto
            </a>
        </div>
    </div>
    <div class="mt-4 text-center">
                    <a href="classeLogin.php" class="btn btn-outline-primary">Voltar</a>
               
                </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
