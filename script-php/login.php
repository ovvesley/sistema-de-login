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


if (!$status_login) {
    echo ('<h1> LOGIN OU SENHA NÃO CADASTRADA </h1>');
    header('Location: /index.html');
    $_SESSION['permission'] = 0;
} else {  
    session_start();
    $_SESSION['permission'] = 1;
    header("Location:./area_secreta.php");
}
