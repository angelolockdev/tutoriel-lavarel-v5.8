@extends('default')

@section('content')
    <h1>{{ $title }}</h1>      
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam adipisci error velit non nihil explicabo et magnam repudiandae, eos, illo ea quas corrupti mollitia dolorem autem expedita delectus magni eaque!</p>
    
    <ul>
        @forelse ($numbers as $item)
        <li>{{ $item }}</li>
        
        @empty
            <li>Aucun chiffre !</li>  
        @endforelse 
    </ul>
    @endsection
    
        

@section('sidebar')
    @parent
    <h3> A propos </h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium laboriosam incidunt nostrum omnis earum, doloremque quo corporis voluptate molestiae, voluptatibus veniam quos culpa, nihil sequi autem? Incidunt quaerat modi ipsa?</p>
@endsection