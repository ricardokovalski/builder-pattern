<?php

declare(strict_types=1);

namespace RicardoKovalski\Examples\RealWorld;

class PayloadBuilder implements PayloadBuilderInterface
{
    private Payload $payload;

    public function __construct()
    {
        $this->payload = new Payload();
    }

    public function withFlowIdentifier(string $flowIdentifier): self
    {
        $this->payload->resetFlowIdentifier($flowIdentifier);
        return $this;
    }

    public function withTemplateName(string $tempalteName): self
    {
        $this->payload->resetTemplateName($tempalteName);
        return $this;
    }

    public function withMessage(MessageEmail $messageEmail): self
    {
        $this->payload->resetMessage($messageEmail);
        return $this;
    }

    public function build(): Payload
    {
        return $this->payload;
    }
}
