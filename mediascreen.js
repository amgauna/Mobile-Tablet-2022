<script>

/*  Device-height = Descreve a altura do dispositivo de saída( ou seja, toda a tela ou página, em vez 
    de apenas a área de renderização, tal como a janela do documento).
    Device-width = Descreve a largura do dispositivo e saída (ou seja, toda a tela ou página, em vez 
    de apenas a área de renderização, tal como a janela do documento).
    Para aplicar uma folha de estilo a um documento quando exibido em uma tela menor que 800 pixels 
    de altura, você pode usar isso: */
    
/* <link media="screen and (max-device-height: 768px) or (max-device-width: 768px)"  
          url="src/web/pagemobile.php" rel="stylesheet" />  */

    document.getElementById("demo1").innerHTML = screen.width;

    document.getElementById("demo2").innerHTML = screen.height;

    if (screen.width > 769) {
        window.location.href = "http://www.anagauna.eti.br/src/web/home.php" 
        if (screen.height > 769) {
            window.location.href = "http://www.anagauna.eti.br/src/web/home.php" }
    } 
    else {
        if (screen.width < 768)
            window.location.href = "http://www.anagauna.eti.br/src/web/pagemobile.php"
        if (screen.height < 768) {
            window.location.href = "http://www.anagauna.eti.br/src/web/pagemobile.php" } 
        };

</script>