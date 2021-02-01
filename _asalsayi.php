<?php 

function asalBul(){ 
    if ($_POST["deka"] == 1) 
    return 0; 
    for ($i = 2; $i <= $_POST["deka"]/2; $i++){ 
        if ($_POST["deka"] % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  


$asdak = asalBul(); 
if ($asdak == 1) 
    echo "Asal Sayı"; 
else
    echo "Asal Sayı değil"
?> 