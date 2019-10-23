<?php
  //conectamos con el servidor
  $conectar=mysql_connect('databases.000webhost.com', 'acaelusuario', 'acalacontrasena')
  //verificamos la MongoWriteConcernException
  if (!$conectar) {
    echo "No se conecto te he faladoooo ";
  }else{
    $base=mysql_select_db('');
    if (!$base) {
      echo "No se encontro la base de datos";
    }
  }
  //recuperar las variables
  $nombre=$_POST['nombre'];
  $edad=$_POST['edad'];
  $correo=$_POST['correo'];
  //hacemos la sentencia sql
  $sql="INSERT INTO datos VALUES ('$nombre', '$edad', '$correo')";
  //ejecutamos la sentencia sql
  $ejecutar=mysql_query($sql);
  //verificamos la ejecuciónote
  if (!$ejecutar) {
    echo "Hubo un error que mal";
  }else{
    echo "Datos Guardados Correctamente<br><a href ='index.html'>Volver</a>";
  }


 ?>
