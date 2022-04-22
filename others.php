<?php 
function randomNumber() {
    return rand(0, 500);
}
//print all elemets of an array 
function printArray($array) {
    foreach ($array as $value) {
        echo $value . " ";
    }
}
?>