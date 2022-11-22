<html>
    <head>
        <meta charset="utf-8">
        <link href="frufru.css" rel="stylesheet">
    </head>

<?php

  require_once("exercicio20092022.php");


  $jogo1 = new Jogo();
    $jogo1->Nome = "Metal:HellSinger";
    $jogo1->Preco = "$100,00";
    $jogo1->Genero = "FPS";
    $jogo1->Nota= "9/10";
    $jogo1->Ano = "15/09/2022";
    $jogo1->Descricao = "Metal: Hellsinger é um FPS de ritmo, ou seja: sua habilidade de atirar no compasso da música fará toda a diferença no seu jogo. Quanto maior sua sintonia com o ritmo, mais intensa ficará a melodia, e mais destruição você causará. ";
    
    $jogo2 = new Jogo();
    $jogo2->Nome = "Elden Ring";
    $jogo2->Preco = "$250,00";
    $jogo2->Genero = "Ação,RPG,Aentura";
    $jogo2->Nota= "10/10";
    $jogo2->Ano = "20/01/2022";
    $jogo2->Descricao="";
    
    $jogo3 = new Jogo();
    $jogo3->Nome = "Metal:HellSinger";
    $jogo3->Preco = "$100,00";
    $jogo3->Genero = "FPS";
    $jogo3->Nota= "9/10";
    $jogo3->Ano = "15/09/2022";
    $jogo3->Descricao="";
    
    echo $jogo1->VerJogo();
    echo $jogo2->VerJogo();
    echo $jogo3->VerJogo();
 ?>
</html>
