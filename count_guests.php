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
    echo("no error </br>");
}

$query = "SELECT * FROM `BirthdayGuests`";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    $somme = 0;
    while ($row = $result->fetch_assoc()) {
        $somme += $row['Nombre'];
    }

    echo "Total Guests: : " . $somme;
} else {
    echo "Aucun résultat trouvé";
}

$connection->close();
?>

