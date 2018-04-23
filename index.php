<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Redações </title>
        <link href="Stilo/folha.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        session_start();
        if(isset($_SESSION['usuario'])){
            header('Location: home.php');
        }
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
                            <a href="#OqueS">O que somos</a>
                        </li>
                        <li>
                            <a href="#FormularioLogin">Login</a>
                        </li>
                        <li>
                            <a href="#FormularioCadastro">Cadastro</a>
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
                    <h1>O que somos</h1>
                    <p>Textos mania surgil com a ideia de possiblitar um espaço para a divulgação de textos. Sejam literarios ou não literarios. O website busca fazer que seus usuários sejam reconhecidos pelos seus trabalhos é que tambem inspire outros a fazerem seus proprios textos!
                        Para ter acesso basta se cadastrar com dados basicos e usufruir do nosso sistemas!<br>
                    </p>
                </section>
                
                <section id="FormularioLogin" class="Caixa">
                    <h1>Login</h1>
                    <form method="post" action="PHP/userbd.php">
                        
                        <section class="GrupoForm">
                            <label>Usuario:</label>
                            <input type="text" name="Usuario" placeholder="SarahAsehere">
                        </section>
                        
                        <section class="GrupoForm">
                            <label>Senha:</label>
                            <input type="password" name="Senha" placeholder="**********">
                        </section>

                        <section class="GrupoForm">
                            <button type="submit" name="EnviarLogar">Logar</button>
                        </section>
                    </form>
                </section>
                
                <section id="FormularioCadastro" class="Caixa" >
                    <h1>Cadastro</h1>
                    <form method="post" action="PHP/userbd.php" enctype="multipart/form-data">
                        
                        <section class="GrupoForm">
                            <label>Nome:</label>
                            <input type="text" name="Nome" placeholder="Sarah Akemi Kondo">
                        </section>
                        
                        <section class="GrupoForm">
                            <label>Usuario:</label>
                            <input type="text" name="Usuario" placeholder="SarahAsehere">
                        </section>
                        
                        <section class="GrupoForm">
                            <label>Email:</label>
                            <input type="email" name="Emaiç" placeholder="sarahakemi@hotmail.com">
                        </section>
                        
                        <section class="GrupoForm">
                            <label>Senha:</label>
                            <input type="password" name="Senha" placeholder="**********">
                        </section>
                        
                        <section class="GrupoForm">
                            <label>Foto de Perfil</label>
                            <input type="file" name="Foto">
                        </section>
                        
                        <section class="GrupoForm">
                            <button type="submit" name="Enviar">Cadastrar</button>
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
