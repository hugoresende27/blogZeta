@extends('layouts.app')

@section('content')

<style>

    .meuBtn:hover{
        background-color: darkgreen;
        color: white;
        border: none;
        transform: scale(1.5);
    }

</style>


<div class="text-center mb-4">
    <a href="/posts" class="btn btn-info meuBtn">Voltar</a>
</div>    

    <div class="card text-white p-3" style="background-color: rgb(1, 26, 31)">

            <h1>{{ $post->title }}</h1>   
            
            <small>Escrito em {{ $post->created_at }}</small>
        <hr>
            <p> {{ $post->body }}</p>       
        
    </div>

 
@endsection
