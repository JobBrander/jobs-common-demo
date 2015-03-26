@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Job Search API Library Demo</h1>
			<h3>More info at </h3>
			<div class="">
				{!! Form::open(array('url' => '/',
					'method' => 'post'
				)) !!}
					<p><label for="keyword">Keyword</label>
						{!! Form::text('keyword', '', [
						'class' => 'form-control',
						'placeholder' => 'Enter Your Job Search'
					]) !!}</p>
					<p>{!! Form::submit("Let's Go!", ['class' => 'form-control']) !!}</p>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
