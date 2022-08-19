<?php

namespace App\Http\Services;

use Exception;

class CommandService
{
    /**
     * Add integers
     *
     * @return Array
     */
    public function initializeCommand($cmdName)
    {
        if ($cmdName == 'add') {
            return new AddService();
        } else if ($cmdName == 'sort-asc') {
            return new SortService();
        } elseif ($cmdName == 'repo-desc') {
            return new GithubService();
        }

        return false;
    }
}
