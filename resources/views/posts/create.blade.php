@extends('default')

@section('content')
     <h1>Ajouter un nouvel article</h1>
    {!! Form::open(['url'=> route('news.store')]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titre') !!}
            {!! Form::text('title', null, ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'URL') !!}
            {!! Form::text('slug', null, ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenu') !!}
            {!! Form::textarea('content', null, ['class'=> 'form-control']) !!}
        </div>
        <button class="btn btn-primary" >Enregistrer</button>
    {!! Form::close() !!}
@stop