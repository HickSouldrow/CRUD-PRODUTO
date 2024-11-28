<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
            flex-direction: column; /* Para garantir que os elementos fiquem em coluna */
        }

        .login-container {
            width: 100%;
            max-width: 400px;
        }

        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
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
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-outline-primary {
            width: 100%;
            margin-top: 10px;
        }

        .btn-outline-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
            color: #fff;
        }

        legend {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .form-control {
            border-radius: 8px;
        }

        .message-box {
            margin-top: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%; 
            max-width: 400px;
        }

        .message-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .message-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>
    <!-- Formulário de login -->
    <div class="login-container">
        <div class="card">
            <h1 class="menu-title">Login de Usuário</h1>
            <div class="card-body">
                <form name="login" method="POST" action="">
                    <fieldset class="mb-3">
                        <legend>Credenciais de Acesso</legend>
                        <div class="mb-3">
                            <label for="txtlogin" class="form-label">Login:</label>
                            <input type="text" class="form-control" id="txtlogin" name="txtlogin" placeholder="Digite seu login">
                        </div>
                        <div class="mb-3">
                            <label for="txtsenha" class="form-label">Senha:</label>
                            <input type="password" name="txtsenha" maxlength="8" required onkeypress="return blokletras(window.event.keyCode)" class="form-control" id="txtsenha" placeholder="Digite sua senha">
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary" name="btnLogin">Entrar</button>
                    <button type="reset" class="btn btn-outline-primary" name="btnLimpar">Limpar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Script para bloquear letras na senha -->
    <script>
    function blokletras(keyCode) {
        if (keyCode >= 48 && keyCode <= 57) {
            return true; 
        }
        return false; 
    }
    </script>

    <?php
    extract($_POST, EXTR_OVERWRITE);
    if (isset($btnLogin)) {
        include_once 'classeUsuario.php';
        $usuario = new Usuario();
        $usuario->setUsu($txtlogin);
        $usuario->setSenha($txtsenha);
        $existe = false;
        $pro_bd = $usuario->logar();
        
        // Caixa de sucesso
        if($pro_bd) {
            $existe = true;
            foreach($pro_bd as $pro_mostrar) {
                echo '<div class="message-box message-success">';
                echo '<h3>Login bem-sucedido!</h3>';
                echo '<p><b>Bem vindo! Usuário: ' . $pro_mostrar[0] . '</b></p>';
                echo '<a href="menuProduto.php" class="btn btn-success mt-3">Entrar</a>';
                echo '</div>';
            }
        }
        
        // Caixa de erro
        if(!$existe) {
            echo '<div class="message-box message-danger">';
            echo '<h3>Login ou senha incorretos.</h3>';
            echo '</div>';
        }
        
    }
    
    ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
