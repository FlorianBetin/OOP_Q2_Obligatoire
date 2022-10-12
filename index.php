<?php

require __DIR__ . '/Bicycle.php';
require __DIR__ . '/Cars.php';
require __DIR__ . '/Truck.php';



?>

<h1> Bikes</h1>

<?php
// // Moving bike

$bike = new Bicycle('Blue', 1);
$bike->setCurrentSpeed(rand(0,60));
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $bike->brake(). '<br><br>';




?>

<h1> Cars</h1>

<?php

// Moving Cars

$blueCar = new Cars('blue', 5, "gazole");
$blueCar->setCurrentSpeed(rand(0,130));
$blueCar->setEnergyLevel(50);
echo '<br> La voiture ' . $blueCar->getColor() . ' démarre !' . '<br> <br>';
echo $blueCar->forward();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $blueCar->brake();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br><br>';


$redCar = new Cars('red', 5, "Benzin");
$redCar->setCurrentSpeed(rand(0,130));
$redCar->setEnergyLevel(90);
echo '<br> La voiture ' . $redCar->getColor() . ' démarre !' . '<br> <br>';
echo $redCar->forward();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $redCar->brake();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br><br>';


// Moving Truck
?>
<h1> Trucks </h1>

<?php

$greenTruck = new Truck('green',3, 'fuel', 250);
$greenTruck->setCurrentLoad(rand(0,500));
$greenTruck->setCurrentSpeed(90);
echo $greenTruck->isFull() . '<br><br>';
echo $greenTruck->forward();
echo '<br> Vitesse du camion : ' . $greenTruck->getCurrentSpeed() . ' km/h' . '<br><br>';
echo $greenTruck->brake();
echo '<br> Vitesse du camion : ' . $greenTruck->getCurrentSpeed() . ' km/h' . '<br><br>';
?>
