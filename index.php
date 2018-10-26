<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>
<h2>Doc so thanh chu</h2>
<form method="post">
    <input type="text" name="number" placeholder="Enter a number"/>
    <input type = "submit"  value = "Convert"/>
</form>
<?php
function Ones($string, $index){
    switch ($string[$index]) {
        case 0:
            echo 'zero';
            break;
        case 1:
            echo 'one';
            break;
        case 2:
            echo 'two';
            break;
        case 3:
            echo 'three';
            break;
        case 4:
            echo 'four';
            break;
        case 5:
            echo 'five';
            break;
        case 6:
            echo 'six';
            break;
        case 7:
            echo 'seven';
            break;
        case 8:
            echo 'eight';
            break;
        case 9:
            echo 'nine';
            break;
    }
}
function Smaller_20($string, $index){
    switch ($string[$index]){
        case 0:
            echo 'ten';
            break;
        case 1:
            echo 'eleven';
            break;
        case 2:
            echo 'twelve';
            break;
        case 3:
            echo 'thirteen';
            break;
        case 4:
            echo 'fourteen';
            break;
        case 5:
            echo 'fifteen';
            break;
        case 6:
            echo 'sixteen';
            break;
        case 7:
            echo 'seventeen';
            break;
        case 8:
            echo 'eighteen';
            break;
        case 9:
            echo 'nineteen';
            break;
    }
}
function Round_Ten_Number($string, $index){
    switch ($string[$index]){
        case 2:
            echo 'twenty ';
            break;
        case 3:
            echo 'thirty ';
            break;
        case 4:
            echo 'forty ';
            break;
        case 5:
            echo 'fifty ';
            break;
        case 6:
            echo 'sixty ';
            break;
        case 7:
            echo 'seventy ';
            break;
        case 8:
            echo 'eighty ';
            break;
        case 9:
            echo 'ninety ';
            break;
    }
}
function Two_digit($string, $indexTens, $indexOnes){
    Round_Ten_Number($string, $indexTens) . Ones($string, $indexOnes);
}
function Hundreds($string, $index){
    switch ($string[$index]) {
        case 1:
            echo 'one hundred ';
            break;
        case 2:
            echo 'two hundred ';
            break;
        case 3:
            echo 'three hundred ';
            break;
        case 4:
            echo 'four hundred ';
            break;
        case 5:
            echo 'five hundred ';
            break;
        case 6:
            echo 'six hundred ';
            break;
        case 7:
            echo 'seven hundred ';
            break;
        case 8:
            echo 'eight hundred ';
            break;
        case 9:
            echo 'nine hundred ';
            break;
    }
}
function Two_number($string,$index){
    if ($string[$index] == 1){
        Smaller_20($string,++$index);
    }
    else if ($string[$index+1] == 0){
        Round_Ten_Number($string, $index);
    }
    else{
        Two_digit($string, $index, ++$index);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    if (strlen($number) == 1){
        Ones($number, 0 );
    }
    if (strlen($number) == 2){
        Two_number($number,0);
    }
    if (strlen($number) == 3){
        Hundreds($number, 0) . Two_number($number,1);
    }
}
?>
</body>
</html>