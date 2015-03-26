<?php namespace App\Http\Controllers;

use App\Activities\JobsActivities;

class JobsController extends Controller {

	public function __construct(JobsActivities $activities)
	{
		$this->activities = $activities;
	}

	public function index()
	{
		return view('index');
	}

	public function search()
	{
		$jobs = $this->activities->getJobs($input);
		return view('search');
	}

}
