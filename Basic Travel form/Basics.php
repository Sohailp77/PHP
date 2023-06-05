<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">This is my first php Website
        <?php
        define("PI",3.14);
        echo "hello";
        //single line comment 

         /*
                multy                               Basics
                line 
                comment
         */                     
        ?>
    </div>
    <div>
    <?php 
    echo"Advance ";
    echo"Variables sum =  ";          
    //                                              Variables
    $var1=2;
    $var2=4;
    echo $var1+$var2;
    ?>
    </div>


<div>
    operators in php 
    Arithmetic operators 
    Assigment operators
    comparison operators
    increment decrement operators
    Logical operators
    <?php
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"EX of arithmetic operator *  +  / ";
    echo"<br>";
    echo"the sum of var1 and var2 is = ";
    echo $var1 + $var2;
    echo"<br>";
    echo"<br>";
    echo"EX of Assigment operator";
    $newvar=$var2;
    $newvar+=1;
    echo"<br>";
    echo"The value of newvar is ";
    echo $newvar;
    echo"<br>";
    echo"<br>";

    echo"EX of comparison operators";
    echo"<br>";
    echo"the value 2==4 is ";
    echo var_dump(2==4);
    echo"<br>";
    echo"the value 2!=4 is ";
    echo var_dump(2!=4);
    echo"<br>";
    echo"the value 2>=4 is ";
    echo var_dump(2>=4);
    echo"<br>";
    echo"<br>";

    echo"EX of increment decrement operators";
    echo"<br>";
    echo $var1++;   //value will get increment but not get printed if valu was 2 it will become 3 but will get printed 2 we must call echo again to print incremented value
    echo $var1;     //print the incremented value
    echo $var1--;   //same as above just value get decremented
    echo $var1;     //to print decrimented value
    //echo ++$var2;   // same but incremented value is printed no need to call another time variable using echo
    //echo $var1;
    //echo --$var2;
    //echo $var2;
    echo"<br>";
    echo"<br>";

    echo" Ex of logical operator ";
    echo"<br>";
    echo"types of logical operator in php are";
    echo"<br>";
    echo"and(&&)";
    echo"<br>";
    echo"OR(||)";
    echo"<br>";
    echo"XOR";
    echo"<br>";
    echo"!(not)";
    echo"<br>";
    $myVar=(true and false);
    echo var_dump($myVar);
    echo"<br>";
    echo"<br>";

    echo"Data types";
    echo"<br>";
    echo"string";
    echo"<br>";
    echo"integer";
    echo"<br>";
    echo"boolean";
    echo"<br>";
    echo"Array";
    echo"<br>";
    echo"object";
    echo"<br>";
    echo"float";
    echo PI;
    
 ?>
</div>
</body>
</html>