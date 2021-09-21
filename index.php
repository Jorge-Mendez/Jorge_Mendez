<?php
echo "Mi primera encuesta en php <br>";
echo "Jorge Mendez <br/>";
echo "Digite los datos requeridos";
?>
<html>
<head>
</head>
<body>
<?php
echo "Gracias!";
?>
<form action="first.php" method= "post">
<p>Nombre: <input type="text" name="Name" /></p>
<p>Edad: <input type= "text" name= "Age" /></p>
<p>Número de ficha: <input type= "text" name= "Númerod e ficha" /></p>
<p><input type= "submit" name="submit" value= "Submit"
/></p>
</form>
