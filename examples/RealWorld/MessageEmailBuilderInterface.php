<?php

declare(strict_types=1);

namespace RicardoKovalski\Examples\RealWorld;

interface MessageEmailBuilderInterface
{
    public function withSubject(string $subject): self;
    public function withFromEmail(string $fromEmail): self;
    public function withFromName(string $fromName): self;
    public function withFromId(int $fromId): self;
    public function withFromAccountId(int $fromAccountId): self;
    public function withTo(array $to): self;
    public function withTrackOpens(bool $trackOpens): self;
    public function withTrackClick(bool $trackClick): self;
    public function withTags(array $tags): self;
    public function withGlobalMergeVars(array $globalMergeVars): self;
    public function build(): MessageEmail;
}
