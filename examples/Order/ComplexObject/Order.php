<?php

declare(strict_types=1);

namespace RicardoKovalski\Examples\Order\ComplexObject;

class Order
{
    public function __construct(
        public readonly int $id,
        public readonly int $customerId,
        public readonly string $status,
        public readonly string $source,
        public readonly float $total,
        public readonly float $freight,
        public readonly float $discount,
        public readonly float $interest,
        public readonly \DateTimeImmutable $createdAt,
        public readonly ?\DateTimeImmutable $paidAt = null,
        public readonly ?\DateTimeImmutable $refundAt = null
    ) {}
}
