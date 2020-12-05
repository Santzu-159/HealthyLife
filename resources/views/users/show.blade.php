@extends('layouts.sections.users.menu')

@section('perfil-active','active')

@section('menu-content')
<div class="card">
    <div class="card-body">
      <h2 class="card-title text-center bg-darkorange text-light font-weight-bold">{{$user->name}}</h2>
      <p class="card-text ">
        <ul class="list-group text-left list-group-flush">
            <li class="list-group-item"><b>Email:</b> {{$user->email}}</li>
            <li class="list-group-item"><b>Día de nacimiento:</b>  {{($user->dateofbirth!=null) ? $user->dateofbirth : "Desconocido"}}</li>
            <li class="list-group-item"><b>Peso:</b>  {{(empty($actualMeasurement)==0) ? $actualMeasurement->weight.' kg' : "Desconocido" }}</li>
            <li class="list-group-item"><b>Altura:</b>  {{(empty($actualMeasurement)==0) ? $actualMeasurement->height : "Desconocida" }}</li>
            <li class="list-group-item"><b>Género:</b> {{($user->gender!=null) ? $user->gender : "Desconocido" }}</li>
            <li class="list-group-item"><b>Fumador:</b> {{($user->smoker!=null) ? $user->smoker : "Desconocido" }}</li>
            <li class="list-group-item"><b>Atleta:</b> {{($user->athlete!=null) ? $user->athlete : "Desconocido" }}</li>
          </ul>
      </p>
      <div class="text-center">
        <a href="{{route('users.edit', $user)}}" class="btn btn-dark">Configuración</a>
      </div>
      <div class="row">
        <div class="card-footer container text-muted mt-5">
            <div class="card">
                <h5 class="card-header">Dieta recomendada</h5>
                <div class="card-body">
                  @if ($user->diet_id!=null)
                  
                    <h5 class="card-title"><a href="{{route('diets.show',$user->diet)}}">{{$user->diet->name}}</a></h5>
                    <p class="card-text">¿No encaja contigo? No te preocupes, puedes volver a pedir que te recomendemos una dieta tantas veces como quieras.</p>
                  @else
                    <h5 class="card-title">¡Aún no tienes una dieta recomendada!</h5>
                    <p class="card-text">¿Buscas una dieta? Nosotros te recomendamos una.</p>
                  @endif
                  <a href="{{route('diets.recommended', $user)}}" class="btn btn-primary">Recomiendame una dieta</a>
                </div>
              </div>
        </div>
    </div>
    </div>
  </div>
@endsection