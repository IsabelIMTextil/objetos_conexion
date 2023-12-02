
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

//listado
echo "<h3>Orador 1</h3>";
$maria = new Orador();

echo "<pre>";
var_dump(($maria->nombre = "María del Carmen"));
echo "</pre>";

echo "<pre>";
var_dump(($maria->apellido = "Toribio"));
echo "</pre>";

echo "<pre>";
var_dump(($maria->correo = "mct@gmail.com"));
echo "</pre>";

echo "<pre>";
var_dump(($maria->tema = "De Ing. Juárez, Formosa. Charla sobre el Arte Textil Ancestral con la fibra del chaguar y difusión de su cultura."));
echo "</pre>";

// $jesus->telefono = "123456"; NO FUNCIONA XQ ES PRIVATE

echo $maria->nombre;
echo "<br>";
echo $maria->apellido;
echo "<br>";
echo $maria->correo;
echo "<br>";
echo $maria->tema;
echo "<br>";
$maria->setTelefono("$valorTelUsuario");
echo $maria->getTelefono();

echo "<h3>Orador 2</h3>";
$ermelinda = new Orador();

echo "<pre>";
var_dump(($ermelinda->nombre = "Ermelinda"));
echo "</pre>";

echo "<pre>";
var_dump(($ermelinda->apellido = "Painequeo"));
echo "</pre>";

echo "<pre>";
var_dump(($ermelinda->correo = "erpaine@gmail.com"));
echo "</pre>";

echo "<pre>";
var_dump(($ermelinda->tema = "De Trelew, Chubut. Charla sobre la cultura la cosmovisión y el tejido Mapuche."));
echo "</pre>";

// $jesus->telefono = "123456"; NO FUNCIONA XQ ES PRIVATE

echo $ermelinda->nombre;
echo "<br>";
echo $ermelinda->apellido;
echo "<br>";
echo $ermelinda->correo;
echo "<br>";
echo $ermelinda->tema;
echo "<br>";
$ermelinda->setTelefono("$valorTelUsuario");
echo $ermelinda->getTelefono();

echo "<h3>Orador 3</h3>";
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

echo $jesus->nombre;
echo "<br>";
echo $jesus->apellido;
echo "<br>";
echo $jesus->correo;
echo "<br>";
echo $jesus->tema;
echo "<br>";
$jesus->setTelefono("$valorTelUsuario");
echo $jesus->getTelefono();

echo "<h3>Orador 4</h3>";
$mario = new Orador();

echo "<pre>";
var_dump(($mario->nombre = "Mario"));
echo "</pre>";

echo "<pre>";
var_dump(($mario->apellido = "Vucetich"));
echo "</pre>";

echo "<pre>";
var_dump(($mario->correo = "mariov@gmail.com"));
echo "</pre>";

echo "<pre>";
var_dump(($mario->tema = "De Buenos Aires. El tejido urbano, técnica en telar de cuadros."));
echo "</pre>";

// $jesus->telefono = "123456"; NO FUNCIONA XQ ES PRIVATE

echo $mario->nombre;
echo "<br>";
echo $mario->apellido;
echo "<br>";
echo $mario->correo;
echo "<br>";
echo $mario->tema;
echo "<br>";
$mario->setTelefono("$valorTelUsuario");
echo $mario->getTelefono();



echo "<h3>Orador 5</h3>";
$jorge = new Orador();

echo "<pre>";
var_dump(($jorge->nombre = "Jorge"));
echo "</pre>";

echo "<pre>";
var_dump(($jorge->apellido = "Marí"));
echo "</pre>";

echo "<pre>";
var_dump(($jorge->correo = "jmari@gmail.com"));
echo "</pre>";

echo "<pre>";
var_dump(($jorge->tema = "De Buenos Aires. Charla sobre textiles de uso tradicional en Iberoamérica: el poncho mapuche."));
echo "</pre>";


echo $jorge->nombre;
echo "<br>";
echo $jorge->apellido;
echo "<br>";
echo $jorge->correo;
echo "<br>";
echo $jorge->tema;
echo "<br>";
$jorge->setTelefono("$valorTelUsuario");
echo $jorge->getTelefono();

?>

