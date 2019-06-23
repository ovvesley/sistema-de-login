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
    return false;
}

$status_login = (isSubscript($login_username, $login_password));

session_start();
if (!$status_login) {
    echo ('<h1> LOGIN OU SENHA NÃO CADASTRADA </h1>');
    header('Location: /index.html');
    $_SESSION['permission'] = 0;
} else {
    switch ($login_username) {
        case "rai":
            $_SESSION['permission'] = 1;
            break;
        case "dias":
            $_SESSION['permission'] = 2;
            break;
        case "maia":
            $_SESSION['permission'] = 3;
            break;
        case "enzo":
            $_SESSION['permission'] = 4;
            break;
        case "chico":
            $_SESSION['permission'] = 5;
            break;
        case "guilherme":
            $_SESSION['permission'] = 6;
            break;
        case "jotape":
            $_SESSION['permission'] = 7;
            break;
        case "vitin":
            $_SESSION['permission'] = 8;
            break;
        case "amaral":
            $_SESSION['permission'] = 9;
            break;
        case "bispo":
            $_SESSION['permission'] = 10;
            break;
    }

    header("Location:./area_secreta.php");
}
