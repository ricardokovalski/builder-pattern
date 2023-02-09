<?php

declare(strict_types=1);

namespace RicardoKovalski\BuilderPattern\Variation2;

interface Builder
{
    public function buildStepA(): void;
    public function buildStepB(): void;
    public function buildStepC(): void;
}