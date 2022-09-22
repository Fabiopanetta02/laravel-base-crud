@extends('layouts.main')

@section('title', 'Comics')
    
@section('content')
<a href="{{ route('comics.create') }}" class="btn btn-secondary">Crea Fumetto</a>
<div class="d-flex flex-wrap">
    @forelse ($comics as $comic)
    <div class="card mx-3 my-5" style="width: 18rem;">
        <div class="card-body">
            @if($comic->thumb) 
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
            @endif
            <h5 class="card-title">{{ $comic->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $comic->series }}</h6>
            <p class="card-text">{{ $comic->description }}</p>
            <p class="card-text">{{ $comic->sale_date}}</p>
            <p class="card-text">{{ $comic->price}}</p>
            <p class="card-text">{{ $comic->type}}</p>
            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-sm btn-primary">Vedi</a>
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-secondary">Edit</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
            </form>
        </div>
    </div>
    @empty
    @endforelse
</div>

@endsection