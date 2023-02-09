<?php

declare(strict_types=1);

namespace RicardoKovalski\BuilderPattern\Variation1;

class Director
{
    private readonly Builder $builder;

    public function setBuilder(Builder $builder): self
    {
        $this->builder = $builder;
        return $this;
    }

    public function buildBasicProduct(): void
    {
        $this->builder->buildStepA();
    }

    public function buildFullProduct(): void
    {
        $this->builder->buildStepA();
        $this->builder->buildStepB();
        $this->builder->buildStepC();
    }
}
