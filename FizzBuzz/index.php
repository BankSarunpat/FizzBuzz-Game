<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizz Buzz</title>
</head>
<body>
    <!--<?php 
        for($i=1; $i<=100; $i++){
            if($i % 15 === 0){
                echo "Fizz Buzz";
            }
            elseif($i % 3 == 0){
                echo "Fizz";
            }
            elseif($i % 5 == 0){
                echo "Buzz";
            }
            else{
                echo $i; 
            }
            echo "<br />";
        }
    ?>-->

    <?php
        $i=1;
        while($i<100){
            if($i % 15 == 0){
                echo "Fizz Buzz";
            }elseif($i % 3 == 0){
                echo "Buzz";
            }elseif($i % 5 == 0){
                echo "Fizz";
            }else{
                echo $i;
            }
        $i++;
        echo "<br />";
        }
    ?>
</body>
</html>