@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <h1>Job Board API Demo</h1>
            <hr/>
			@foreach($jobs as $job)
                <pre>
                    {{ print_r($job) }}
                </pre>
            @endforeach
		</div>
	</div>
</div>
@endsection
