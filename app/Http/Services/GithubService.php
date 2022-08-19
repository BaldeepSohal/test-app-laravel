<?php

namespace App\Http\Services;

use App\Http\Interfaces\CommandInterface;

class GithubService implements CommandInterface
{
    /**
     * Find Git repo description
     *
     * @return String
     */
    public function run($arguments)
    {
        $url = "https://api.github.com/repos/" . $arguments[0] . "/" . $arguments[1];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "X-Custom-Header: value",
            "Content-Type: application/json",
            "User-Agent: php"
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $output = curl_exec($curl);
        $output = json_decode($output);
        curl_close($curl);
        return isset($output->description) && !empty($output->description) ? $output->description : 'No such repo found!';
    }
}
