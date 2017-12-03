<?php
 
ob_start(); 
session_start();
require_once('Connections/conndb.php');

error_reporting(0);


?>

<ion-header>
  <ion-navbar>
    <ion-title>
      Explore
    </ion-title>
  </ion-navbar>
</ion-header>

<ion-content padding>

<p>Destinations: </p>

<ion-item>

<p>  <?php 

// DATABASE
$database_conndb = "jetBlue";
$username_conndb = "root";
$password_conndb = "root";
$hostname_conndb = "localhost";

$conn = new mysqli($hostname_conndb, $username_conndb, $password_conndb, $database_conndb);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//DEALS
$sql = "SELECT OriginAirportCode, DestinationAirportCode, FlightDate, FinalScore, FareDollarAmount, TaxDollarAmount, FarePointsAmount, IsDomesticRoute, IsHotDeal, LastDayOfFare, DaysOfWeek FROM deal";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	echo $row["DestinationAirportCode"]. " " . "<br>";
}

$conn->close();
    ?>  </p>
         
         
</ion-item>


</ion-content>

