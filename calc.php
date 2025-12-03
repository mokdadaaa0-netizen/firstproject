<?php

    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $op=$_POST['operator'];

    switch ($op){

        case '+':
            $result=$num1+$num2;

            break;
        case  '-':
            $result=$num1-$num2;
            break;

        case '*':
            $result=$num1*$num2;
            break;
        case '/':
            $result=$num1/$num2;
            
    }
    echo $result;

?>