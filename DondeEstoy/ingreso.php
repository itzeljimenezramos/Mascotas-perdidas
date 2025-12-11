<?php
    session_start();
    include 'conexion.php';
    $correo = $_POST['corre'];
    $contraseña = $_POST['contra'];
    $contraseña = hash('sha512',$contraseña);

    $validar_login = mysqli_query(conectar(),"SELECT * FROM usuarios WHERE correo = '$correo' and contraseña = '$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: index.php");
        exit();
    }else{
        echo'
        <script>
            alert("Usuario o contraseña incorrectos");
            window.location = "login.php";
        </script>
        ';
        exit();
    }

?>