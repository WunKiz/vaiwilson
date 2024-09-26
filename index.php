<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Viadometro</title>
    <link rel="icon" href="png-transparent-pink-pink-bow-ribbon-violet-heart-thumbnail.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Audio !-->
    <audio id="audio" src="que demais.m4a" preload="auto"></audio>
    <script>
        // Função JavaScript para tocar o áudio
        function playAudio() {
        var audio = document.getElementById('audio');
        audio.play();
    }
</script>
    <div class="viadometro">
        <h1 class="titulo">Viadometro</h1>
        <p>Descubra se você é um viado de QUALIDADE!</p>
        <form action="index.php" method="post">
        <span>
            <input type="text" placeholder="Digite seu nome..." name="nome" id="nome">
            <button type="submit" id="botao">Descobrir</button>
        </span>
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nome = "";
            if(!empty($_REQUEST['nome'])){
                $nome = $_REQUEST['nome'];
                $random = random_int(0, 100);
                echo "<script>playAudio();</script>";
            }
            else {
                echo "<p>Você não digitou o nome correto</p>";
            }
            if ($nome != ""){
                if(strtolower(substr($nome, 0, 1)) == "i" ){
                    echo "<p>$nome, Sua porcentagem de viadice é de 100%</p>";
                    $video = 1;
                }
                else if (strtolower(substr($nome, 0, 1)) == "g"){
                    echo "<p>$nome, Sua porcentagem de viadice é de 0%</p>";
                }
                else {
                    if($nome != ""){
                        echo "<p>$nome, Sua porcentagem de viadice é de $random%</p>";
                        $video = 1;
                    }
                }
            }
        }
        ?>
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if($video == 1){
            echo '<video width="640" height="360" autoplay>
            <source src="vai willson.mp4" type="video/mp4">
            </video>';
        }
    }
    ?>
</body>
</html>