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
$productBasic = $builder->build();
var_dump($productBasic);

echo "Standard full-featured product:\n";
$director->buildFullProduct();
$productComplete = $builder->build();
var_dump($productComplete);

/*
Standard basic product:
object(RicardoKovalski\BuilderPattern\Variation1\Product)#4 (1) {
  ["steps":"RicardoKovalski\BuilderPattern\Variation1\Product":private]=>
  array(1) {
    [0]=>
    string(6) "step A"
  }
}
*/

/*
Standard full-featured product:
object(RicardoKovalski\BuilderPattern\Variation1\Product)#5 (1) {
  ["steps":"RicardoKovalski\BuilderPattern\Variation1\Product":private]=>
  array(3) {
    [0]=>
    string(6) "step A"
    [1]=>
    string(6) "step B"
    [2]=>
    string(6) "step C"
  }
}
*/

/*
Standard basic product:
object(RicardoKovalski\BuilderPattern\Variation1\Product)#4 (1) {
  ["steps":"RicardoKovalski\BuilderPattern\Variation1\Product":private]=>
  array(1) {
    [0]=>
    string(6) "step A"
  }
}
*/

/*
Standard full-featured product:
object(RicardoKovalski\BuilderPattern\Variation1\Product)#4 (1) {
  ["steps":"RicardoKovalski\BuilderPattern\Variation1\Product":private]=>
  array(4) {
    [0]=>
    string(6) "step A"
    [1]=>
    string(6) "step A"
    [2]=>
    string(6) "step B"
    [3]=>
    string(6) "step C"
  }
}
*/
