<?php namespace App\Activities;

class JobsActivities
{
    private $client;

    public function getJobs($input = [])
    {
        $jobs = [];
        if ($input['api'] && $input['keyword']) {
            $provider = ucfirst($input['api']).'Jobs\Provider';
            $config = \Config::get('enums.apis.'.$input['api'].'.config');
            try {
                // Load up the selected client
                $this->client = $provider::createClient($config);

                // Set query, location, page, and count
                $this->setClientAttributes($input);

                // Get jobs from them
                return $this->client->getJobs()->all();
            } catch (Exception $e) {
                dd($e);
            }
        }
        // Return as an array for the controller
        return $jobs;
    }

    private function setClientAttributes($input)
    {
        $this->client->setQuery($input['keyword']);

        if (isset($input['city']) && $input['city']) {
            $this->client->setCity($input['city']);
        }
        if (isset($input['state']) && $input['state']) {
            $this->client->setState($input['state']);
        }
        if (isset($input['page']) && $input['page']) {
            $this->client->setPage($input['page']);
        }
        if (isset($input['count']) && $input['count']) {
            $this->client->setPage($input['count']);
        }
    }
}
