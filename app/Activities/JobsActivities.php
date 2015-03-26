<?php namespace App\Activities;

class JobsActivities
{
    public function getJobs($input = [])
    {
        $jobs = [];
        if ($input['api'] && $input['keyword']) {
            $provider = ucfirst($input['api']).'Jobs\Provider';
            $config = \Config::get('enums.apis.'.$input['api'].'.config');
            try {
                // Load up the selected client
                $client = $provider::createClient($config);
                // Set query, location, page, and count
                $client->setQuery($input['keyword']);
                // Get jobs from them
                //dd($client->getJobs()->all());
                return $client->getJobs()->all();
            } catch (Exception $e) {
                dd($e);
            }
        }
        // Return as an array for the controller
        return $jobs;
    }

}
