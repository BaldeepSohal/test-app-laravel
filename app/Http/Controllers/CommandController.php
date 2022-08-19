<?php

namespace App\Http\Controllers;

use App\Http\Services\CommandService;
use Illuminate\Http\Request as HttpRequest;

class CommandController extends Controller
{

    /**
     * Process commands
     *
     * @return \Illuminate\Http\Response
     */
    public function process(HttpRequest $request)
    {
        $output = '';
        $error = false;
        $input = explode(' ', $request->command);

        if (count($input) < 3) {
            $error = true;
            $output = 'Invalid Command';
        }

        if (!$error) {
            $cmdName = $input[0];
            $arguments = array_slice($input, 1);

            $cmdService = new CommandService();
            $command = $cmdService->initializeCommand($cmdName);
            if (is_a($command, 'App\Http\Interfaces\CommandInterface')) {
                $output = $command->run($arguments);
            } else {
                $output = 'Unsupported Command!';
            }
        }

        return response()->json(['output' => $output]);
    }
}
