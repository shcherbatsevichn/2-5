<?php error_reporting(-1);
//В массиве А(N) найти максимальный и минимальный элементы и  переставить их местами.      
$A = [1, 7, 4, 9, 8, 23, 17, -6, 7];

echo("Условие:<br>");
print_r($A);

$counter = 0;
$max = search_max_min($A);
$min = search_max_min($A, -1);
for($n = 0; $n < count($A); $n++){ // выполняем перестановку элемента
    if($n == $max[1]){
        $A[$n] = $min[0];
    }elseif($n == $min[1]){
        $A[$n] = $max[0];
    }
}

echo("<br>Результат: <br>");
print_r($A);

function search_max_min($array, $searchsettings = 1){ //Функция нахождения максимума. возвращает массив, где первый элемен - значение максимума, второй - его позиция
    $result  = $array[0];
    $resultpos = 0;
    for($n = 0; $n < count($array); $n++){
        if($searchsettings > 0){
            if($array[$n] > $result){
                $result = $array[$n];
                $resultpos = $n;
            } 
        }else{
            if($array[$n] < $result){
                $result = $array[$n];
                $resultpos = $n;
            } 
        }
        
    }  
    return array($result, $resultpos);
}
