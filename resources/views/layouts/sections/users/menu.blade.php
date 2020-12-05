@if (!Auth::check() || Auth::user()->id!=$user->id)
<script>window.location = "/";</script>
@endif

@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
@include('layouts.sections.error')

<div class="alert alert-info alert-dismissible fade show" role="alert">
    Este perfíl es privado y solo tu puedes verlo.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<div class='container mt-2'>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link text-secondary @yield('perfil-active')" href="{{route('users.show', $user)}}" >Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary @yield('diets-active')" href="{{route('users.favoritediets', $user)}}">Dietas favoritas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary @yield('activity-active')" href="{{route('users.activity', $user)}}">Actividad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary @yield('diary-active')" href="{{route('users.diary', $user)}}">Mi diario</a>
                </li>
            </ul>
        </div>
        @yield('menu-content')
    </div>
</div>
</div>
@endsection