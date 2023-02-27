<?php

declare(strict_types=1);

namespace RicardoKovalski\BuilderPattern\Variation1;

class ConcreteBuilder implements Builder
{
    private Product $product;
    
    public function __construct()
    {
        $this->reset();
    }

    public function build(): Product
    {
        $product = $this->product;
        $this->reset();
        return $product;
    }
    
    public function reset(): void
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
}
