<!DOCTYPE html>
<html lang="es">
<head>
	<title>Producto</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="comun/css/estilos.css" />
	
</head>
<body>
<?php  
//Crear variables:
$promedio = 95;
$pago =3000;

echo "<h2>Ejemplos</h2>"

if ($promedio >=95){
	$pago = $pago * 0.60;
	echo "El alumno tiene 40% de BECA";
	echo "debe pagar ";
	echo $pago;
} else{
	echo "no recibe BECA por promedio inferior al límite";
}
	
	
while ($promedio < 100) {
		$promedio++;
		echo "</br>";
		echo "ahora promedio vale ";
		echo $promedio;

	}


$promedio=95;
do{
    $promedio++;
    echo "</br>";
    echo "con do-while promedio vale ";
    echo $promedio;
	} while(promedio < 100);
		
	

//Ejemplo del ciclo FOR
	$promedio=95;
	for ($i=$promedio; $i <= 100; $i++){
		echo "</br>";
		echo "con for promedio = ";
		echo $i;
	}
	

 ?>
}
}
</body>
</html>