<?php 
    $mass = [-1,-5,3,6,45,-3,54,6,7,-6,7,8,-4,5,6,7,8,16];
    $x = 7;
    $k = 3;
    echo 'Исходные данные: '.json_encode($mass).
        '<br>X = '.$x.
        '<br>K = '.$k;

    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] == $x && $k != 0){
            $k--;
        }
    }
    if ($k == 0){
        $answer = 'Да';
    }else {
        $answer = 'Число Х = '.$x.' встречается меньше К раз или отсутствует вообще.';
    }

    echo '<br> Ответ: '.$answer;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>