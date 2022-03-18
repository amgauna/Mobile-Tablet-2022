<?php
error_reporting(E_ALL); // Report all PHP errors
?>

<!-- Mobile / Tablet detect -->

<!DOCTYPE html> <!--  anagauna.eti.br -->

<html lang='pt-br'> 

<!-- =============================================================================================== -->
    
    <!-- mobile / Grid 576px / media screen / versão celular / 4 a 6 polegadas 
         tablet / Grid 768px / media screen / versão tablet / 5 a 10 polegadas 
         usar o grid medium 768px = col-md-auto com font-zize: 15px 
         Device-height = Descreve a altura do dispositivo de saída( ou seja, toda a tela ou página, em vez 
         de apenas a área de renderização, tal como a janela do documento). 
         Device-width = Descreve a largura do dispositivo e saída (ou seja, toda a tela ou página, em vez 
         de apenas a área de renderização, tal como a janela do documento). 
    -->

<!-- =============================================================================================== -->

    <!--		
    HTML Cores padrão = https://html-color.codes/pink
    color: #f4511e = laranja escuro 
    color: #9F00FF = violeta royal 
    color: #6351ce = violeta médio
    color: #c71585 = rosa médio royal 
    color: #fdbcb4 = melon
    color: #ffb6c1 = light pink
    color: #ffe4e1 = misty rose
    color: #DBF9DB = Light Rose Green		 
    color: #fff000 = amarelo claro
    color: #ffdead = navajo white
    color: #ffffff = branco escuro 
    color: #007bff = azul claro
    color: #005aff = azul royal 
    color: #120a8f = azul escuro 
    color: #013220 = verde dark green
    color: #3b7a57 = verde amazon
    color: #4CAF50 = verde 
    color: #90ee90 = verde claro
    color: #7fffd4 = verde água (aquamarine)
    color: #D6EFFF = azul muito claro 
    color: #e3f2fd = branco azulado
    color: #C6E9FF = azul claro 
    color: #6D6D6D = cinza escuro 
    color: #474A51 = cinza muito escuro 		 
   -->

    <!-- background: linear-gradient(to right, #6200ea, #6351ce, #005aff, #6351ce, #6200ea); -->
    <!-- background: linear-gradient(to right, #c71585, #9c27b0, #9F00FF, #9c27b0, #c71585); -->

<!-- =============================================================================================== -->

    <!-- inicio do cabeçalho (propriedades padrão) --> 

    <!-- Charset = UTF-8 / ISO-8859-1 / HTML5 -->
    <meta http-equiv="content-type" content="text/html, charset=UTF-8" />

    <!-- mobile responsivo / tablet responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap versão 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <!--  CSS - Estilo Padrão -->
    <link rel="stylesheet" type="text/css" href="mobile\w3mobile.css">

<!-- =============================================================================================== -->

    <title>Ana Gauna | Mobile </title>

    <base target="_self" href="http://www.anagauna.eti.br/">

    <meta name="date" content="11/03/2022">
    <meta name="author" content="Ana Mercedes Gauna">
    <meta name="copyright" content="©2022 Ana Mercedes Gauna" />
    <meta name="reply-to" content="amgauna@anagauna.eti.br">

    <meta name="description" content="Ana Gauna | CRA-RJ 03-03161 | Serviços de Tecnologia da Informação. 
		Telefone: +55 (21) 2538-0399, WhatsApp: +55 (21) 97937-1230, email:amgauna@anagauna.eti.br">

    <meta name="keywords" content="Tecnologia da Informação, TI, Analista de Sistemas, Consultoria TI, Web,
        Gestão de Projetos, CTO, CEO, CIO, CSO, Webmaster, Web Designer, Suporte Técnico, Web Developer, 
        Front-end, Back-end, Designer Gráfico, Represente Comercial, Corel Draw, Adobe Photoshop, Negócios, 
        Prestação de Serviços, Outsourcing, Service Desk, Help Desk, Suporte Field, Tech Support, Business,
        HTML, CSS, PHP, Bootstrap, Java, JavaScript, Angular JS, PHP, C++, C#, Visual Basic, Visual Studio,
        GitHUB, Git, Microsoft, Windows 7, Windows 8, Windows 10, Windows Server, SQL Server, SQL, MySQL, 
        programação web, data analytics, Big Data, Ciência da Computação, Office 365, Microsoft Azure, ERP,
        Cloud Computing, AWS, Amazon Web Services, Microsoft Project, Microsoft Teams, Microsoft Flow, RH,
        Microsoft Sharepoint, Microsoft Visio, Microsoft Word, Microsoft Excel, Microsoft Powerpoint, DP,
        ERP Contabilidade, ERP Recursos Humanos, ERP Imobiliário, ERP Nota Fiscal, ERP Folha de Pagamento, 
        Zona Sul, Botafogo, Humaitá, Copacabana, Leme, Ipanema, Gávea, Leblon, Lagoa, Jardim Botânico,
        Flamengo, Glória, Catete, Largo do Machado, Centro, Barra da Tijuca, Rio de Janeiro, RJ, Brasil">

<!-- =============================================================================================== -->

    <!-- icon do Site -->
    <link rel="icon" href="assets/images/jpg/gauna2.jpg" type="image/x-icon">

    <!-- Bootstrap versão 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Fonte Awesome versão 4.7.0  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- Google Fontes = Maven Pro -->
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>

<!-- =============================================================================================== -->

<stype type="text/css">

    /* Código de página UTF-8 / PT-BR */
    @charset "UTF-8";

    @media only screen and (min-device-width: 320px) and (max-device-width: 568px)
                       and (-webkit-min-device-pixel-ratio: 2) { font-size: small; }
    
    /* mobile / Grid 320px ate 568px / media screen / versão celular / 4 a 6 polegadas */
    /* tablet / Grid 768px / media screen / versão tablet / 5 a 10 polegadas */
    /* usar o grid medium 768px = col-md-auto com font-zize: 15px */
    /* Device-height = Descreve a altura do dispositivo de saída, ou seja, toda a tela ou página, em vez 
       de apenas a área de renderização, tal como a janela do documento. */
    /* Device-width = Descreve a largura do dispositivo e saída, ou seja, toda a tela ou página, em vez 
       de apenas a área de renderização, tal como a janela do documento. */

</style>

<!-- =============================================================================================== -->

</head> <!-- fim do cabecalho -->


    <body style="background: #eeeeee; color: #6200ea; font-size: small; border: 0px solid #aaa; 
                 width: 100%; align-content: top; margin: auto; padding: auto;"> 

    <!-- Grid tem no máximo 12 colunas (exemplo) 
    <div class="container">
        <div class="row">
            <div class="col-sm-auto"></div>
            <div class="col-sm-auto"></div>
            <div class="col-sm-auto"></div>
        </div> 
	</div> 
    fim do exemplo de grid -->


    <p style="text-align: center; color: #000;"> <script>document.write(Date());</script> </p> 

    <!-- Menu -->
    <?php require_once('web/menu2022.php'); ?>
    <!--  Menu NavBar -->


    <div class="container">
    <div class="row">

    <div class="col-lg-12" style="background: #c71585; color:#ffffff; text-align:center; 
                          font-size: normal; margin:auto; padding: 19px 19px 19px 19px;">
         <figure class="responsive" style="margin:auto; padding:auto;">	
	     <img class="responsive" align="left" width="80px" height="80px" src="assets/fotos/AnaGauna-Junho2019B.jpg">
	     </figure> 		 
         <h4 style="color: #eeeeee;"> Adm. de Serviços Técnicos </h4> 
         <span style="color: #eeeeee;"> Consultoria Técnica, Projetos TI, <br> SEO, Marketing Digital, Social Media </span> 
         <p></p>
    </div> <!-- col-lg-12 -->

    <!-- rede-social -->   
    <?php require_once('web/redesocial2022.php'); ?>  


    <main> 

    <div style="backgroung-color: #DBF9DB; color: #120a8f; border: 2px solid #aaa; font-size: small;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <p>
        <h5> <b> MICROSOFT SOLUTION PROVIDER </b> </h5>
        <p>
        <figure style="position: relative; margin: auto; padding: auto;">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\mspartner2.png">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\trabalho-notebook3.jpg">     
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\cloud-computing5.jpg">
        </figure>       
    </div>

    <div style="backgroung-color: #ffb6c1; color: #120a8f; border: 2px solid #aaa; font-size: normal;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <p>
        <h5> <b> ADMINISTRAÇÃO DE PROJETOS TI </b> </h5>
        <p>
        <figure style="position: relative; margin: auto; padding: auto; ">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\abraweb-associado.png">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\mulher-trabalhando-computador.jpg">   
        <img class="responsive" width="100px" height="100px" src="assets\images\gif\project-management-600px.gif"> 
        </figure>
    </div>

    <div style="backgroung-color: #DBF9DB; color: #120a8f; border: 2px solid #aaa; font-size: normal;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <p>
        <h5> <b> WEB DEVELOPER (BACK-END) </b> </h5>
        <p>
        <figure style="position: relative; margin: auto; padding: auto; ">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\bootstrap.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\php.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\wordpress.jpg">
        </figure>  
    </div>

    <div style="backgroung-color: #ffb6c1; color: #120a8f; border: 2px solid #aaa; font-size: normal;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
          <p>
          <h5> <b> SUPORTE TÉCNICO WINDOWS </b> </h5>
          <p>
        <figure style="position: relative; margin: auto; padding: auto; ">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\microsoft-office.png">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\microsoft-power-bi.png">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\microsoft-teams.png">
        </figure>
    </div>

    <div style="backgroung-color: #DBF9DB; color: #120a8f; border: 2px solid #aaa; font-size: normal;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <p>
        <h5> <b> SEO | MARKETING DIGITAL </b> </h5>
        <p>
        <figure style="position: relative; margin: auto; padding: auto; ">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\google-adsense.png">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\google-adwords.png">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\facebook-ads.png">
        </figure>
    </div>

    
    <div style="backgroung-color: #ffb6c1; color: #120a8f; border: 2px solid #aaa; font-size: normal;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <p>
        <h5> <b> DESIGNER GRÁFICO </b> </h5>
        <p>
        <figure style="position: relative; margin: auto; padding: auto;">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\graphic-design.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\corel-draw.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\adobe-photoshop.jpg">
        </figure>  
    </div>

    <div style="backgroung-color: #DBF9DB; color: #120a8f; border: 2px solid #aaa; font-size: normal;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <p>
        <h5> <b> SUPORTE TÉCNICO EM INFORMÁTICA </b> </h5>
        <p>
        <figure style="position: relative; margin: auto; padding: auto; ">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\suporte-tecnico.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\microsoft-windows10-300px.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\windows-server.jpg">
        </figure>
    </div>

    <div style="backgroung-color: #ffb6c1; color: #120a8f; border: 2px solid #aaa; font-size: normal;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <p>
        <h5> <b> SUPORTE TÉCNICO (ERP TOTVS) </b> </h5>
        <p>
        <figure style="position: relative; margin: auto; padding: auto; ">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\microsiga-protheus.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\totvs-protheus.png">
        <img class="responsive" width="100px" height="100px" src="assets\images\png\totvs-rm-labore.png">
        </figure>
    </div>

    <div style="backgroung-color: #DBF9DB; color: #120a8f; border: 2px solid #aaa; font-size: normal;
                margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <p>
        <h5> <b> FORMAS DE PAGAMENTO <br> solicite um orçamento </b> </h5>
        <p>
        <figure style="position: relative; margin: auto; padding: auto; ">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\pix-banco-central.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\qrcode.jpg">
        <img class="responsive" width="100px" height="100px" src="assets\images\jpg\pagseguro_uol_cartao.jpg">
        </figure>
    </div>

    <p></p>

    <div id="GDPR" style="background-color: #e3f2fd; color: #120a8f; border: 2px solid #aaa; 
    font-size: normal; margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <!-- GDPR / União Européia -->
        <figcaption> <p><br></p>
        <h5 style="text-align:center;"> <b> General Data Protection Regulation <br> (GDPR) | União Européia </b> </h5>  
        <hr>
        <p style="text-align: justify; margin: auto; padding: 19px 19px 19px 19px auto;"> 
        Este site utiliza cookies automáticos para gerar os anúncios SEO de Marketing Digital 
        do Facebook, Instagram, Twitter, Google AdSense, Google Adwords, Google Analytics, etc, 
        e quem continuar a navegar concorda com o uso. De preferência, trabalho com empresas 
        estabelecidas na Cidade do Rio de Janeiro/RJ, Brazil.
        </p>  <p></p>
        </figcaption> <!-- GDPR / União Européia -->
    </div> <!-- col-lg-auto -->
    

    <div id="LGPD" style="background-color: #e3f2fd; color: #013220; border 2px solid #aaa; 
    font-size: normal; margin: auto; padding: auto; align-items: center; text-align: center;"> 
        <!-- LGPD / Brazil -->
        <figcaption> <p><br></p>
        <h5 style="text-align:center;"> <b> Lei Geral de Proteção de Dados <br> (LGPD) | Brazil </b> </h5>
        <hr>   
        <p style="text-align: justify; margin: auto; padding: 19px 19px 19px 19px auto;"> 
        Este site utiliza dados pessoais para emissão da nota fiscal eletrônica 
        (Nota Carioca da Prefeitura da Cidade do Rio de Janeiro), cobrança com 
        boletos bancário, PagSeguro, Paypal, Cielo, Pix, para pagamento dos
        serviços realizados. De preferência, trabalho com empresas estabelecidas 
        na Cidade do Rio de Janeiro/RJ, Brazil.
        </p>  <p></p>
        </figcaption> <!-- LGPD / Brazil -->
    </div> <!-- col-lg-auto -->

    <p></p>
       
    <div class="google-adsense displayed" id="anuncios-google-adsense" 
         style="margin:auto; padding:auto; border: 2px solid #aaa; width: 300px; height: 300px;">
        <span>Espaço dos Anúncios Google AdSense</span>
        <script data-ad-client="ca-pub-1009049772490413" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- (2) Anúncios Automáticos Google AdSence -->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- anagaunatech_sidebar-left-1_AdSense1_300x280_as -->
        <ins class="adsbygoogle displayed" data-ad-client="ca-pub-1009049772490413" data-ad-slot="1985844212"> </ins>
        <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
    </div> <!--  fim Anúncios Automáticos Google AdSence  -->

    <p></p>

    </div> </div> <!-- row / container -->

    <!--
    <div id="Serasa" style="background:#7FFFD4; color:darkblue; border:1px solid #aaa; 
	                margin-left:auto; margin-right:auto; display:flex; float:left;
	<figure>
        <img class="responsive" width="auto" height="auto" src="assets\jpg\serasa-experian-cupom-crana13895-behance.jpg">         
    </figure>
	</div>
	-->

    
<!-- =============================================================================================== -->

    <!--  JavaScripts / Deve ser colocado no final do <body>  -->

    <!-- Bootstrap versão 5.1.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- JQUERY 3.4.1 Slim-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <!-- Google AdSense -->
    <script data-ad-client="ca-pub-1009049772490413" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) { 
            w[l] = w[l] || [];
            w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })
        (window, document, 'script', 'dataLayer', 'GTM-T3DD67');
    </script> <noscript> 
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3DD67" height="0" width="0" style="display: none; visibility: hidden"> </iframe> 
    </noscript>
    <!-- Fim Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166307741-1"></script>
    <script> window.dataLayer = window.dataLayer || [];
             function gtag() { dataLayer.push(arguments); }
             gtag('js', new Date());
             gtag('config', 'UA-166307741-1');
    </script>
    <!-- Fim do gtag.js / Google Analytics  -->

<!-- =============================================================================================== -->

</body>


<!--  rodape -->
 <footer>

<!-- inicio do rodape / Bootstrap / Grid column -->

<div class="container">
<div class="row">

</div style="background: #ffdead; color: #120a8f;  border: 2px solid #aaa; 
            display: inline; margin: auto; padding: auto; font-size: small;">
  
  <!--  Google Maps Incorporado  -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.8893863298917!2d-43.19393468513257!3d-22.954300484987726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997fe0d5488ec5%3A0x6eb6f463a1374111!2sR.+Volunt%C3%A1rios+da+P%C3%A1tria%2C+305+-+Botafogo%2C+Rio+de+Janeiro+-+RJ%2C+22270-010!5e0!3m2!1spt-BR!2sbr!4v1527636033795" width="100%" height="auto" allowfullscreen> </iframe>
  <!--  Fim Google Maps Incorporado  -->

  <!-- Grid column / Esquerda / Left -->
  <address style="text-align: justify; border: 1px solid #aaa; margin: auto; padding: auto;">
        <!-- Social buttons -->  <p></p>
        <h6 class="font-weight-bold"> <b> Endereço (home-office) </b> </h6>
        <!--  Endereço -->
        <p><i>  Rua Voluntarios da Patria nº 305, Apto. 202, Edificio Cibel, Bairro: Botafogo,
                Cep: 22270-003, Cidade: Rio de Janeiro, UF: RJ, Brasil </i> </p>
  </address> <!--- Grid column / Left -->

  <!-- Grid column / Direita / Right --> 
  <address style="text-align: left; border: 1px solid #aaa; margin: auto; padding: auto;"> <p></p>
        <h6 class="font-weight-bold"> <b> Contato (whatsapp) </b> </h6>
        <!-- Telefone -->
        <p> <i> Telefone: <a href="https://api.whatsapp.com/send?phone=552125380399" style="color:#120a8f;"> (21) 2538-0399 </a> | 
        <a href="https://api.whatsapp.com/send?phone=5521979371230" style="color:#120a8f;"> (21) 97937-1230 </a> <br>
        <!--  Email -->
        Email: <a href="mailto:amgauna@anagauna.eti.br" style="color:#120a8f;"> amgauna@anagauna.eti.br </a> <br> 
        Skype: <a href="mailto:amgauna@outlook.com" style="color:#120a8f;"> @amgauna </a> </i> </p>
  </address> <!-- Grid column / Right -->

  <address style="text-align:center; border: 1px solid #aaa; margin: auto; padding: auto;"> <p></p>
      <p> <i> Site hospedado na <a href="https://locaweb.com.br" style="color:darkblue;"> locaweb.com.br </a>  </i> <br>
      <!-- fim do Copyright -->
      <i style="color: darkblue;"> "Tudo posso naquele que me fortalece" <br> (Filipenses 4:13) </i> </p>
  </address>

  <address style="background: #474A51; color: #ffffff; border: 2px solid #aaa; 
                   text-align:center; margin: auto; padding: auto;">  
      <!-- Copyright --> 
      <span style="text-align:center; margin: auto; padding: auto;"> 
      <i> Copyright: ©2022 - Ana Mercedes Gauna <br> (CRA-RJ: 03-03161) </i> </span>
      <!-- fim do Copyright -->   
  </address>

  </div> </div> </div> <!-- row / container / rodape -->

</footer> 

</html>
