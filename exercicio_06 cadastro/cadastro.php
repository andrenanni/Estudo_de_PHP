<?php
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect("localhost", "root", "", "login");
$query_select = "SELECT login FROM usuarios WHERE login = '$login";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

if ($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
}
else{
    if($logarray == $login){
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');windows.location.href='cadastro.html';</script>";
        die();
    }
    else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login, '$senha')";
        $insert = mysqli_query($connect, $query);

        if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário cadastro com sucesso!');window.location.href='login.html'</script>";
        }
        else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possivel cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
    }
}
?>