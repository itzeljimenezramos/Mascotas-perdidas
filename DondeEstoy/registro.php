<?php
include 'conexion.php';

    $nombre = $_POST['nom'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST["contraseña"];
    $contraseña = hash('sha512',$contraseña);

    $sql = "INSERT INTO usuarios(nombre, correo, usuario, contraseña) 
                            VALUES('$nombre','$correo','$usuario','$contraseña')";


    //VERIFICAR QUE EL CORREO NO SE REPITA
    $verificar_correo = mysqli_query(conectar(),"SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) >0 ){
        echo'
        <script>
        alert("Este correo ya esta registrado intenta con otro");
        window.location = "login.php";
        </script>
        ';
        exit();
    }

     //VERIFICAR QUE EL NOMBRE DE USUARIO NO SE REPITA
     $verificar_usuario = mysqli_query(conectar(),"SELECT * FROM usuarios WHERE usuario = '$usuario' ");

     if(mysqli_num_rows($verificar_usuario) >0 ){
         echo'
         <script>
         alert("Este usuario ya esta registrado intenta con otro");
         window.location = "login.php";
         </script>
         ';
         exit();
     }

    $ejecutar = mysqli_query(conectar(),$sql);

    if($ejecutar){
        echo'
        <script>
        alert("Registro Exitoso!!!");
        window.location = "login.php";
        </script>
        ';
    }
?>