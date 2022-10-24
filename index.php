<?php
include("conexao.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Index</title>
<link href="css/pag.css" rel="stylesheet" type="text/css">
</head>

<body>
  <header class="topo-site">
	  <div class="logo">
      <a href="./index.php"><img src="imagens/LogoEletron.png"></a>
    </div>


    <div class="navegacao-opcoes">
    <nav>
        <ul>
            <li> <a href="iphone.php">Iphone</a>
                 <div class="sub-menu-1">
                    <ul>
                        <li><a href="iphoneSE.php">Iphone SE</a></li>
                        <li><a href="iphone11.php">Iphone 11</a></li>
                        <li><a href="iphone12.php">Iphone 12</a></li>
                        <li><a href="iphone13.php">Iphone 13</a></li>
                    </ul>
                  </div>
            </li>


            <li><a href="watch.php">Watch</a>
              <div class="sub-menu-1">
                 <ul>
                  <li><a href="applewatchSE.php">Apple Watch SE</a></li>
                     <li><a href="ApplewatchS3.php">Apple Watch series 3</a></li>
                     <li><a href="applewatchs5.php">Apple watch series 5</a></li>
                     <li><a href="applewatchs6.php">Apple Watch series 6</a></li>
                     <li><a href="applewatchs7.php">Apple Watch series 7</a></li>
                 </ul>
               </div>
            </li>


            <li><a href="Airpod.php">AirPods</a>
              <div class="sub-menu-1">
                <ul>
                    <li><a href="airpodsG2.php">AirPods <br>(2ª geração)</a></li>
                    <li><a href="airpodsG3.php">AirPods <br>(3ª geração)</a></li>
                    <li><a href="airpodsPro.php">AirPods Pro</a></li>
                    <li><a href="airpodsMax.php">AirPods Max</a></li>
                </ul>
              </div>
            </li>

            <li> <a href="ipad.php">Ipad</a>
              <div class="sub-menu-1">
                <ul>
                    <li><a href="ipadmini6.php">iPad mini 6</a></li>
                    <li><a href="ipadair4.php">iPad Air 4</a></li>
                    <li><a href="ipadair5.php">iPad Air 5</a></li>
                    <li><a href="IPad9.php">iPad 9</a></li>
                    <li><a href="IPadPro.php">iPad Pro</a></li>
                </ul>
              </div>
            </li>

            <li> <a href="mac.php">Mac</a>
              <div class="sub-menu-1">
                <ul>
                    <li><a href="iMac.php">iMac</a></li>
                    <li><a href="MacBookAir.php">MacBook Air</a></li>
                    <li><a href="MacBookPro.php">MacBook Pro</a></li>
                </ul>
              </div>
            </li>

            <li> <a href="acessorios.php" >Acessorios</a>
              <div class="sub-menu-1">
                
              </li>
            <li> <a href="Sobrenos.php">Sobre nós</a></li>
        </ul>
  

    </div>
  </div>

<div class="icones-header">
    <a href="PagLogin.php">
      <img src="imagens/IconeLogin.png">
       <div class="sub-menu-1">
       <?php
        // VEREFICANDO SE JA EXISTE UMA SESSAO ATIVA QUE CONTÉM O NOME DO USUARIO
        if(!empty($_SESSION['nome'])){
          // EXIBINDO NOME DO USUARIO
        echo $_SESSION['nome'];
        ?>
        
        <ul>

            <li><a href="./logout.php">Sair</a></li> 
          
        </ul><?php
      // CASO NÃO ESTEJA LOGADO, MOSTRAR A OPÇÃO DE LOGAR NO SISTEMA
      }else{ ?>
          <ul>

          <li><a href="./PagLogin.php">Entrar</a></li> 
      </ul>
       <?php }?>
      </div>
    </a>
  </header>

    <section class="carrossel-iphone">
      <div class="content">
        <div class="slides">
            <input type="radio" name="slide" id="slide1" checked>
            <input type="radio" name="slide" id="slide2">
            <input type="radio" name="slide" id="slide3">
            <input type="radio" name="slide" id="slide4">
    
             <div class="slide s1">
                <a href="./iphone.php"><img src="./imagens/banner carrossel 1.png" alt="Lancamentos de iphone"></a>
            </div>
    
               <div class="slide">
                 <a href="./watch.php"><img src="./imagens/banner carrossel 2.png" alt="Lancamento de Apple watch"></a>
               </div>
               
            <div class="slide">
                 <a href="./Airpod.php"> <img src="./imagens/banner carrossel 3.png" alt="Lancamentos de Air Pod"></a>
            </div>
    
                 <div class="slide">
                     <a href="./mac.php"><img src="./imagens/banner carrossel 4.png" alt="lugar fantasia com cristais e montanha"></a>
                 </div>
            </div>
    
        <div class="navegation">
            <label class="bar"for="slide1"></label>
            <label class="bar" for="slide2"></label>
            <label class="bar" for="slide3"></label>
            <label class="bar" for="slide4"></label>
        </div>
      </div>
        </section>








    
      <div class="inf">
      <div>
        <iconify-icon icon="bi:box-fill" style="color: black;" width="30" height="30"></iconify-icon>
      <p>Frete Gratis*</p>
    </div>

    <div>
      <iconify-icon icon="ic:outline-discount" style="color:black;" width="30" height="30"></iconify-icon>
      <p>Desconto á vista</p>
    </div>

 <div>
      <iconify-icon icon="ant-design:credit-card-filled" style="color: black;" width="30" height="30"></iconify-icon>
      <p>Até 12x sem juros*</p>
    </div>

  <div>
      <iconify-icon icon="ri:secure-payment-line" style="color:black;" width="30" height="30"></iconify-icon>
      <p>Pagamento seguro*</p>
    </div>
  </div>

 

  
<section class="section-dois-container">
  <div class="destaques">
  <h1> DESTAQUES </h1>
 
 
      <div class="destaque1">
            <img src="./imagens/anuncioihpne.jpg" width="450" height="560"></img>

                      <div class="destaque2">

                            <img src="./imagens/iphone 14 em breve.png"   width="526px" height="263px"></img>
                            <img src="./imagens/banner macbook 1.png" width="526px" height="263px"></img>

                      </div>
      </div>
</div>
                


<div id="container-item">

  <div class="produto">
    <img src="./imagens/imagensprodutos/iphone11 vermelho 64gb.jpg">
        <h5>Apple iPhone 11 (64GB) - (PRODUCT) RED™</h5>                 
          <h2> R$3,300</h2>
</div>


<div class="produto">
  <img src="./imagens/imagensprodutos/applewatchSE nike preto.jpg">
  <h5>Apple Watch SE Nike+ GPS, 44 mm - Caixa de alumínio Cinza-espacial + Pulseira esportiva Cinza Carvão / Preto</h5>                    
          <h2> R$2,900</h2>
</div>

<div class="produto">
  <img src="./imagens/imagensprodutos/iphone12 pro azul-pacifico.jpg">
  <h5>apple iphone 12 Pro 64gb - Azul-Pacifico</h5>                  
        <h2> R$7,999</h2>
</div>

  <div class="produto">
    <img src="./imagens/imagensprodutos/MacBook Pro 14.jpg">
    <h5>Apple MacBook Pro 14" (M1 Pro da Apple com 8 CPU e 14 GPU, 16 GB RAM, 512GB SSD) - Cinza-espacial</h5>                    
            <h2> R$4,149,</h2>
</div>

</div>
    </section>

  <footer class="rodape">
    <section class="primeira-parte-footer">
<img src="./imagens/LogoEletron.png">

<div class="nav-footer">
<h2>NAVEGACAO</h2>
<a href="./iphone.php"><p>Iphone</p></a>
<a href="./watch.php"><p>Apple Watch</p></a>
  <a href="./Airpod.php"><p>AirPods</p></a>
    <a href="./ipad.php"><p>IPad</p></a>
      <a href="./mac.php"><p>MAC</p></a>
        <a href="./acessorios.php"><p>ACESSORIOS</p></a>
          <a href="./Sobrenos.php"><p>SOBRE NÓS</p></a>
        </div>

        <div class="nav-footer">
<h2>NAVEGACAO</h2>
<a href="./PagLogin.php"><p>Login</p></a>
<a href="./Cadastro.php"><p>Registre-se</p></a>
  <a href="#"><p>Contate-nos</p></a>
    <a href="#"><p>Termos de uso</p></a>
      <a href="#"><p>Privacidade</p></a>
      </nav>
        </div>
  
    </section>


    <section class="segunda-parte-footer">
      <div class="imagens-social">
      <iconify-icon icon="akar-icons:facebook-fill" width="50px" height="50px"></iconify-icon>
      <iconify-icon icon="entypo-social:instagram-with-circle" width="50px" height="50px"></iconify-icon>
    </div>
      <p> Politica de privacidade</p>
    <p> Termos de uso</p>
      

    <p>Copyright © 2022 Eletron Inc. Todos os direitos reservados. Apple Computer Brasil Ltda</p>
  
      </section>
 
</footer>


      <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
<script src="script.js"></script>
</body>
</html>

