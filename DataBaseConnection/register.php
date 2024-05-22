<?php
echo "You are not Registered"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Please Register</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <hr>
            <input type="password" name="password" placeholder="Password"><br>
            <hr>
            <input type="password" name="conf_password" placeholder="Retype Password"><br>
            <hr>
            <input type="submit" name="register" value="Register">
            <input type="submit" name="back" value="Go Back">
            
        </form>
    
</body>
</html>