<?php 
<?phpfunction ConnectDb(){
    try {
    $conn = new PDO("mysql:host=localhost;dbname=bieren", "root", "");
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);echo "geslaagd";
    } catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
    }}function OvzBieren(){}
    ?>/
    ?>



