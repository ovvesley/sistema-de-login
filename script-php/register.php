<?php
$register_password =$_POST['register_password'];
$register_username =$_POST['register_username'];
$fp = fopen('dado.csv','a');
$text_value = $register_username.','.$register_password."\n";
fwrite($fp, $text_value);
function exibir_mensagem($register_username)
{
   echo($register_username);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Olá <?php exibir_mensagem($register_username)?>;</h1>
    <h1>Cadastro feito com sucesso</h1>
</body>
</html>
