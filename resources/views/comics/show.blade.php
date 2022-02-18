@extends('layouts.app')

@section('main_content')

    {{-- <h1>{{ $comic ->title}}</h1> --}}

    {{-- {{ dd($comic) }} --}}
    <div class="container">
        <div class="card" style="">
            <img src="{{ $comic ->thumb}}" class="card-img-top" alt="{{ $comic ->title}}" style="width:250px;">
            <div class="card-body">
                <h5 class="card-title">{{ $comic ->title}}</h5>
                <p class="card-text">Price: {{ $comic ->price}} $</p>
                <p class="card-text">Series: {{ $comic ->series}}</p>
                <p class="card-text">Sale date: {{ $comic ->sale_date}}</p>
                <p class="card-text">Type: {{ $comic ->type}}</p>
                <p class="card-text">Description: {{ $comic ->description }}</p>
                <a href="{{route ('comics.edit', ['comic' => $comic->id])}}" class="btn btn-primary">Edit</a>

                <div>
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id ])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection