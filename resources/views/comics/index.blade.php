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
            <a href="{{ route('comics.show', $comic->id) }}"><h5 class="card-title">{{ $comic->title }}</h5></a>
            <h6 class="card-subtitle mb-2 text-muted">{{ $comic->series }}</h6>
            <p class="card-text">{{ $comic->description }}</p>
            <p class="card-text">{{ $comic->sale_date}}</p>
            <p class="card-text">{{ $comic->price}}</p>
            <p class="card-text">{{ $comic->type}}</p>
        </div>
    </div>
    @empty
    @endforelse
</div>

@endsection