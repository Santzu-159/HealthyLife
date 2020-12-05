@extends('layouts.sections.users.menu_activity')

@section('imc-active','active')

@section('activity-content')

<div class="container">
    <div class="container text-center mt-5">
        <h3>Calculadora de índice de masa corporal</h3>
        <div class="table-responsive col-8 ml-auto mr-auto mt-3 mb-2">
            <form method="POST" action="{{ route('users.calculadora', $user)}}">
                @csrf
            <table class="table">
                <tr>
                    <td>Sistema inglés</td>
                    <td>Sistema métrico</td>
                </tr>
                <tr>
                    <td>ESTATURA
                        <small class="form-text text-muted">En pulgadas.</small>
                    </td>
                    <td>ESTATURA
                        <small class="form-text text-muted">En metros.</small>
                    </td>
                </tr>
                <tr>
                    <td><div class="form-group row">
    
                        <div class="col-md-8 mr-auto ml-auto">
                            <input id="height" type="number" class="form-control" name="englishSystemHeight" step="0.01" value="{{(empty($actualMeasurement)==0) ? $actualMeasurement->height : 0 }}">
                        </div>
                    </div></td>
    
                    <td><div class="form-group row">
    
                        <div class="col-md-8 mr-auto ml-auto">
                            <input id="height" type="number" class="form-control" name="metricSystemHeight" step="0.01" value="{{(empty($actualMeasurement)==0) ? $actualMeasurement->height : 0 }}">
                        </div>
                    </div></td>
                </tr>
                <tr>
                    <td>PESO
                        <small class="form-text text-muted">En libras.</small>
                    </td>
                    <td>PESO
                        <small class="form-text text-muted">En kilogramos.</small></td>
                </tr>
                <tr>
                    <td><div class="form-group row">
    
                        <div class="col-md-8 mr-auto ml-auto">
                            <input id="weight" type="number" class="form-control" name="englishSystemWeight" step="0.01" value="{{(empty($actualMeasurement)==0) ? $actualMeasurement->weight : 0 }}">
                        </div>
                    </div></td>
    
                    <td><div class="form-group row">
    
                        <div class="col-md-8 mr-auto ml-auto">
                            <input id="weight" type="number" class="form-control" name="metricSystemWeight" step="0.01" value="{{(empty($actualMeasurement)==0) ? $actualMeasurement->weight : 0 }}">
                        </div>
                    </div></td>
                </tr>
                <tr>
                    <td><button type="submit" name='englishSystem' id='englishSystem' class="btn btn-primary from-control">Calcular</button></td>
                    <td><button type="submit" name='metricSystem' id='metricSystem' class="btn btn-primary from-control">Calcular</button></td>
                </tr>
            </table>
            </form>
            @if ($masaCorporal!=null)
                <input type="text" readonly name='result' class='form-control text-center' value="{{$masaCorporal}}">    
            @endif            
          </div>
    </div>    

    <div class="table-responsive mt-5 mb-4">
        <table class="table">
            <thead>
                <thead>
                    <tr>
                      <th scope="col">IMC</th>
                      <th scope="col">Nivel de peso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Por debajo de 18.5</td>
                        <td>Bajo peso</td>
                    </tr>
                    <tr>
                        <td>18.5 – 24.9</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>25.0 – 29.9</td>
                        <td>Sobrepeso</td>
                    </tr>
                    <tr>
                        <td>30.0 o más</td>
                        <td>Obeso</td>
                    </tr>
                </tbody>
            </thead>
        </table>
    </div>

</div>

@endsection