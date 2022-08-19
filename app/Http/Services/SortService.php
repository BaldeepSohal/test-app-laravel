<?php

namespace App\Http\Services;

use App\Http\Interfaces\CommandInterface;

class SortService implements CommandInterface
{
    /**
     * Sort integers
     *
     * @return Array
     */
    public function run($arguments)
    {
        sort($arguments);
        return $arguments;
    }
}
