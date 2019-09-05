@extends('default')

@section('content')
    <h1>Raccoucir un nouveau lien</h1>

<form action="{{ route('link.store') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="">Lien à raccourcir</label>
          <input type="text" name="url" id="url" class="form-control" placeholder="http://....." >
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Raccourcir</button>
        </div>
    </form>
@stop