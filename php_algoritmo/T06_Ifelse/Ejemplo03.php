<?php
/*Ejemplo 3: La institucion educativa desea un programa que permita calcular el promedio final de un alumno en determinado curso.
Se deben ingresar los datos

Nombre del alumno
Nombre del curso
4 notas

El sistema debe calcular el promedio y determinar: si el promedio es mayor o igul a 11 mostrar un mensaje de aprobado, si es menor a 10 mostrar un mensaje de reprobado.*/

//Ingresamos los datos del alumno y del curso
$nombreAlumno = readline("Ingresa el nombre del alumno: ");
$nombreCurso = readline("Ingresa el nombre del curso: ");

$nota1= readline("Ingrese la primera nota: ");
$nota2= readline("Ingrese la segunda nota: ");
$nota3= readline("Ingrese la tercera nota: ");
$nota4= readline("Ingrese la cuarta nota: ");


// Calculamos el promedio
$promedio = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

// Mostrar resultados
echo "\n==========RESULTADO FINAL==========\n";
echo "Alumno: " . $nombreAlumno . "\n";
echo "Curso: ". $nombreCurso ."\n";
echo "Promedio final: " . number_format($promedio, 2) . "\n";

// Determinar si el alumno aprobó o reprobó
if ($promedio >= 11) {
    echo "Estado: Aprobado\n";
} else {
    echo "Estado: Reprobado\n";
}
?>