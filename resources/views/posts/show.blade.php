@extends('layouts.app')

@section('content')

    <div class="card text-white p-3" style="background-color: rgb(1, 26, 31)">

            <h1>{{ $post->title }}</h1>   
            
            <small>Escrito em {{ $post->created_at }}</small>
        <hr>
            <p> {{ $post->body }}</p>       
        
    </div>

 
@endsection
