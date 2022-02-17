<?php
include 'conexao.php';
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT id_user,email,senha FROM user WHERE email = '$email' AND senha = '$senha'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $email_row = $row['email'];
        $senha_email_row = $row['senha'];
        $id_row = $row['id_user'];
    }
}
if($email == $email_row and $senha == $senha_email_row){
    session_start();
    $_SESSION['id_user'] = $id_row;
    $_SESSION['email'] = $email_row;
    $_SESSION['senha'] = $senha_email_row;        
    header('location: index.php');
}else {            
    header('location:login.php');
}