<?php
   //Conectarnos con el servidor
$Conectar=@mysql_close('localhost;8080','root','')
//Verificamos la conexion
if (!$conectar) {
	echo"No se pudo conectra con el servidor"
}elso{

	$base=mysql_select_db('prueba');
	if/!$base){
	echo"No se encontro la abse de datos";
}
}
//Recuperar las variables
$nombre=$_POST['nombre']
$correo=$_POST['correo']
$mensaje=$_POST['mensaje']
//Hacemos la sentincia sql
$sql="INSER INTO datos VALUES('$nombre',
                              '$correo',
                              '$mensaje')";
        //ejecutamos la sentencia de sql
        $ejecutar=mysql_query(sql);
        //verificamos la ejecucion
        if(!$ejecutar){
        	echo"hubo algun error";
        }else{
        	echo"Datos guardados correctamente<br><a href='index.html'>Volver</a>";
}
?>