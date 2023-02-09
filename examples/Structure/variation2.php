<?php

declare(strict_types=1);

use RicardoKovalski\BuilderPattern\Variation2\ConcreteBuilder;

require __DIR__ . '/../../vendor/autoload.php';

$builder = new ConcreteBuilder();
$builder->buildStepA();
$builder->buildStepB();

echo "Build product:\n";
echo $builder->build()->getSteps();