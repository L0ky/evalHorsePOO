<?php

use App\Model\Category;
use App\Model\Horse;
use App\Model\Human;
use App\Model\Manager;
use App\Model\Poney;
use App\Model\Rider;
use App\Model\Sheitland;
use App\Model\Stable;

require_once __DIR__ . "/../src/app.php";

// $human = new Human("Jane", new Category(), 34, "1 rue de la ferme", "14000", "Caen");
// echo $human;

// echo "/-- Rider --\ \n";
// $rider = new Rider("Chris", new Category("rider"),"Cross",  34, "rue de la valée", "14000", "Caen");
// echo $rider;

// echo "\n";

// echo "/-- Manager --\ \n";
// $manager = new Manager("John", new Category("manager"), "1 rue de prairie", "1 rue de la prairie", "14000", "Caen");
// echo $manager;

// echo "\n";

// $stable = new Stable("La ferme", "1 rue de la ferme", "1 rue de la ferme", "14000", "Caen", $manager);
// echo $stable;

// echo "--------------------------------------------\n";

// $poney = new Poney("Jean-Claude", "Alzan", 1, $rider);
// echo $poney;
// echo "\n";
// $cheval = new Horse("Bertrand", "Grey", 1, $rider);
// echo $cheval;
// echo "\n";
// $sheitland = new Sheitland("Maurice", "Bai", 1, $rider);
// echo $sheitland;

echo "--------------------------------------------\n";
$rider1 = new Rider("Christophe", new Category("rider"), "Cross",  34, "rue de la valée", "14000", "Caen");

$horse1 = new Horse("Bertrand", "Grey", 1, $rider1);
$horse2 = new Horse("Bertrand", "Grey", 1, $rider1);
$horse3 = new Horse("Bertrand", "Grey", 1, $rider1);
$horse3 = new Horse("Bertrand", "Grey", 1, $rider1);

echo $rider1;

