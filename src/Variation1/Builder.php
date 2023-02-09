<?php

declare(strict_types=1);

namespace RicardoKovalski\BuilderPattern\Variation1;

interface Builder
{
    public function reset(): void;
    public function buildStepA(): void;
    public function buildStepB(): void;
    public function buildStepC(): void;
}