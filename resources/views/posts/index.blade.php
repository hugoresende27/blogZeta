@extends('layouts.app')

@section('content')


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
