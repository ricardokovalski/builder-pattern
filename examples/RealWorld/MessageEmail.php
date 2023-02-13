<?php

declare(strict_types=1);

namespace RicardoKovalski\Examples\RealWorld;

class MessageEmail
{
    private string $subject;
    private string $fromEmail;
    private string $fromName;
    private int $fromId;
    private int $fromAccountId;
    private array $to;
    private bool $trackOpens;
    private bool $trackClick;
    private array $tags;
    private array $globalMergeVars;

    public function resetSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function resetFromEmail(string $fromEmail): void
    {
        $this->fromEmail = $fromEmail;
    }

    public function resetFromName(string $fromName): void
    {
        $this->fromName = $fromName;
    }

    public function resetFromId(int $fromId): void
    {
        $this->fromId = $fromId;
    }

    public function resetFromAccountId(int $fromAccountId): void
    {
        $this->fromAccountId = $fromAccountId;
    }

    public function resetTo(array $to): void
    {
        $this->to = $to;
    }

    public function resetTrackOpens(bool $trackOpens): void
    {
        $this->trackOpens = $trackOpens;
    }

    public function resetTrackClick(bool $trackClick): void
    {
        $this->trackClick = $trackClick;
    }

    public function resetTags(array $tags): void
    {
        $this->tags = $tags;
    }

    public function resetGlobalMergeVars(array $globalMergeVars): void
    {
        $this->globalMergeVars = $globalMergeVars;
    }

    public function toArray(): array
    {
        return [
            'subject' => $this->subject,
            'from_email' => $this->fromEmail,
            'from_name' => $this->fromName,
            'from_id' => $this->fromId,
            'from_account_id' => $this->fromAccountId,
            'to' => $this->to,
            'track_opens' => $this->trackOpens,
            'track_click' => $this->trackClick,
            'tags' => $this->tags,
            'global_merge_vars' => $this->globalMergeVars
        ];
    }
}
