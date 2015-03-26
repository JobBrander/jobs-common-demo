@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Job Search API Library Demo</h1>
            <hr/>
			@foreach($jobs as $job)
                @if($job->title)
                <p><span class="bold">Title:</span> {!! $job->title !!}</p>
                @endif
                @if($job->companies)
                <p><span class="bold">Company:</span>
                    @foreach($job->companies as $company)
                        {!! $company['name'] !!}
                    @endforeach
                </p>
                @endif
                @if($job->locations)
                <p><span class="bold">Location:</span>
                    @foreach($job->locations as $location)
                        @if($location['city'] && $location['state'])
                            {!! $location['city'] !!},
                            {!! $location['state'] !!}
                        @endif
                    @endforeach
                </p>
                @endif
                @if($job->dates)
                <p><span class="bold">Date(s):</span>
                    @foreach($job->dates as $key=>$date)
                        {!! $date !!} ({!! $key !!})
                    @endforeach
                </p>
                @endif
                @if($job->description)
                <p><span class="bold">Description:</span> {!! $job->description !!}</p>
                @endif
                @if($job->url)
                <p><span class="bold">URL:</span> {!! $job->url !!}</p>
                @endif
                <hr/>
            @endforeach
		</div>
	</div>
</div>
@endsection
