@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header text-light bg-menuColor"><h3>{{ __('Bienvenida/o') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Te has unido a Healthy Life.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection