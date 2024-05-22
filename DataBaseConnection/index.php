<?php
    include("database.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if(empty($username)){
            echo"Please enter a username";
        }
        elseif(empty($password)){
            echo"Please enter a password";
        }
        else{

            $sql="SELECT * FROM users where user='$username'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    if($row["password"]==$password){
                        setcookie("username","$username",time()+(86400*2),"/");
                        header("Location: Welcome.php");
                        // echo"L";
                    }
                    
                }
                echo"Wrong PASSWORD";
            }
            else{
                // header("Location: register.php");
                echo"No User Found";
            }
        }
    }
    // $sql="INSERT INTO users (user,password) VALUES ('$username','$password')";
    // mysqli_query($conn,$sql);
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <hr>
            <input type="password" name="password" placeholder="Password"><br>
            <hr>
            <input type="submit" name="login" value="login">
            
        </form>
    </body>
    </html>
    <?php
        mysqli_close($conn);
    ?>