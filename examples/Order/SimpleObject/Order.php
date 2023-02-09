<?php

declare(strict_types=1);

namespace RicardoKovalski\Examples\Order\SimpleObject;

class Order
{
    public function __construct(
        public readonly int $id,
        public readonly string $status,
        public readonly float $total,
        public readonly \DateTimeImmutable $createdAt
    ) {}
}
