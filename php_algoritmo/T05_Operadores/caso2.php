<?php
/*Pago total de empleado de un año 
Enunciado: La empresa necesita saber el monto total que debe pagar a sus dos empleado despues de trabajar en todo el año
El empleado A gana 2500 por mes el empleado B 3000 por mes. Cada empleado recibe un beneficio extra en Julio y Diciembre de 350. 
Se pide determinar: 1 ¿Cuanto se le debe pagar al empleado A en todo en el año?
¿Cuanto se le debe pagar al empleado  B en todo el año? ¿Cuanto en total a pagado la empresa en todo el año?  */

$EmpleadoA_mensual = 2500;
$EmpleadoB_mensual = 3000;
$extra = 350;
$meses = 12;

$EmpleadoA_anual = ($EmpleadoA_mensual * $meses) + ($extra * 2);
$EmpleadoB_anual = ($EmpleadoB_mensual * $meses) + ($extra * 2);

$total_empresa = $EmpleadoA_anual + $EmpleadoB_anual;
echo "El pago total del empleado A en el año es: S/". number_format($EmpleadoA_anual)."\n";
echo "El pago total del empleado B en el año es: S/". number_format($EmpleadoB_anual)."\n";
echo"El pago total que ha realizado la empresa en el año es: S/". number_format($total_empresa)."\n";
?>