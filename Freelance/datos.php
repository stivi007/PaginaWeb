<?php 
//conectar con el servidor

$conectar=@mysql_connect('localhost','root','');


//verificamos la conexion

if(!$conectar){
    echo "NO se puede conectar con el servidor";
}
else{

    $base=mysql_select_db('datos');
    if(!$base){
       echo "no se encontro la Base de Datos";
    }

    //recuperar las variables
    $Nombre=$_POST['nombre'];
    $Correo=$_POST['correo'];
    $Mensaje=$_POST['mensaje'];
    //hacemos la sentencia sql
    $sql="INSERT INTO datos VALUES('$Nombre','$Correo','$Mensaje')";
    //ejecutamos la sentencia de sql
    $ejecutar=mysql_query($sql);
    //verificamos la ejecucion
    if(!$ejecutar){
        echo"Hubo Algun Error";
    }
    else{
        echo "Mensaje Enviado Correctamente <br> <a href='Contact.html'>Volver</a>";
    }
}
 ?>