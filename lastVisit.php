<?php

$cookie_name = "last_visit";
// Check if the cookie exists
if(isset($_COOKIE[$cookie_name])) {
    // If the cookie exists, retrieve its value
    $last_visit = $_COOKIE[$cookie_name];
} else {
    // If the cookie does not exist, set the last visit to "Never"
    $last_visit = "Never";
}

    // Set the current date and time
    $current_visit = date("Y-m-d H:i:s");
    
    // Set the cookie with the current visit date and time, set it to expire in one year
    setcookie($cookie_name, $current_visit, time() + (365 * 24 * 60 * 60), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LastVisit</title>
</head>
<body>
    <h1>Last Visited on : </h1>
    <?php echo  $last_visit;?>
    <br>
    <h1>Current visit on : </h1>
    <?php echo  $current_visit;?>
    <br>
</body>
</html>