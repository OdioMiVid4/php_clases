<?php
/*Ejemplo 04: Pago total de empleados en un año
Enunciado: La empresa necesita saber el monto total que debe pagar a sus dos empleados después de
haber trabajado todo el año.
*El empleado A gana 2500 por mes.
*El empleado B gana 3000 por mes.
*«Cada empleado recibe un beneficio extra en julio y diciembre de 350.
Se pide determinar:
1.¿Cuánto se le debe pagar al empleado A en el año?
2.¿Cuánto se le debe pagar al empleado B en el año?
3.¿Cuánto en total ha pagado la empresa? */

// Datos base 
$empleadoA_sueldo = 2500;
$empleadoB_sueldo = 3000;
$bono = 350; // bono recibido en julio y diciembre 
$meses = 12;

// Cálculo del pago anual para cada empleado 
$empleadoA_total = ($empleadoA_sueldo * $meses) + ($bono * 2);
$empleadoB_total = ($empleadoB_sueldo * $meses) + ($bono * 2);

// Cálculo del total pagado por la empresa 
$total_empresa = $empleadoA_total + $empleadoB_total;

// Determinar quién ganó más y la diferencia 
if ($empleadoA_total > $empleadoB_total) {
    $mayor = "Empleado A";
    $diferencia = $empleadoA_total - $empleadoB_total;
} elseif ($empleadoB_total > $empleadoA_total) {
    $mayor = "Empleado B";
    $diferencia = $empleadoB_total - $empleadoA_total;
} else {
    $mayor = "Ambos ganaron lo mismo";
    $diferencia = 0;

}


// Mostrar resultados 
echo "<h3>Reporte Anual de Pagos</h3>";
echo "Empleado A - Sueldo mensual: S/ $empleadoA_sueldo <br>";
echo "Empleado B - Sueldo mensual: S/ $empleadoB_sueldo <br>";
echo "Bono semestral: S/ $bono (Julio y Diciembre)<br><br>";

echo "Total anual del Empleado A: <strong>S/ $empleadoA_total</strong><br>";
echo "Total anual del Empleado B: <strong>S/ $empleadoB_total</strong><br><br>";

echo "Monto total pagado por la empresa: <strong>S/ $total_empresa</strong><br><br>";
echo "Empleado con mayor ingreso: <strong>$mayor</strong><br>";
echo "Diferencia de ingresos: <strong>S/ $diferencia</strong>";

?>