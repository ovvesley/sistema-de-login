<?php
session_start();
$permission = $_SESSION['permission'];

if ($permission == 0) {
    echo ("
    <h1 style='font-size:150px;'>VOCE ESTA TENTANDO BURLAR O SITE? SAFADINHx!</h1>     
    ");
} else {
    switch ($permission) {
        case 1:
            echo ("
        <h1 style='font-size:150px;'>BLABLABLABLA!</h1>     
        ");
            break;
        case 2:
            echo ("
        <h1 style='font-size:150px;'>MAIS BRABOO!</h1>     
        ");
            break;
        case 3:
            echo ("
        <h1 style='font-size:150px;'>MAIS BRABAO!</h1>     
        ");
            break;
        case 4:
            echo ("
        <h1 style='font-size:150px;'>O BRAD!</h1>     
        ");
            break;
        case 5:
            echo ("
        <h1 style='font-size:150px;'>LISAO!</h1>     
        ");
            break;;
        case 6:
            echo ("
        <h1 style='font-size:150px;'>MAIS LISOOO!</h1>     
        ");
            break;
        case 7:
            echo ("
        <h1 style='font-size:150px;'>MACONHEIRO !</h1>     
        ");
            break;
        case 8:
            echo ("
        <h1 style='font-size:150px;'>MAIS BRABO !</h1>     
        ");
            break;
        case 9:
            echo ("
        <h1 style='font-size:150px;'>AMARAL BOLADAO MAIS BRABO !</h1>     
        ");
            break;
        case 10:
            echo ("
        <h1 style='font-size:150px;'>MAIS BRABO !</h1>     
        ");
            break;
        
    }
}

session_destroy();
