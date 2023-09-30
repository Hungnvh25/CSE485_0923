<?php
    $a = [
        'a' => [
                'b' => 0,
                'c' => 1
                ],
        'b' => [
                'e' => 2,
                'o' => [
                        'b' => 3
                        ]
                ]
       ];

    echo 'giá trị = 3 mà có key là b '. $a['b']['o']['b'] ."<br>";
    echo 'giá trị = 1 mà có key là c '.$a['a']['c'] ."<br>";
    var_dump($a['a']);

?>