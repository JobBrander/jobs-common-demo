@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Job Board API Demo</h1>
			<p>Select a Job Board API, input a keyword, and click "Let's Go!" to
				see their latest jobs.</p>
			<p>To read more about this project, check out
				<a href="http://www.karllhughes.com/2015/job-board-api-1-release/" target="_blank"
				>this blog post</a>.</p>
				<div class="input">
					{!! Form::open(array('url' => '/',
						'method' => 'post'
					)) !!}
						<p><label for="api">API Client</label>
							{!! Form::select('api', $apis, '', [
							'class' => 'form-control'
						]) !!}</p>
						<div class="row">
							<div class="col-md-8">
							<p><label for="keyword">Keyword</label>
								{!! Form::text('keyword', '', [
								'class' => 'form-control',
								'placeholder' => 'Enter Your Job Search',
								'required' => 'required'
							]) !!}</p>
							</div>
							<div class="col-md-2">
							<p><label for="page">Page</label>
							{!! Form::selectRange('page', 1, 10, '', [
							'class' => 'form-control'
							]) !!}</p>
							</div>
							<div class="col-md-2">
							<p><label for="page">Count</label>
							{!! Form::selectRange('count', 10, 100, '', [
							'class' => 'form-control'
							]) !!}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
							<p><label for="city">City</label>
							{!! Form::text('city', '', [
							'class' => 'form-control',
							'placeholder' => 'Enter Your City'
							]) !!}</p>
							</div>
							<div class="col-md-4">
							<p><label for="state">State</label>
							{!! Form::select('state', $states, '', [
							'class' => 'form-control'
							]) !!}</p>
							</div>
						</div>
						<p>{!! Form::submit("Let's Go!", ['class' => 'form-control']) !!}</p>
					{!! Form::close() !!}
				</div>

		</div>
	</div>
</div>
@endsection
