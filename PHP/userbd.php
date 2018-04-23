<?php
session_start();
if(isset($_REQUEST['Enviar'])){
    $nome1 = $_REQUEST['Nome'];
    $email1 = $_REQUEST['Emaiç'];
    $usuario1 = $_REQUEST['Usuario'];
    $senha1 = $_REQUEST['Senha'];
    $foto1 = $_FILES['Foto'];
    $senhaCriptografada1 = md5($senha1);
    
    //Codigo de Upload
    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto1["name"], $ext);
    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
    $caminho_imagem = "../imgs/fotoperfil/". $nome_imagem;
    move_uploaded_file($foto1["tmp_name"], $caminho_imagem);
    $sql = "insert into `usuario` (`ID`, `Email`, `Senha`, `Foto`, `Usuario`, `Nome`) values (null, '$email1','$senhaCriptografada1', '$nome_imagem', '$usuario1', '$nome1');";
    include_once './conexao.php';
    mysqli_query($conexao, $sql);
    header('Location: ../index.php');
}

if(isset($_REQUEST['EnviarLogar'])){
    $usuario = $_POST['Usuario'];
    $senha = $_POST['Senha'];
    $senhaCriptografada = md5($senha);

    $sql = "select * from `usuario` where `Usuario`  = '$usuario' AND `senha` = '$senhaCriptografada';";
    include_once './conexao.php';
    $result = mysqli_query($conexao, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
       $usuario = mysqli_fetch_row($result);
       $_SESSION['usuario'] = $usuario[0];
       header('Location: ../index.php');
    }
}
