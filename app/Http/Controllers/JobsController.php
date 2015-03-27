<?php namespace App\Http\Controllers;

use App\Activities\JobsActivities;
use App\Filters\InputFilters;
use Request;

class JobsController extends Controller {

	public function __construct(JobsActivities $activities)
	{
		$this->activities = $activities;
	}

	public function index()
	{
		$apis = \Config::get('enums.api_names');
		$states = \Config::get('enums.states');

		return view('index')->with([
			'apis' => $apis,
			'states' => $states
		]);
	}

	public function search()
	{
		$input = InputFilters::getJobSearchInput();
		$jobs = $this->activities->getJobs($input);

		return view('search')->with([
			'jobs' => $jobs
		]);
	}

}
