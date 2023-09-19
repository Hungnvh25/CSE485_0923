<?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

    $summ =  $arrs[0];
    $Hieu = $arrs[0];
    $tich = $arrs[0];
    $thuong = $arrs[0];


    for($i =1;$i<=8;$i++)
    {
        $summ+=$arrs[$i];
        $Hieu-=$arrs[$i];
        $tich*=$arrs[$i];
        $thuong/=$arrs[$i];
    }
   


   echo 'Tổng các phần tử      ='.implode(' + ', $arrs).' = '.$summ.'<br>';
   echo 'Tích các phần tử      ='.implode(' - ', $arrs).' = '.$Hieu.'<br>';
   echo 'Hiệu các phần tử      ='.implode(' * ', $arrs).' = '.$tich.'<br>';
   echo 'Thương các phần tử    ='.implode(' / ', $arrs).' = '.$thuong.'<br>';
   
    
?>