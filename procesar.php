<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if ($operacion === '/' && $num2 == 0){
        echo "Error, no se puede dividir entre 0";
    } else{
        $resultado = calcular($num1,$num2,$operacion);
        echo "Resultado: $resultado";
    }
}

function sumar($n1,$n2){
    return $n1+$n2;
}

function restar($n1,$n2){
    return $n1-$n2;
}

function multiplicar($n1,$n2){
    return $n1*$n2;
}

function dividir($n1,$n2){
    return $n1/$n2;
}

function calcular($n1,$n2,$opc){
    switch ($opc){
        case '+':
            return sumar($n1,$n2);
        case '-':
            return restar($n1,$n2);
        case '*':
            return multiplicar($n1,$n2);
        case '/':
            return dividir($n1,$n2);
        default:
            return "Operación no válida";
    }
}
?>