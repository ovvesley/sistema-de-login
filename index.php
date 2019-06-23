<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/animation-background.css">
    <script src=""></script>
    <title>My_BOOK</title>
</head>
<body>
    <div class="content">
        <!-- LOGIN -->
        <div class="login" id="login-content">
            <form action="script-php/login.php" method="POST">
                <label class="login-input">
                    <span>Usuario</span>
                    <input type="text" name="login_username"  class=" login-input-text">
                </label>
                <label class="login-input">
                    <span>Senha</span>
                    <input type="password" name="login_password" id="login-input-password" class="login-input-text">
                </label>
                <label class="login-input">
                    <span>OK</span>
                    <input type="submit" id="login-input-button">
                </label>
                <label class="login-input">
                    <span>Registrar</span>
                    <input type="button" value="" id="login-input-register-button">
                </label>
            </form>
        </div>

        <!-- REGISTRO -->
        <div class="register" id="register-content" style="display: none">
            <form action="/script-php/register.php" method="POST">
                <label class="login-input">
                    <span>Usuario</span>
                    <input type="text" name="register_username"  class=" login-input-text">
                </label>
                <label class="login-input">
                    <span>Senha</span>
                    <input type="password" name="register_password" id="register-input-password" class="login-input-text">
                </label>
                <label class="login-input">
                    <span>Confirmar senha</span>
                    <input type="password" name="register_password" id="register-input-password " class="login-input-text">
                </label>
                <label class="login-input">
                    <span>OK</span>
                    <input type="submit" id="register-input-register-confirm" >
                </label>
            </form>
        </div>
    </div>
    <script src="dist/js/register-enable.js"></script>
</body>

</html>