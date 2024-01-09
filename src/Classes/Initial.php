<?php

declare(strict_types=1);

namespace Boilerplate\Classes;

class Initial
{
    public function __construct(
        public array $temp
    ){
    }

    public function getTemp(): array
    {
        return $this->temp ?? [];
    }

    public function setTemp(array $temp): void
    {
        $this->temp = $temp;
    }
}