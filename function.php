<?php

function VerifUser(){
    //VERFICANDO SE O USUARIO ESTA LOGADO
if($_SESSION['is_login'] == 1){
    return '';
}else{
    header("Location: PagLogin.php");
}

}
function LimparPost($valor){
    // GARANTINDO A SEGURANÇA
    $gus = trim($valor);
    $gus = stripslashes($gus);
    $gus = htmlspecialchars($gus);
    return $gus;
}
function RegLogUser($nome){
    // REGISTRANDO A SESSION DO USUARIO
 $_SESSION["is_login"] = 1;
 $_SESSION["nome"]=$nome;
 
}

function logout(){
    // DESLIGANDO O LOGIN DO USUARIO E DIRECIONANDO PARA INDEX
    session_destroy();
    header("Location: index.php");
}

?>