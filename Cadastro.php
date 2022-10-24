<?php
require("conexao.php");
include("function.php");
//VERIFIQUEI SE OS CAMPOS ESTÃO VAZIO
if(!empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['nome']) && !empty($_POST['telefone']) && !empty($_POST['cep'])){
// DECLAREI AS VARIAVEIS
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
// CHAMOU A FUNÇÃO LIMPARPOST PARA PROTEGER (SQL INJECTOR)
    $email = LimparPost($_POST['email']);
    $senha = LimparPost($_POST['senha']);
    $nome = LimparPost($_POST['nome']);
    $telefone = LimparPost($_POST['telefone']);
    $cep = LimparPost($_POST['cep']);
//SELECIONEI TODOS OS DADOS DA TABELA CLIENTES ONDE FOI IGUAL EMAIL
    $query = $mysqli->prepare("SELECT * FROM clientes WHERE email = '".$email."'");
    $query->execute();
    $dados = $query->fetchAll();
    // VALIDEI SE JA EXISTIA EMAIL
    if($dados){
        //INFORMANDO QUE OS DADOS CADASTRADOS JA EXISTEM
        echo "<script>alert('ÚSUARIO JA REGISTRADO');</script>";
    }else{
        // CRIEI UM ALGORITIMO PARA INSERIR NO BANCO DE DADOS OS DADOS DO FORMULARIO DE FORMA SEGURA E TRATANDO ERRO
        try{
        $inse = $mysqli->prepare("INSERT INTO clientes value('','$nome','$email','$senha','$telefone','$cep')");
        $inse->execute();
        // CHAMEI A FUNÇÃO PARA REGISTRAR O LOGIN DO USUARIO
        RegLogUser($nome);
        header("Location: index.php");
    } 
    // TRATATIVA DE ERRO CASO OS DADOS NAO CONSIGAM SER INSERIDOS NO BANCO DE DADOS
        catch(PDOException $error){
            //PDOException CAPTURA ERROS DO PDO
            // MOSTREI UMA MENSAGEM DE ERRO
            echo "<script>alert('HOUVE UM PROBLEMA, NÃO FOI POSSIVEL CADASTRAR NO BANCO DE DADOS');</script>";

        }
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
    <h1>REGISTRO</h1>
    <form action="" method="POST">
                <div class="card-content-area">

                    <input type="text" name="nome" id="NomeCompleto" placeholder="Nome">

               
                    <input type="email" name="email" id="email" placeholder="Email">


                    <input type="password" name="senha" id="password" placeholder="senha">

          
                    <input type="number" name="telefone" id="telefone" placeholder="Telefone">


                    <input type="number" name="cep" id="CEP" placeholder="CEP">



                
</div>
            <div class="card-footer">
                        <a href="#.php">
                        <input  type="submit" value="Cadastrar" class="botaocad">
                        </a>
        <p>OU</p>
                   <div class="botoes-volta">
                    <a href="./PagLogin.php">
                    <input  type="button" value="LOGIN" class="volta-login">
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