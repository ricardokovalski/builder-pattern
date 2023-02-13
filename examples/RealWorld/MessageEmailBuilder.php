<?php

declare(strict_types=1);

namespace RicardoKovalski\Examples\RealWorld;

class MessageEmailBuilder implements MessageEmailBuilderInterface
{
    private MessageEmail $messageEmail;

    public function __construct()
    {
        $this->messageEmail = new MessageEmail();
    }

    public function withSubject(string $subject): self
    {
        $this->messageEmail->resetSubject($subject);
        return $this;
    }

    public function withFromEmail(string $fromEmail): self
    {
        $this->messageEmail->resetFromEmail($fromEmail);
        return $this;
    }

    public function withFromName(string $fromName): self
    {
        $this->messageEmail->resetFromName($fromName);
        return $this;
    }

    public function withFromId(int $fromId): self
    {
        $this->messageEmail->resetFromId($fromId);
        return $this;
    }

    public function withFromAccountId(int $fromAccountId): self
    {
        $this->messageEmail->resetFromAccountId($fromAccountId);
        return $this;
    }

    public function withTo(array $to): self
    {
        $this->messageEmail->resetTo($to);
        return $this;
    }

    public function withTrackOpens(bool $trackOpens): self
    {
        $this->messageEmail->resetTrackOpens($trackOpens);
        return $this;
    }

    public function withTrackClick(bool $trackClick): self
    {
        $this->messageEmail->resetTrackClick($trackClick);
        return $this;
    }

    public function withTags(array $tags): self
    {
        $this->messageEmail->resetTags($tags);
        return $this;
    }

    public function withGlobalMergeVars(array $globalMergeVars): self
    {
        $this->messageEmail->resetGlobalMergeVars($globalMergeVars);
        return $this;
    }

    public function build(): MessageEmail
    {
        return $this->messageEmail;
    }
}
