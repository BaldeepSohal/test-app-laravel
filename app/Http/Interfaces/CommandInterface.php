<?php

namespace App\Http\Interfaces;

interface CommandInterface
{
    public function run($args);
}
