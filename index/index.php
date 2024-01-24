<?php

include "base.php";
include "corpo.php";

?>

<title>Bem vindaaa!!!</title>

<body>
<img class="fundo" src="../assets/rosas.png">
<img class="fundo" src="../assets/rosas2.png">
<img class="fundo1" src="../assets/teste8.png">
<img class="fundo2" src="../assets/teste9.png">
<section class="sectionCentral">

    <form class="container"><br>
            
           <div class="separacao esq">
              <img class="esqueleto" src="../assets/teste1.png">
           </div>

           <div class="separacao sepCarta">
              <h1 class="titulo">Olá Rafa</h1>
              <p class="descricao">Trago aqui uma carta, ou melhor, um convite.</p><br>
              <a class="botaoCarta" onclick="chamaCarta()"><img class="carta" src="../assets/teste7.png"></a>
           </div>
            
    </form>

</section>

<div class="cartaImg" id="carta">
    <img class="convite" src="../assets/teste6.png"><br>
    <div class="divOpcao">
        <a class="opcao music" onclick="uhuuu()" data-audiourl="../assets/kb.mp3" ><b style="color: #FA3939;">S</b><b style="color: #E8E8E8;">im</b></a>
        <a class="opcao" onclick="naoooo()"><b style="color: #FA3939;">N</b><b style="color: #E8E8E8;">ão</b></a>
    </div>
    <h1 id="nao">Não programei um "não", tenta de novo hahaha</h1>
</div>

<div class="uhuuu" id="uhuuu">
    <img class="gatitos" id="gatitos" src="../assets/13.jpg">
    <h1 class="oba"><b style="color: #FA3939;">O</b><b style="color: #E8E8E8;">baaaaaa</b></h1>
    <a id="fecha" onclick="fecha()">X</a>
</div>

</body>

<script>
  function chamaCarta() {
    document.getElementById("carta").style.display = "block";
  }

  function naoooo() {
    document.getElementById("nao").style.display = "block";
  }

  function fecha() {
    document.getElementById("uhuuu").style.display = "none";
  }

  function uhuuu() {
    document.getElementById("carta").style.display = "none";
    document.getElementById("uhuuu").style.display = "block";
    document.getElementById("gatitos").style.display = "block";
    sendMail();
  }

</script>

<script>
        var listaAudios = [];

        $(document).ready(function () {


            $('.music').each(function (e) {
                var url = $(this).attr('data-audiourl');
                var audioPlay = new Audio(url);
                audioPlay.preload = "auto";

                var audioData = {
                    'url': $(this).attr('data-audiourl'),
                    'audioPlayObj': audioPlay
                };

                listaAudios.push(audioData);
            });
        });

        $('.music').click(function () {
            var url = $(this).attr('data-audiourl');
            for (var i = 0; i < listaAudios.length; i++) {
                if (listaAudios[i].url == url) {
                    var audio = listaAudios[i].audioPlayObj;                        
                    audio.currentTime = 0;
                    audio.volume = 1;
                    audio.play();
                    break;
                }
            }
        });

        function stopAll() {
            for (var i = 0; i < listaAudios.length; i++) {
                listaAudios[i].audioPlayObj.pause();
            }
        }

    </script>