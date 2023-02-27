<?php

declare(strict_types=1);

namespace RicardoKovalski\BuilderPattern\Variation2;

class Product
{
    private array $steps = [];

    public function append(string $step): static
    {
        $this->steps[] = $step;
        return $this;
    }

    public function getSteps(): array
    {
        return $this->steps;
    }
}