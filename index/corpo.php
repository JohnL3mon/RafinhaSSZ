<?php

include "base.php";

?>

<?php
    function corpo(){
?>


<script>
  
function chamaCorpo() {
    if (document.getElementById('pag01').checked) {
        document.getElementById('corpo01').style.display = 'block';
         document.getElementById('corpo02').style.display = 'none';
         document.getElementById('corpo03').style.display = 'none';
         document.getElementById('corpo04').style.display = 'none';
         document.getElementById('corpo05').style.display = 'none';
    }
    else if (document.getElementById('pag02').checked){
        document.getElementById('corpo02').style.display = 'flex';
         document.getElementById('corpo01').style.display = 'none';
         document.getElementById('corpo03').style.display = 'none';
         document.getElementById('corpo04').style.display = 'none';
         document.getElementById('corpo05').style.display = 'none';
    }
    else if (document.getElementById('pag03').checked){
        document.getElementById('corpo03').style.display = 'block';
         document.getElementById('corpo02').style.display = 'none';
         document.getElementById('corpo01').style.display = 'none';
         document.getElementById('corpo04').style.display = 'none';
         document.getElementById('corpo05').style.display = 'none';
    }
    else if (document.getElementById('pag04').checked){
        document.getElementById('corpo04').style.display = 'block';
         document.getElementById('corpo02').style.display = 'none';
         document.getElementById('corpo03').style.display = 'none';
         document.getElementById('corpo01').style.display = 'none';
         document.getElementById('corpo05').style.display = 'none';
    }
    else {
        document.getElementById('corpo05').style.display = 'block';
         document.getElementById('corpo02').style.display = 'none';
         document.getElementById('corpo03').style.display = 'none';
         document.getElementById('corpo04').style.display = 'none';
         document.getElementById('corpo01').style.display = 'none';
    }
}
</script>

    <div class="corpo">

        <div class="corpo01" id="corpo01">

            <div class="topoCorpo">
                <h3 class="topoTitulo topoTitulo01">Introdução_</h3>
            </div>
            <br>

            <div class="container">

                <div class="conteudoCorpo">
                    <img class="foto" src="../assets/foto01.png"><br/>
                    <p class="autoDescricao">João Vitor dos Santos Lima, 23 anos, Brasileiro.</p>
                </div>

                <div class="conteudoCorpo">
                    <h3 class="tituloApresentacao">Olá, seja Bem Vindo</h3>
                    <p class="nota">Este é meu portfólio, sinta-se livre para  explorar e saber mais sobre mim!</p>
                </div>

            </div>  

        </div>

        <div class="corpo02" id="corpo02">

            <div class="corpo02A ordemCorpo">

                <div class="topoCorpo">
                    <h3 class="topoTitulo topoTitulo01">Sobre_1.1</h3>
                </div>
                <br>

                <div class="container">
                    <div class="conteudoCorpoB">
                        <p class="tituloPag tituloPag02">Quem sou eu?</p>
                        <p class="nota" style="width:390px !important;">&nbsp;Sou João Vitor, um TI meio variado, já explorei muitos setores e oportunidades, porém minha paixão é e sempre será no Front!<br>
                        &nbsp;Aplico minha criatividade nas páginas em branco, misturar código com design é minha paixão.</p>
                    </div>
                </div>
            </div>

            <div class="corpo02B ordemCorpo">

                <div class="topoCorpo">
                    <h3 class="topoTitulo topoTitulo01">Sobre_1.2</h3>
                </div>
                <br>

                <div class="containerB" style="max-width:350px;">

                    <div class="conteudoCorpoB">
                        <p class="tituloPag tituloPag02" style="padding-top:6px;">&nbsp;&nbsp;Minha Formação</p>
                        <ul class="topicoPag" style="width:450px !important;"> 
                            <li class="topico">Linguagem de programação - Senac Taubaté, 2017;</li>
                            <li class="topico">Inglês Avançado - Pró Línguas, 2015 - 2017;</li>
                            <li class="topico">Análise e Desenvolvimento de Sistemas - Unitau, 2018 - 2022;</li>
                            <li class="topico">Sistema de Informação - Unitau, 2022 - Previsão de término em 2024.</li>
                        </ul>
                    </div>

                    <div class="conteudoCorpoB">
                        <p class="tituloPag tituloPag02" style="-webkit-text-stroke: #25281D 1px; padding-top: 6px;">&nbsp;&nbsp;Conhecimentos</p>
                            <ul class="topicoPag" style="width:450px !important;">
                                <li class="topicoB">Experiência e conhecimento avançado em design e UX, desenhando/produzindo sites e outros produtos de design;</li>
                                <li class="topicoB">Domínio de montagens e soluções em hardware;</li>
                                <li class="topicoB">Um bom inglês para escrita e conversação.</li>
                            </ul>
                    </div>
                </div>
            </div>

        </div>

            <div class="corpo03" id="corpo03">

                <div class="corpo03A ordemCorpo">

                    <div class="topoCorpo">
                        <h3 class="topoTitulo topoTitulo01">Experiência_1.1</h3>
                    </div>
                    <br>

                    <div class="container">
                        <div class="conteudoCorpoB">
                            <p class="tituloPag tituloPag02; color: #866399 !important">Minha Experiência</p>
                            <p class="nota" style="width:390px !important;">&nbsp;Passei pelos mais variados setores e cenários, iniciei a jornada como programador Web Jr, onde fiz trabalhos bem interessantes. Migrei para suporte devido a falta de dinheiro, adquiri muita paciência e resiliência indo para o setor de infra em seguida.<br>
                            &nbsp;Em infra aprendi muito sobre redes e adquiri uma grande noção sobre implementações e análise de projetos, além de um conhecimento básico sobre redes.<br>
                            &nbsp;A saudade por web sempre esteve lá, mesmo fazendo alguns “bicos” em design e programação, sempre me recorria a vontade de voltar a programar, aqui estou eu, louco para viver novamente para área.</p>
                        </div>
                    </div>

                </div>

                <div class="corpo03B ordemCorpo">

                    <div class="topoCorpo">
                        <h3 class="topoTitulo topoTitulo01">Experiência_1.2</h3>
                    </div>
                    <br>

                    <div class="containerB" style="max-width:350px;">

                        <div class="conteudoCorpoB">
                            <p class="tituloPag tituloPag02" style="padding-top:6px; color: #866399 !important">&nbsp;&nbsp;Jornada</p>
                            <ul class="topicoPag" style="width:450px !important;"> 
                                <li class="topico">Dynamotech - 2029/2020 - Programador Jr focado em Web, sendo Java Script CSS e HTML os principais trabalhos;</li>
                                <li class="topico">Mais Nove - 2020 - Suporte em Redes e TI, analista de projetos Jr;</li>
                                <li class="topico">Itevo - 2020/2023 - Suporte em redes e Analista Jr;</li>
                                <li class="topico">Spero Fotos - 2020/2023 Editor de fotos em eventos e designer.</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>


                <div class="corpo05" id="corpo05">

                <div class="topoCorpo">
                    <h3 class="topoTitulo topoTitulo01">Parte5</h3>
                </div>
                <br>

                <div class="container">

                    <div class="conteudoCorpo">
                        <img class="foto" src="../assets/foto01.png"><br/>
                        <p class="autoDescricao">João Vitor dos Santos Lima, 23 anos, Brasileiro.</p>
                    </div>

                    <div class="conteudoCorpo">
                        <h3 class="tituloApresentacao">Olá, seja Bem Vindo</h3>
                        <p class="nota">Este é meu portfólio, sinta-se livre para  explorar e saber mais sobre mim!</p>
                    </div>

                </div>  

                </div>

        </div>
    </div>

<?php
    }
?>