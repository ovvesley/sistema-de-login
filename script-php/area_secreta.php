<?php
session_start();
$permission = $_SESSION['permission'];

if($permission == 1){
    echo ("
        <h1 style='font-size:150px;'>ESSA AREA É TREMENDAMENTE SECRETA</h1>     
    ");
}else{
    echo ("
    <h1 style='font-size:150px;'>VOCE ESTA TENTANDO BURLAR O SITE? SAFADINHx!</h1>     
");
}

session_destroy();

?>
