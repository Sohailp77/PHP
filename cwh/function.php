<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function myfun()
    {
        echo"5";

    }
    myfun();    //Basic function
    echo"<br>";

    function myfun2($som){
        echo"Your number is : ";
        echo $som;
    }
    myfun2(4);  //pre defined function

    $str="sort most";
    $len=strlen($str);              // sting lenth funtion
    echo "$str thing.$len";
    echo str_word_count($str);      //count the number of words in string
    echo strrev($str);              // reverse string function
    echo"<br>";
    echo strpos($str,"m");          //position of word in string 
    echo str_replace("most","it",$str); //built in function to replace words in string


    ?>
</body>
</html>