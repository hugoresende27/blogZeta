@extends('layouts.app')

@section('content')
<style>

    .meuBtn:hover{
        background-color: rgb(248, 248, 248);
        color: rgb(0, 0, 0);
        border: none;
        transform: scale(1.5);
    }

</style>


<div class="text-center mb-4">
    <a href="/posts/create" class="btn btn-success meuBtn">Criar Post</a>
</div>   


        <h1>Últimos Posts</h1>

        @if (count($posts)>1)
        
        <div class="card text-black p-3">
            <ul class="list-group list-group-flush">

            @foreach ($posts as $p)
            {{-- {{ dd($p) }} --}}
          
                      <li class="list-group-item">  
                          <h3> <a href="/posts/{{ $p->id }}"> {{ $p->title }} </a></h3>  
                          {{-- <p class="">{{ $p->body }}</p>      --}}
                          <small>Escrito em {{ $p->created_at }}</small>
                      </li>
                      
               
            @endforeach
        </ul>
    </div>

        @else
            <p>Sem posts de momento</p>
        @endif
    
       
        
    
@endsection
