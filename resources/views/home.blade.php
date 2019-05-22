@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('dashboard') }}</div>
			 <div class="card-body">

			<p>My name: {{Auth::user()->name}}</p>
			<p>My Email: {{Auth::user()->email}}</p>
			<img alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>
               
                    @if (!empty($msg))
                        <div class="alert alert-info" role="alert">
                            {{ __($msg) }}
                        </div>
                    @endif

                    @if (!empty($wifidog_uri))
                    <a class="btn btn-success" href={{ $wifidog_uri }}>start internet</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
