<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    .container{
        max-width: 80%;
        background-color: rgb(182, 121, 121);
        margin: auto;
        padding: 25px;
    }
    </style>
    <div class="container">
        <h1>Lets learn about PHP</h1>
       Your voting status is here:
   
    <?php
    //else-if condition
    echo"<br>";
    $age  = 34;
    if($age>18){
        echo" you can drive";
    }else{
        echo"you can not drive";
    }
    echo"<br>";
    //arrays in php
    $fruits=array("mango","litchi","guava","watermelon");
    // echo"favourite fruit is:";
    // echo $fruits[1];
    // echo"<br>";
    // echo"number of fruits";
    // echo count($fruits);
    // loops in php
    $a=0;
   while ($a <= 10) { //while loop in php
   echo"<br> the value of a is";
   echo $a;
   $a++;
   }
   echo"<br>";
   $a=0;//iterating array using while loop in php
   while ($a < count($fruits)) {
   echo "<br> the value of a is";
   echo $fruits[$a];
   $a++;
   }
    ?>
     </div>
    
</body>
</html>