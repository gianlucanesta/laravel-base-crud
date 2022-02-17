@extends('layouts.app')

@section('main_content')

    {{-- <h1>{{ $comic ->title}}</h1> --}}

    {{-- {{ dd($comic) }} --}}

    <div class="card" style="width: 18rem;">
        <img src="{{ $comic ->thumb}}" class="card-img-top" alt="{{ $comic ->title}}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic ->title}}</h5>
            <p>Price: {{ $comic ->price}} $</p>
            <p>Series: {{ $comic ->series}}</p>
            <p>Sale date: {{ $comic ->sale_date}}</p>
            <p>Type: {{ $comic ->type}}</p>
            <p class="card-text">{{ $comic ->description}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


@endsection