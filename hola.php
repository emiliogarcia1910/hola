<?php echo "hola mundo"; //lo basico   
$nombre = 'Manolo'; // Texto. Puede ser con comillas simples o dobles (String)
$edad = 31; // Enteros (Integer)
$altura = 1.72; // Decimales, usando el punto en lugar de la coma (float)
$mayorEdad = true; // Verdad o falso (boolean)

//$nombreCompleto = "Juan Pérez" // Falta cerrar con ;
$Edad = 25;  //Está bien
$estAtura = 1.75;  //Cambiaria el nombre de la variable por estatura o Estatura
$numero = "10";  //Está mal puesto, lo detecta como String en vez de entero (cambias " por ')
// Apellido = 'Fernández'; //Falta el $ 
// pais_de_origen= "Uruguay" //Falta cerrar con ; y no hay espacio en el "="
// $salario = $2000; // El $ está mal puesto, ya que solo debes colocar solamente el numero en la variable

const GRAVEDAD = 9.8; //son espacios en memoria que no cambien en el codigo

const PI= 3.1416;
const PI= 3.14;

// Error que arrojó: Warning: Constant PI already defined in C:\xampp\htdocs\hola\hola.php on line 18
//Que no se puede cambiar el valor de una constante
//En situaciones donde no se deba cambiar los valores y dejarlo fijo para evitar errores por ejemplo

//http://localhost/hola/hola.php




$emisora = 'Radio Disney'; //una sola comilla detecta como String ignorando si es una variable y pasandola todo directamente
echo "Me gusta escuchar $emisora";

$nombre = "Bruno";
$saludo= "Hola";
echo $nombre . $saludo


?>








