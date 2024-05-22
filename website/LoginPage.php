<html lang="en">
    <form action="LoginPage.php" method="post" >
        <label>UserName: </label>
        <input type="text" name="username" placeholder="Username" /><br>
        <label>Password: </label>
        <input type="password" name="password" placeholder="Password" /><br>
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="MasterCard">
        MasterCard<br>
        <input type="radio" name="credit_card" value="AmericanExpress">
        American Express<br>
       <h4>What do you eant to eat:</h4>
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="burger" value="Burger">
        Burger<br>
        <input type="checkbox" name="Dosa" value="Dosa">
        Dosa<br>
        <input type="submit" name="login" value="Login" />
    </form>
</html>
<?php
    // $_POST is a associative array 
    // foreach($_POST as $key=>$value){
    //     echo $key." = ".$value."<br>";
    // }

    if(isset($_POST["login"])){
        // echo"You tried to login >W<";
        $username=$_POST["username"];
        $password=$_POST["password"];
        if(empty($username)){
            echo "Username is empty";
        }
        elseif(empty($password)){
            echo "Password is empty";
        }
        else{
            if(isset($_POST["credit_card"])){
                $credit_card=$_POST["credit_card"];
                echo"Hello {$username}<br>";
                echo "You chose {$credit_card} as your credit card <br>";
            }
            else{
                echo "You didn't choose any credit card";
            }
        }
    }
?>