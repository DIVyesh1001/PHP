<?php
    echo"Hello World";
    $name="Divyesh";
    $age=21;
    $gpa=8.101;
    echo"<br>";
    echo"<h1>My name is {$name}</h1>";
    echo"<br>";
    echo"<h2>I am {$age} years old</h2>";
    echo"<br>";
    echo"<h2>My cgpa is {$gpa}</h2>";
    $isEmployed=false;
    if($isEmployed){
        echo"<h2>I am employed</h2>";
    }
    else{
        echo"<h2>I am unemployed</h2>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>This is html</h1>
    <input type="button" value="click me" />
</body>
</html>