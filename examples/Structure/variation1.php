<?php

declare(strict_types=1);

use RicardoKovalski\BuilderPattern\Variation1\ConcreteBuilder;
use RicardoKovalski\BuilderPattern\Variation1\Director;

require __DIR__ . '/../../vendor/autoload.php';

$director = new Director();
$builder = new ConcreteBuilder();

$director->setBuilder($builder);

echo "Standard basic product:\n";
$director->buildBasicProduct();
echo $builder->build()->getSteps();

echo "Standard full featured product:\n";
$director->buildFullProduct();
echo $builder->build()->getSteps();