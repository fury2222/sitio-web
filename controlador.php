<?php
if (!empty($_POST["registrar"])) {
    if(empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["usuario"]) or empty($_POST["contraseña"])) {
        echo "uno de los campos esta vacio";
    } else {
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $Usuario=$_POST["usuario"];
        $password=$_POST["Contraseña"];
        $conectar= new mysqli('localhost', 'root', '', 'practica');
        $sql=$conectar->query("insert into registrar (nombre,correo_electronico,usuario,Contraseña) values('$nombre','$correo','$Usuario','$password',) ");
        if ($sql==1) {
           echo '<div class="a">usuario registrado correctamente</div>';
        }
        else{
           echo '<div class="b">usuario no registrado correctamente</div>';
        }
        
    }
}  
?>