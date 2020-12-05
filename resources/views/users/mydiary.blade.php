@extends('layouts.sections.users.menu')

@section('diary-active','active')

@section('menu-content')

<div class='container mb-5'>
    <div class="container mt-4 mb-5">
        <form class="form-inline" action="{{route('diaries.store')}}" method="POST">
            @csrf
            <textarea name='content' class='form-control col-lg-11 col-md-10 col-sm-10 col-10' placeholder='¿Cuál es tu pensamiento de hoy?'></textarea>
            <button type="submit" class='ml-2 mt-auto btn alert-primary btn-outline-success'>Enviar</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table text-center">
          @foreach ($mydiary as $record)
              <tr>
                  <td>
                    <div class="card">
                        <div class="card-body">
                            {{$record->content}}
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                            {{$record->created_at}}
                        </div>
                        </div>
                      </div>
                  </td>
              </tr>
          @endforeach
        </table>
        <div class='container'>
            {{$mydiary->appends(Request::except("page"))->links()}}
        </div>
      </div>

</div>
@endsection