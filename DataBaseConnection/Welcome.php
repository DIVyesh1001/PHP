<?php
echo"Login Successful";
$username=$_COOKIE["username"];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    setcookie("username","$username",time()-0,"/");
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome <?php  echo $username; ?></h1>
    <h2>Login Successful</h2>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <input type="submit" name="logout" value="Logout">

    </form>
</body>
</html>