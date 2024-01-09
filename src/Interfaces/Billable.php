<?php

declare(strict_types=1);

namespace Boilerplate\Interfaces;

interface Billable
{
    public function getTotalInPence(): int;

    public function getLineItemName(): string;

}