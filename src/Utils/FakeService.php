<?php

namespace App\Utils;

final class FakeService
{
    private $data;

    public function __construct()
    {
        $this->data = array_map('sha1', range(1, 100000));
    }
}
