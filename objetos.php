
<!-- archivo con datos para ejercicio "objetos" -->
<?php

// funciones dentro de una clase = métodos 

class Orador {

public $nombre;
public $apellido;
public $correo;
private $telefono;
public $tema;


// metodos get + set
public function getTelefono(){
    return $this->telefono;
 }

 public function setTelefono($telefono){
    $this->telefono = $telefono;
    }
}

$valorTelUsuario = $_POST["telefono"];

$jesus = new Orador();

echo "<pre>";
var_dump(($jesus->nombre = "Jesús"));
echo "</pre>";

echo "<pre>";
var_dump(($jesus->apellido = "Casimiro"));
echo "</pre>";

echo "<pre>";
var_dump(($jesus->correo = "jesus@gmail.com"));
echo "</pre>";

echo "<pre>";
var_dump(($jesus->tema = "De Luracatao, Salta. Charla sobre el Arte Textil de los Valles Calchaquíes y la cultura Diaguita."));
echo "</pre>";



// $jesus->telefono = "123456"; NO FUNCIONA XQ ES PRIVATE

// echo $jesus->nombre;
// echo $jesus->apellido;
// echo $jesus->correo;
// echo $jesus->tema;
// $jesus->setTelefono("$valorTelUsuario");
// echo $jesus->getTelefono();


?>

