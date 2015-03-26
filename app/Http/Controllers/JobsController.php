<?php namespace App\Http\Controllers;

use App\Activities\JobsActivities;
use Illuminate\Support\Facades\Input;
use Request;

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
		$input = Input::only(
            'keyword',
            'api',
            'location',
            'page',
            'count'
        );
		$jobs = $this->activities->getJobs($input);
		return view('search')->with(['jobs' => $jobs]);
	}

}
