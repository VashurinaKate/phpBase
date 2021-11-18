<?php

// Task 1

$a = -10;
$b = 15;

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    echo $a + $b;
} else echo "Некорректное значение";
?>

<?php

// Task 2

$a = rand(0, 15);

switch($a) {
    case 0: echo "0 ";
    case 1: echo "1 ";
    case 2: echo " 2";
    case 3: echo " 3";
    case 4: echo " 4";
    case 5: echo " 5";
    case 6: echo " 6";
    case 7: echo " 7";
    case 8: echo " 8";
    case 9: echo " 9";
    case 10: echo " 10";
    case 11: echo " 11";
    case 12: echo " 12";
    case 13: echo " 13";
    case 14: echo " 14";
    case 15: echo " 15";
        break;
    default: echo "Ошибка";
        break;
}
?>

<?php

// Task 3

function add($a, $b) {
    return $a + $b;
};
function subtract($a, $b) {
    return $a - $b;
};
function multiply($a, $b) {
    return $a * $b;
};
function divide($a, $b) {
    return $a / $b;
};

$sum = add(10, 2);
$sub = subtract(5, 2);
$mul = multiply(2, 5);
$div = divide(1, 3);

echo " Сложение: $sum";
echo " Вычитание: $sub";
echo " Умножение: $mul";
echo " Деление: $div";

// Task 4

function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {
        case "+": return add($arg1, $arg2);
            break;
        case "-": return subtract($arg1, $arg2);
            break;
        case "*": return multiply($arg1, $arg2);
            break;
        case "/": return divide($arg1, $arg2);
            break;
        default: return "Некорректные значения";
            break;
    };
};

echo mathOperation(10, 3, "+");
echo mathOperation(10, 3, "-");
echo mathOperation(10, 3, "*");
echo mathOperation(10, 3, "/");
echo mathOperation(10, 3, "сложить");

?>
<?php

// Task 6
function power($val, $pow) {
    if ($pow != 1 && $pow != 0) {
        return $val * power($val, $pow - 1);
    } elseif ($pow == 0) {
        return 1;
    } elseif ($pow == 1) {
        return $val;
    } else return;
};
$res = power(2, 1);
echo " Результат: $res";
?>
