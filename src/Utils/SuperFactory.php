<?php

namespace App\Utils;

final class SuperFactory
{
    public function __construct(private array $services)
    {
        // dump($services);
    }
}
