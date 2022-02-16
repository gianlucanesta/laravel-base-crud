@extends('layouts.app')

@section('main_content')

    <h1>Lista Comics</h1>

    {{-- {{ dd($comics)}} --}}
    @foreach ($comics as $comic)
        <div>
            <h2>{{ $comic->title}}</h2>
            <div>Tipo: {{ $comic->type}}</div>
        </div>
    @endforeach
    
@endsection