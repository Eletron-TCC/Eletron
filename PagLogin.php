<?php
// INCLUINDO A CONEXÃO E SESSION
require("conexao.php");
// INCLUIR FUNÇOES
include("function.php");

//VER SE A SESSION NÃO É VAZIA
if(!empty($_SESSION)){
    header("Location: index.php");
}
//VERIFICAÇÃO SE OS CAMPOS ESTÃO VAZIO
if(!empty($_POST['email']) && !empty($_POST['senha'])){
    

// RECEBIMENTO DAS INFORMAÇOES E PROTEÇÃO
$email = LimparPost($_POST["email"]);
$senha = LimparPost($_POST["senha"]);
// SELECIONANDO OS DADOS DA TABELA CLIENTE
$query = $mysqli->prepare("SELECT * FROM clientes WHERE email='".$email."' AND senha='".$senha."'");
//EXECUTANDO A QUERY NO BANCO DE DADOS PDO
$query->execute();
// ATRIBUINDO OS DADOS PRA DENTRO DA VARIAVEL DADOS
$dados = $query->fetchAll();
// VERFICANDO SE HOUVE RESULTADO NA BUSCA NO BANCO DE DADOS
if($dados){
    $nome = $dados[0]['nome'];
    $email = $dados[0]['email'];
    $senha = $dados[0]['senha'];
// REGISTRANDO A SESSION DO USUARIO
    RegLogUser($nome);
// REDIRECIONANDO O USUARIO PARA INDEX
    header("Location: index.php");

}else{
    // INFORMANDO CASO HAJA ALGUM ERRO
    echo "<script>alert('EMAIL OU SENHA INCORRETOS');</script>";
}


}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
    <title>Cadastro - Eletron </title>
</head>
<body>
<div id="cadastro">
    <h1>LOGIN</h1>
    <form action="" method="POST">
                <div class="card-content-area">

                    <input type="email" name="email" id="email" placeholder="Email">


                    <input type="password" name="senha" id="senha" placeholder="senha">

       </div>
            <div class="card-footer">
                        
                        <input  type="submit" value="Entrar" class="botaocad">
                        
        <p>OU</p>
                   <div class="botoes-volta">
                    <a href="./Cadastro.php">
                    <input  type="button" value="REGISTRE-SE" class="volta-login">
                </a>

                    <a href="index.php">
                    <input  type="button" value="MENU PRINCIPAL" class="volta-menu">
                </a>
                </div>
                <p>Ao se registrar, você concorda com os termos, condições <br>
                     e políticas da Eletron</p>
            </div>
           
            </form>       

    
</body>
</html>