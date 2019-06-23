<?php
$register_password = $_POST['register_password'];
$register_username = $_POST['register_username'];

function validateUserRegister($register_username, $register_password)
{
    return ($register_password && $register_username);
}

function exibir_mensagem($register_username)
{
    echo ($register_username);
}


if (validateUserRegister($register_username, $register_password)) {
    $fp = fopen('dado.csv', 'a');
    $text_value = $register_username . ',' . $register_password . "\n";
    fwrite($fp, $text_value);
    echo ("<h1>CADASTRO REALIZADO COM SUCESSO");
    sleep(3);
    header('location: /index.php');

} else {
    echo ("
        <h1 style='font-size:150px;'>NAO FOI POSSIVEL CADASTRAR</h1>     
    ");
}
