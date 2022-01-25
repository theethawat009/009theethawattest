<?php
    $salary = 10000;
    echo "เงินเดือน".$salary."บาท<br>";
        echo "---------------------------------<br>";
    if($salary<=10000){
        $bonus = $salary*3;
        $money = $salary+$bonus;
        
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินเดือนสุทธิ = ".$money."บาท<br>";
        
        echo "---------------------------------<br>";
    }if($salary<=50000){
        echo "เงินเดือน".$salary."บาท<br>";
        $bonus = $salary*2;
        $money = $money+$bonus;
       
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
        
        echo "---------------------------------<br>";
    }if($salary<=100000){
        echo "เงินเดือน".$salary."บาท<br>";
        $bonus = $salary*1;
        $money = $money+$bonus;
       
        echo "ได้รับโบนัส = ".$bonus."บาท<br>";
        echo "ได้รับเงินสุทธิ = ".$money."บาท<br>";
      
        echo "---------------------------------<br>";
    }
    ?>