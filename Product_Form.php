<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Proname=test_input($_POST["Proname"]);
    $Probar=test_input($_POST["Probar"]);
    $Procode=test_input($_POST["Procode"]);
    $Quantity=test_input($_POST["Quantity"]);
    $Protype=test_input($_POST["Protype"]);
    $Price=test_input($_POST["Price"]);
    $Descript=test_input($_POST["Descript"]);

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>