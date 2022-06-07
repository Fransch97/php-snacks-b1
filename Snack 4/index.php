<?php 

function getRandArr($min, $max, $total){
    $arrNumbers = [];
    while(count($arrNumbers )< $total){
        $number = rand($min, $max);
        if(!in_array($number, $arrNumbers)){
            $arrNumbers[] = $number;
        }

    }
    var_dump($arrNumbers);
}
getRandArr(1, 100, 10)
?>
