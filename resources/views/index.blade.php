@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Job Search API Library Demo</h1>
			<p>Select a Job Search API, input a keyword, and click "Let's Go!" to
				see their latest jobs.</p>
				<div class="input">
					{!! Form::open(array('url' => '/',
						'method' => 'post'
					)) !!}
						<p><label for="keyword">Keyword</label>
							{!! Form::text('keyword', '', [
							'class' => 'form-control',
							'placeholder' => 'Enter Your Job Search'
						]) !!}</p>
						<p><label for="api">API Client</label>
							{!! Form::select('api', $apis, '', [
							'class' => 'form-control'
						]) !!}</p>
						<p>{!! Form::submit("Let's Go!", ['class' => 'form-control']) !!}</p>
					{!! Form::close() !!}
				</div>

		</div>
	</div>
</div>
@endsection
