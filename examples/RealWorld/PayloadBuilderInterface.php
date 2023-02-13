<?php

declare(strict_types=1);

namespace RicardoKovalski\Examples\RealWorld;

interface PayloadBuilderInterface
{
    public function withFlowIdentifier(string $flowIdentifier): self;
    public function withTemplateName(string $tempalteName): self;
    public function withMessage(MessageEmail $messageEmail): self;
    public function build(): Payload;
}
