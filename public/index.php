<?php

use App\Model\Category;
use App\Model\Human;
use App\Model\Manager;
use App\Model\Stable;

require_once __DIR__ . "/../src/app.php";


$stable = new Stable("La ferme", "1 rue de la ferme", "1 rue de la ferme", "75000", "Paris", new Manager());
echo $stable;

echo "--------------------------------------------\n";

$human = new Human("John", new Category(), 34, "1 rue de la ferme", "75000", "Paris");
echo $human;

