@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Job Search API Library Demo</h1>
			@foreach($jobs as $job)
                <h4>{!! $job->title !!}</h4>
                <p>{!! $job->description !!}</p>
                <hr/>
            @endforeach
		</div>
	</div>
</div>
@endsection
