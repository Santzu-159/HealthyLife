@extends('layouts.app')

@section('content')
    <div class='container txt-style-intro'>        
        <h1>{{$diet->name}}</h1>        
        @if (!$fav)
        <div class="text-right">
            <form method="POST" action="{{route('diets.addtofavorite', $diet)}}">
            @csrf
                <button class='btn btn-success'>Añadir a Favoritos</button>
            </form>
        </div>
        @endif
        <div class="mt-5">
            @include("layouts.sections.dietas.".$diet->category.".".$diet->content)
        </div>        
    </div>
@endsection