<?php

declare(strict_types=1);

namespace Boilerplate;

require_once __DIR__ . '/../vendor/autoload.php';

use Boilerplate\Classes\Initial;
use Illuminate\Support\Collection;

$temp = (new Initial(['welcome', 'to', 'the', 'test']));

$concat = (new Collection($temp->getTemp()))->map(
    fn(string $text) => ucfirst($text)
)->join(' ');

echo $concat;