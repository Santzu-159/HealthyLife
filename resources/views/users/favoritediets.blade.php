@extends('layouts.sections.users.menu')

@section('diets-active','active')

@section('menu-content')
<div class='container mt-2 mb-4'>
    @if (count($diets)==0)
        <div class="alert alert-warning mt-3" role="alert">
            Aún has añadido dietas a tu lista de favoritos.
        </div>
    @else
    <div class='container txt-style-intro pr-0'>
        <div class="table-responsive">
            <table class="table table-bordered">
                @foreach ($diets as $diet)
                    <tr class="row container pr-0">
                        <td class="col-10"><a href="{{route('diets.show',$diet)}}">{{$diet->name}}</a></td>
                        <td class="col-2">
                            <form name='del' action='{{route('diets.destroy', $diet)}}' method='POST'>
                                @method("DELETE")
                                @csrf
                            <button type="submit" onclick="return confirm('¿Eliminar de favoritos?')" class="btn btn-danger">Eliminar</button></td>
                            </form>
                    </tr>
                @endforeach
            </table>
            {{$diets->appends(Request::except("page"))->links()}}
          </div>        
    </div>
    @endif
</div>
@endsection