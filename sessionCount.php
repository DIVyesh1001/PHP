<?php
session_start();
if(isset($_SESSION['count'])){
    $_SESSION['count']++;
}
else{
    $_SESSION['count']=1;
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
    <h1>Session counter</h1>
    <h1>
    <?php
    echo $_SESSION["count"];
    ?>
    </h1>
</body>
</html>