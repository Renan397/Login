<?php 
    
if ($_REQUEST) {
    
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];
    
    // Consulta ao banco de dados
    include_once "../Classes/Usuarios.class.php";
    $usuario = new Usuarios();
    $usuario->__setLogin("$email", "$senha");
    
    $resultSet  = $DBConn->query($usuario->checkUsuariosLogin());
    $checkUser = mysqli_num_rows($resultSet);

    if ($checkUser == 0) {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Este usuário não existe, tente novamente.</div></center>
    ";
    }
    else {
    echo "<center><br><br><div class='alert alert-success' style='width: 50%;' role='alert'>Usuário encontrado com sucesso!</div></center>";    
    };
    //
}
else {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Nenhuma requisição foi feita!</div><center>";
};
?>