<?php namespace App\Activities;

use CareerbuilderJobs\Provider as CareerbuilderProvider;

class JobsActivities
{
    public function getJobs($input = [])
    {
        $jobs = [];
        try {
            // Load up the selected client
            $client = CareerbuilderProvider::createClient([
                'key' => getenv('CAREERBUILDER_KEY')
            ]);
            // Set query, location, page, and count
            $client->setQuery($input['keyword']);
            // Get jobs from them
            return $client->getJobs()->all();
            dd($client->getJobs()->all());
        } catch (Exception $e) {
            dd($e);
        }
        // Return as an array for the controller
        return $jobs;
    }

}
