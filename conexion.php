<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

// funcines exclusivas para conexion en php (funciones, POO)

//funcion que recibe 4 parámetros
//1. localhost = donde está alojada la db (fácil si trabajo en casa)
//2. usuario para conectarme a una db, en Xampp por defecto "root"
//3. contraseña: "" (por defecto vacía)
//4. nombre db (oradores textiles)


//funcion para guardar como una variable

$conexion = mysqli_connect("localhost","root","","Oradores_textiles");

// echo "probando conexión a db php";

if(mysqli_connect_errno()){
 echo "no se conectó por un error: " . mysqli_connect_errno();
}else{
    echo "se conectó de forma correcta";
 }


$consulta = mysqli_query($conexion,"SELECT * FROM Oradores ");

// echo "<pre>";
// var_dump(($consulta));
// echo "</pre>";

//funcion para probar una
//$listado = mysqli_fetch_assoc($consulta);


// echo "<pre>";
// var_dump($listado);
// echo "</pre>";

// echo "<br>";
// echo $listado["id_orador"];
// echo $listado["nombre"];
// echo $listado["apellido"];
// echo $listado["mail"];
// echo $listado["telefono"];
// echo $listado["tema"];


//para mostrar el array -> funcion
$listadoArray = mysqli_fetch_array($consulta);

echo "<pre>";
var_dump($listadoArray);
echo "</pre>";

while($row = $result->fetch_assoc()){
   $listado[] = $row;
}
foreach($listado as $nombre => $value){
    echo $nombre."<br>";
}


// while($row = $result->fetch_object()){
//     $listado[] = $row;
// }
// foreach($listado as $valor){
//     echo $valor["nombre"];
// }



?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Tema</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
