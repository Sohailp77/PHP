<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        max-width: 80%;
        background-color: Grey;
        margin:auto;
        padding:13px;
    }

    .container2{
        max-width: 80%;
        background-color: pink;
        margin:auto;
        padding:13px;
    }
</style>
<body>
    <div class="container">
        Basic webpage
    <?php
    //conditions in php
    $age=18;
    if($age<=17){
        echo"underage";
    }
    else{
        echo"Adult";
    }

    ?>
    </div>
    <br>
    <div class="container2">
        <?php
        //arays in php
        $language=array("python","c","Java","PHP");
        echo $coun=count($language);
        echo $language[2];


        // loops in php
        $a=0;
        while($a<=10){
            echo $a;
            echo "<br>";
            $a++;
        }
        echo"<br>";
         // iterating loops
         $a=0;
         while($a<$coun){
             echo "The languages are ";
             echo $language[$a];
             echo "<br>";
             $a++;
         }
        ?>

    </div>
</body>
</html>