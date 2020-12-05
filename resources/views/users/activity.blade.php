@extends('layouts.sections.users.menu_activity')

@section('measurement-active','active')

@section('activity-content')

<div class="container">    
    <div class="container text-center mt-5 mb-5">
        <h3>Registro de medidas</h3>
        <div class="container col-6 ml-auto mr-auto mt-3">
            <h4>Medidas más recientes</h4>
            @if (empty($actualMeasurement)==1)
                <div class="alert alert-warning" role="alert">
                ¡Aún no has registrado tus medidas!
                </div>
            @else
                <div class="form-group row">
                    <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>

                    <div class="col-md-6">
                        <input id="weight" type="text" readonly class="form-control" name="weight" step="0.01" value="{{$actualMeasurement->weight}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

                    <div class="col-md-6">
                        <input id="height" type="text" readonly class="form-control" name="height" step="0.01" value="{{$actualMeasurement->height}}">
                    </div>
                </div>
            @endif
        </div>
        <div class="container col-6 ml-auto mr-auto mt-3">
            <h4>Actualizar medidas</h4>
            <form method="POST" action="{{ route('measurements.store') }}">
                @csrf                
                <div class="form-group row">
                    <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>

                    <div class="col-md-6">
                        <input id="weight" type="number" class="form-control" name="weight" step="0.01" value="{{(empty($actualMeasurement)==0) ? $actualMeasurement->weight : 0 }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

                    <div class="col-md-6">
                        <input id="height" type="number" class="form-control" name="height" step="0.01" value="{{(empty($actualMeasurement)==0) ? $actualMeasurement->height : 0 }}">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="ml-auto mr-auto">
                        <button type="submit" class="btn btn-warning">
                            {{ __('Actualizar mis medidas') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        @if ($measurements!=null)
            <div class="container col-6 ml-auto mr-auto mt-3">
                <h4>Medidas antiguas</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">Peso</th>
                              <th scope="col">Altura</th>
                              <th scope="col">Fecha de Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($measurements as $measurement)
                            <tr>
                                <td>{{($measurement->weight!=null) ? $measurement->weight.' kg' : "Desconocido" }}</td>
                                <td>{{($measurement->height!=null) ? $measurement->height : "Desconocida" }}</td>
                                <td>{{$measurement->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$measurements->appends(Request::except("page"))->links()}}
                </div>
            </div>    
        @endif
    </div>
</div>

@endsection