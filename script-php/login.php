<?php
$login_password = $_POST['login_password'];
$login_username = $_POST['login_username'];
function exibir_mensagem($login_username)
{
    echo ($login_username);
}

function isSubscript($login_username, $login_password)
{
    $csvFile = file('dado.csv');
    foreach ($csvFile as $line) {
        $text = str_getcsv($line);
        if ($login_username == $text[0] && $login_password === $text[1]) {
            echo ('<br>' . 'USUARIO POSSUI NO REGISTRO' . '<br>');
            return true;
        }
    }
    // var_dump($data);
    return false;
}


if (!isSubscript($login_username, $login_password)) {
    echo ('<h1> LOGIN OU SENHA NÃO CADASTRADA </h1>');
    header('Location: /index.php');
}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEM VINDO</title>
</head>

<body>

</body>

</html>