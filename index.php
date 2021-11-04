<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Speedometer.php';


$car = new Car('red', 4, 'electric');
$truck = new Truck('blue', 3, 'fuel', 50);
$skate = new Skateboard('black', 1);
$bike = new Bicycle('green', 1);
$motorWay = new MotorWay();
$residentialWay = new ResidentialWay();
$pedestrianWay = new PedestrianWay();


// Challenge 2
// echo $truck->getLoading();
// echo $truck->isFull();

// $truck->setLoading(30);
// echo $truck->getLoading();
// echo $truck->isFull();

// $truck->setLoading(50);
// echo $truck->getLoading();
// echo $truck->isFull();

// $truck->setLoading(80);
// echo $truck->getLoading();
// echo $truck->isFull();

// echo $truck->forward();
// echo $truck->brake();


// Challenge 3
// $motorWay->addVehicle($truck);
// $motorWay->addVehicle($car);
// $motorWay->addVehicle($skate);
// $motorWay->addVehicle($bike);
// echo "motorWay : \n";
// var_dump($motorWay);

// $residentialWay->addVehicle($truck);
// $residentialWay->addVehicle($car);
// $residentialWay->addVehicle($skate);
// $residentialWay->addVehicle($bike);
// echo "residentialWay : \n";
// var_dump($residentialWay);

// $pedestrianWay->addVehicle($truck);
// $pedestrianWay->addVehicle($car);
// $pedestrianWay->addVehicle($skate);
// $pedestrianWay->addVehicle($bike);
// echo "pedestrianWay : \n";
// var_dump($pedestrianWay);


// Challenge 4
// var_dump($car->getParkBrake());
// try {
//     $car->start();
// } catch (LogicException $e) {
//     $car->setParkBrake();
// } finally {
//     echo "Ma voiture roule comme un donut";
// }
// var_dump($car->getParkBrake());


// Challenge 5
// echo "car On : " . $car->switchOn() . ".\n";
// echo "car Off : " . $car->switchOff() . ".\n";

// $bike->forward();
// echo "bike On : " . $bike->switchOn() . ".\n";
// echo "bike Off : " . $bike->switchOff() . ".\n";

// echo "skate On : " . $skate->switchOn() . ".\n";
// echo "skate Off : " . $skate->switchOff() . ".\n";


// Challenge 6
echo "10km => " . Speedometer::convertKmToMiles(10) . "miles\n";
echo "12,430miles => " . Speedometer::convertMilesToKm(12.430) . "km";