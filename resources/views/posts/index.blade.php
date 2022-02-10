@extends('layouts.app')

@section('content')


        <h1>Últimos Posts</h1>

        @if (count($posts)>1)

            @foreach ($posts as $p)
            {{-- {{ dd($p) }} --}}
                <div class="well">
                    <h3> <a href="/posts/{{ $p->id }}"> {{ $p->title }} </a></h3>
                    <p>{{ $p->body }}</p>
                    <small>Escrito em {{ $p->created_at }}</small>
                </div>
            @endforeach

        @else
            <p>Sem posts de momento</p>
        @endif
    
       
        
    
@endsection
