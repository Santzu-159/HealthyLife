@php
    $diets = \App\Http\Controllers\DietController::listDiets($category);
@endphp
@extends('layouts.app')

@section('content')
    <div class='container txt-style-intro'>
        <div class="table-responsive">
            <table class="table table-bordered">
                @foreach ($diets as $diet)
                    <tr>
                        <td><a href="{{route('diets.show',$diet)}}">{{$diet->name}}</a></td>         
                    </tr>
                @endforeach
            </table>
            {{$diets->appends(Request::except("page"))->links()}}
          </div>        
    </div>
@endsection
