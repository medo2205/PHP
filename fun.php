<?php

hello("Mohammed");
echo "<br>";
hello("Fahad");
echo "<br>";
echo add(2 , 1.3);



function add($x, $y){
    return $x + $y ;
}
function hello($x){

    $user = $x;

    if ($user === "Moahmmed"){
        echo "Hello " . $user;
    }else{
        echo "Bye " . $user;
    }
}

?>