<?php
$host="e-srv-lamp.univ-lemans.fr";
$username="e2302910";
$password="Atz435ga";
$database="e2302910";
$connection=new mysqli($host,$username,$password,$database);
if($connection->connect_error){
    echo("error");
}
else {
    echo("no error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['nom'];
    $number = $_POST['nombre'];

    $sql = "INSERT INTO BirthdayGuests (nom, nombre) VALUES ('$name','$number')";
   
    if ($connection->query($sql) == TRUE){
        echo ("New guest created successfully");
   }
   else {
    echo ("error : " . $sql . "<br>" . $connection->error);
   }
}

$connection->close();
?>