@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right required">{{ __('Nombre Completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right required">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email-confirm" class="col-md-4 col-form-label text-md-right required">{{ __('Confirmar Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email-confirm" type="email" class="form-control" name="email_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right required">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right required">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="dateofbirth" type="date" class="form-control" name="dateofbirth">

                                @error('dateofbirth')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select form-control" name='gender'>
                                    @php
                                        $genders = ['No quiero decirlo','Hombre','Mujer','No Binario'];
                                    @endphp
                                    @foreach ($genders as $gender)
                                        @if ($gender==old('gender'))
                                            <option selected>{{$gender}}</option>
                                        @else
                                            <option>{{$gender}}</option>
                                        @endif
                                    @endforeach
                                  </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="smoker" class="col-md-4 col-form-label text-md-right">{{ __('Fumador/a') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select form-control" name='smoker'>
                                    @php
                                        $smokers = ['No mencionarlo','No Fumo','Fumador/a'];
                                    @endphp
                                    @foreach ($smokers as $smoker)
                                        @if ($smoker==old('smoker'))
                                            <option selected>{{$smoker}}</option>
                                        @else
                                            <option>{{$smoker}}</option>
                                        @endif
                                    @endforeach
                                  </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="athlete" class="col-md-4 col-form-label text-md-right">{{ __('Atleta') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select form-control" name='athlete'>
                                    @php
                                        $athletes = ['No mencionarlo','No hago deporte','Hago deporte'];
                                    @endphp
                                    @foreach ($athletes as $athlete)
                                        @if ($athlete==old('athlete'))
                                            <option selected>{{$athlete}}</option>
                                        @else
                                            <option>{{$athlete}}</option>
                                        @endif
                                    @endforeach
                                  </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrame') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
