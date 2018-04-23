<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enviar Texto</title>
        <link href="Stilo/folha.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        ?>
        <header id="IndexMenu">
            <section class="containe">
                <a class="Logo" href="index.php">
                    Textos Mania
                </a>
                <div id="MenuIndex">
                    <ol>
                        <li>
                            <a href="index.php">Pagina Inicial</a>
                        </li>
                        <li>
                            <a href="EnviarTexto.php">Postar</a>
                        </li>
                        <li>
                            <a href="Sair.php">Sair</a>
                        </li>
                    </ol>
                </div>
            </section>
        </header>
        <section id="banner">
                
        </section>
        <main>
            <section class="containe">
                <section id="OqueS">
                    <h1>Enviar Textos</h1>
                        <p>Logo abaixo você encontrara um formulario para enviar textos,Preencha o formulario rapidamente e Aproveite!!!
                    </p>
                </section>
                
                <section id="FormularioLogin" class="Caixa">
                    <h1>Formulario</h1>
                    <form method="post">
                        
                        <section class="GrupoForm">
                            <label>Titulo do texto:</label>
                            <input type="text" name="TituloDoTexto" placeholder="Titulo....">
                        </section>
                        
                        <section class="GrupoForm">
                            <label>Texto:</label>
                            <textarea rows="10" placeholder="Escreva Aqui!!!" style="width: 100%" name="Texto"></textarea>
                        </section>

                        <section class="GrupoForm">
                            <button type="submit" name="EnviarTexto">Postar</button>
                        </section>
                    </form>
                </section>
                
            </section>
        </main>
        <footer>
            O Textos Mania foi desenvolvido pelos alunos: 
            Sarah Akemi Kondo, Igor Pacífico, João Marcos e Matheus Nogueira<br>
            Com o objetivo de testar o sistema de controle de versão GIT.
        </footer>
    </body>
</html>
