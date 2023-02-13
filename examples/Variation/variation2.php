<?php

declare(strict_types=1);

use RicardoKovalski\BuilderPattern\Variation2\ConcreteBuilder;

require __DIR__ . '/../../vendor/autoload.php';

$builder = new ConcreteBuilder();
$builder->buildStepA();
$builder->buildStepC();
$product = $builder->build();
var_dump($product);

/*
Build product:
object(RicardoKovalski\BuilderPattern\Variation2\Product)#2 (1) {
  ["steps":"RicardoKovalski\BuilderPattern\Variation2\Product":private]=>
  array(2) {
    [0]=>
    string(6) "step A"
    [1]=>
    string(6) "step C"
  }
}
*/
