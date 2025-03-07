<?php
///array indexado
$frutas = array("Manzana", "Banano", "Fresa");
array_push($frutas,"Peras");
echo $frutas[3] . PHP_EOL;

$posicion = array_search("Fresa", $frutas);
echo $posicion . PHP_EOL;

//array asociativo
$edades = array("Juan" => 25, "Ana" => 22, "Pedro" => 30);
echo $edades['Pedro'] . PHP_EOL;

//arreglo multidimensional
$personas = array(
    array("Nombre" => "Juan", "Edad" => 25),
    array("Nombre" => "Ana", "Edad" => 22)
);

echo $personas[1]["Nombre"] . PHP_EOL;

//fusion de arreglos
$arreglo1 = array("Rojo", "Verde");
$arreglo2 = array("Azul", "Amarillo");
$arregloFusionado = array_merge($arreglo1, $arreglo2);
print_r($arregloFusionado);

//function simple
function saludar($nombre){
    return "Hola ". $nombre;
}
echo saludar("Marlon") . PHP_EOL;

//funcion anonima
$suma = function ($a,$b){
    return $a + $b;
};

echo $suma(5,10). PHP_EOL;

//funcion de flecha 
$duplicar = fn($n) => $n * 2;
echo $duplicar(10) . PHP_EOL;

//function integrada
$texto = "Hola Mundo";
echo strlen($texto);

//crear y escribir en un archivo
$archivo = fopen("ejemplo.txt",mode: "w") or die("no se puede abrir el archivo");
$txt = "Hola Mundo! \n";
fwrite($archivo,$txt);
$txt = "PHP Es genial!";
fwrite($archivo,$txt);
fclose($archivo);

//leer un archivo
try {
    $archivoPorLeer = fopen("ejemplo.txt","r") or die("No se puede abrir el archivo");
    while(!feof($archivoPorLeer)){
        echo fgets($archivoPorLeer);
    }
    fclose($archivoPorLeer);
}catch(Exception $e){
    echo "Error: " . $e -> getMessage();
}
?>