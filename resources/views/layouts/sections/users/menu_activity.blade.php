@extends('layouts.sections.users.menu')

@section('activity-active','active')

@section('menu-content')

<div class='container mt-2'>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link text-secondary @yield('measurement-active')" href="{{route('users.activity', $user)}}" >Medidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary @yield('imc-active')" href="{{route('users.imc', $user)}}">Indice de Masa Corporal</a>
                </li>
            </ul>
        </div>
        @yield('activity-content')
    </div>

@endsection