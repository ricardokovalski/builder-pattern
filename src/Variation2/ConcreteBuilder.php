<?php

declare(strict_types=1);

namespace RicardoKovalski\BuilderPattern\Variation2;

class ConcreteBuilder implements Builder
{
    private Product $product;
    
    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildStepA(): void
    {
        $this->product->append('step A');
    }

    public function buildStepB(): void
    {
        $this->product->append('step B');
    }

    public function buildStepC(): void
    {
        $this->product->append('step C');
    }

    public function build(): Product
    {
        return $this->product;
    }
}