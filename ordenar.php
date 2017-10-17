<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Valores
//# Ordenar
//# Resultado
//## Ascendente
//## Descendente
//# *********************************************************************


//# Valores
//# ---------------------------------------------------------------------
//Obtener el valor introducido en los campos Palabra.
$pal0 = $_POST['pal0']; //name="pal0"
$pal1 = $_POST['pal1']; //name="pal1"
$pal2 = $_POST['pal2']; //name="pal2"
$pal3 = $_POST['pal3']; //name="pal3"
$pal4 = $_POST['pal4']; //name="pal4"
$pal5 = $_POST['pal5']; //name="pal5"
$pal6 = $_POST['pal6']; //name="pal6"
$pal7 = $_POST['pal7']; //name="pal7"

//Array con las palabras obtenidas.
$array = array(
  $pal0, $pal1, $pal2, $pal3, $pal4, $pal5, $pal6, $pal7
);

//Pasamos todos los caracteres a minúsculas.
$palabras = array_map('strtolower', $array);

//# Resultado
//# ---------------------------------------------------------------------
//## Ascendente
//# ---------------------------------------------------------------------
echo "<h1>Ascendente</h1>";
sort($palabras);

echo "<h2>print_r()</h2>";
print_r($palabras);

echo "<h2>var_export()</h2>";
var_export($palabras);

echo "<h2>foreach ()</h2>";
foreach ($palabras as $valor) {
  echo $valor . ", ";
}

//## Descendente
//# ---------------------------------------------------------------------
echo "<hr>";
echo "<h1>Descendente</h1>";
rsort($palabras);

echo "<h2>print_r()</h2>";
print_r($palabras);

echo "<h2>var_export()</h2>";
var_export($palabras);

echo "<h2>foreach ()</h2>";
foreach ($palabras as $valor) {
    echo $valor . ", ";
}
?>
