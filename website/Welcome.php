<?php

setcookie("fav_food","rajma_chawal",time()+(86400*2),"/");
setcookie("fav_drink","chai",time()+(86400*3),"/");
setcookie("fav_dessert","ice_cream",time()+(86400*2),"/");

// foreach($_COOKIE as $key=>$value){
//     echo"{$key} = {$value} <br>";
// }


if(isset($_COOKIE["fav_drink"])){
    echo"{$_COOKIE["fav_drink"]} pii lo";
}
else{
    echo"Kya pina chate ho";
}
?>