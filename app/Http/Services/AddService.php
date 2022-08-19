<?php

namespace App\Http\Services;

use App\Http\Interfaces\CommandInterface;

class AddService implements CommandInterface
{
    /**
     * Add integers
     *
     * @return Array
     */
    public function run($arguments)
    {
        foreach ($arguments as $value) {
            if (!is_numeric($value)) {
                return 'Invalid Arguments';
            }
        }
        return array_sum($arguments);
    }
}
