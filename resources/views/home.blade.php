@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<img id="image1" class="image" src="kelias/iki/paveiksliuko.png" alt="Petras Petraitis" width="200" height="200"/>
<img id="image2" class="image" src="kelias/iki/paveiksliuko.png" alt="Petras Petraitis" width="200" height="200"/>


@endsection
