<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de frases</title>
    <link rel="Icon" href="img/icon.png">
    <link href="frase.css" rel="stylesheet">
</head>

<body>
    <h1>FRASE DO DIA...<img src="img/icon.png" width= 3% left=20%/></h1>
    <hr>
    <p><b>Clique no botão abaixo para gerar uma frase motivacional:<b></p>
    <hr>
    <fieldset class="grupo">
    <form action="index.php" method="post">
        <button>Gerar Frase</button>
        <p id="frase"></p>
    </form>
    <!-- Plugin VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <!-- Plugin VLibras -->

    <?php
    $frases = array(
        "'Gosto daquilo que me desafia. O fácil nunca me interessou. Já o obviamente impossível sempre me atraiu.-Clarice Lispector'",
        "'Nossas dúvidas são traidoras e nos fazem perder o que, com frequência, poderíamos ganhar, por simples medo de arriscar- William Shakespeare'",
        "'Tudo é considerado impossível ate acontecer- Nelson Mandela'",
        "'Algo só é impossível até que alguém duvide e resolva provar ao contrário- Albert Einsten'",
        "'Seja forte e corajoso, não se apavore pois eu, o seu Senhor estou contigo- Josué 1:9'",
        "'Seu corpo ouve tudo que sua mente diz- Surama Jurdi'",
        "'O que não te desafia, não te transforma- José Roberto Marques.'",
        "'Maior que a tristeza de não haver vencido é a vergonha de não ter lutado! - Rui barbosa'",
        "'Coragem, a vida gosta de pessoas destemidas. -  Luis Domingues'",
        "'Reciprocidade, para as coisas boas. Imunidade, para as coisas ruins. - Tati Zanella'");

    shuffle($frases);
    echo $frases[0];
    ?>
</body>

</html>