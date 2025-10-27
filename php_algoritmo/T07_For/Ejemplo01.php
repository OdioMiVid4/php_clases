<!--
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Ejemplo 1: Iteracion $i \n"."<br>"; //Muestra Iteracion 1 y Iteracion (2,3,4,5)
}
?>

<?php
//Ejemplo 2: Imprimir lo numeros del 1 al 10 
for ($i = 1; $i <= 10; $i++) {
    echo "Numero: " . $i ."\n"."<br>";
}
?>


<?php
$frutas = array("Manzana","Banana","Cereza", "Durazno","Uva") ;

for ($i = 0; $i < count($frutas); $i++) {
    echo "Frutas: ". ($i + 1) . ": " . $frutas[$i] ."\n"."<br>";
}
?>
-->
<?php
//Crear un arreglo para imprimir los meses del año: Utiliza el for para el recorrido. Ademas captura el mes equivalente a tu cumpleaños

$meses = array("Enero","Febrero", "Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre") ;

for ($i = 0; $i < count($meses); $i++) {
    echo "Mi cumpleaños es en: $meses[0]";
}
?>
