@extends('default')

@section('content')
     <h1>Editer</h1>
    {!! Form::open(['method'=> 'put', 'url'=> route('news.update', $post)]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titre') !!}
            {!! Form::text('title', $post->title, ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'URL') !!}
            {!! Form::text('slug', $post->slug, ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenu') !!}
            {!! Form::textarea('content', $post->content, ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group"> 
            <label>
                {!! Form::checkbox('online', 1, $post->online) !!}
                En ligne ?
            </label>
        </div>
        <button class="btn btn-primary" >Envoyer</button>
    {!! Form::close() !!}
@stop