<?php

declare(strict_types=1);

namespace RicardoKovalski\Examples\RealWorld;

class Payload
{
    private string $service = 'service';
    private string $templateName;
    private string $flowIdentifier;
    private MessageEmail $message;

    public function resetTemplateName(string $templateName): void
    {
        $this->templateName = $templateName;
    }

    public function resetFlowIdentifier(string $flowIdentifier): void
    {
        $this->flowIdentifier = $flowIdentifier;
    }

    public function resetMessage(MessageEmail $message): void
    {
        $this->message = $message;
    }

    public function toArray(): array
    {
        return [
            'service' => $this->service,
            'template_name' => $this->templateName,
            'flow_identifier' => $this->flowIdentifier,
            'message' => $this->message->toArray()
        ];
    }
}
