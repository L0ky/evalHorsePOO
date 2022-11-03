<?php

use App\Model\Category;
use App\Model\Human;
use App\Model\Manager;
use App\Model\Rider;
use App\Model\Stable;

require_once __DIR__ . "/../src/app.php";

// $human = new Human("Jane", new Category(), 34, "1 rue de la ferme", "14000", "Caen");
// echo $human;

// $rider 
// echo $rider;

echo "--------------------------------------------\n";

$manager = new Manager("John", new Category("A"), "1 rue de prairie", "1 rue de la prairie", "14000", "Caen");
echo $manager;

echo "--------------------------------------------\n";

$stable = new Stable("La ferme", "1 rue de la ferme", "1 rue de la ferme", "14000", "Caen", $manager);
echo $stable;

echo "--------------------------------------------\n";


