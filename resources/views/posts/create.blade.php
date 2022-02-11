@extends('layouts.app')

@section('content')

<style>

    .meuBtn{
        font-weight: 900;
        font-family: 'Consolas',sans-serif;
        font-size: 1rem;
        border: none;
    }
    .meuBtn:hover{
        background-color: darkgreen;
        color: #000;
        border: none;
        transform: scale(1);
        font-size: 1.2rem;
    }

</style>

        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:rgb(105, 236, 253);font-size:5rem;">Criar um Post</h1>

        {!! Form::open(['route' => 'guardar_post', 'method'=> 'POST']) !!}

            <div class="form-group display-4 text-center">
                {{ Form::label('title','Titulo') }}
                {{ Form::text('title','', ['class'=>'form-control m-3','placeholder'=>'titulo aqui']) }}
                {{ Form::label('body','Texto') }}
                {{ Form::textarea('body','', ['class'=>'form-control m-3','placeholder'=>'texto do post aqui']) }}
            
                {{ Form::submit('POSTAR', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

    
    
       
        
    
@endsection
