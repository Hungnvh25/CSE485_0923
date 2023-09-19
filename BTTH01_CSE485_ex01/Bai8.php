<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $minn = 999;
    $maxx = 0;
    $a = $b = '';
    foreach($array as $i)
    {
        if(strlen($i)>$maxx){
            $maxx = strlen($i);
            $a = $i;
        }

        if(strlen($i)<$minn){
            $minn = strlen($i);
            $b = $i;
        }

    }

    echo 'Chuỗi lớn nhất là '.$a.' is PHP , độ dài = '. $maxx.'<br>';
    echo 'Chuỗi lớn nhất là '.$b.', độ dài = '. $minn;
    
?>