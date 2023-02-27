<?php

declare(strict_types=1);

namespace Tests\Variation1;

use PHPUnit\Framework\TestCase;
use RicardoKovalski\BuilderPattern\Variation1\ConcreteBuilder;
use RicardoKovalski\BuilderPattern\Variation1\Director;

class DirectorTest extends TestCase
{
    public function testFirstBuildBasicProduct(): void
    {
        $builder = new ConcreteBuilder();
        $director = new Director();
        $director->setBuilder($builder);

        $director->buildBasicProduct();
        $product = $builder->build();

        $this->assertEquals("step A", implode(",", $product->getSteps()));

        $director->buildFullProduct();
        $product = $builder->build();

        $this->assertEquals("step A, step B, step C", implode(", ", $product->getSteps()));
    }

    public function testFirstBuildFullProduct(): void
    {
        $builder = new ConcreteBuilder();
        $director = new Director();
        $director->setBuilder($builder);

        $director->buildFullProduct();
        $product = $builder->build();

        $this->assertEquals("step A, step B, step C", implode(", ", $product->getSteps()));

        $director->buildBasicProduct();
        $product = $builder->build();

        $this->assertEquals("step A", implode(",", $product->getSteps()));
    }
}
