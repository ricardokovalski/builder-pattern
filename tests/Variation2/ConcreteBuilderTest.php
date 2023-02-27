<?php

declare(strict_types=1);

namespace Tests\Variation2;

use PHPUnit\Framework\TestCase;
use RicardoKovalski\BuilderPattern\Variation2\ConcreteBuilder;

class ConcreteBuilderTest extends TestCase
{
    public function testConcreteBuilder(): void
    {
        $builder = new ConcreteBuilder();
        $builder->buildStepA();
        $builder->buildStepC();
        $product = $builder->build();

        $this->assertEquals("step A, step C", implode(", ", $product->getSteps()));

        $builder->buildStepB();
        $product = $builder->build();

        $this->assertEquals("step A, step C, step B", implode(", ", $product->getSteps()));
    }
}
