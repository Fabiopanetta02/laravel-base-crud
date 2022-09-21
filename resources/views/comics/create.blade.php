@extends('layouts.main')

@section('title', 'Crea Fumetto')
    
@section('content')
<div class="card-title">
    <h1>Crea Fumetto</h1>
</div>
<div class="card-body">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" placeholder="Titolo Fumetto" name="title">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" id="series" placeholder="Serie" name="series">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" id="price" placeholder="Prezzo" name="price">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale_date</label>
                    <input type="text" class="form-control" id="sale_date" placeholder="Data Sconto" name="sale_date">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" placeholder="Tipo" name="type">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="text" class="form-control" id="thumb" placeholder="Foto Copertina" name="thumb">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="10" name="description"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white d-flex justify-content-between align-items-center">
            <div><a class="btn btn-primary me-2" href="{{ route('comics.index') }}">Torna alla lista</a></div>
            <div>
                <button type="reset" class="btn btn-secondary">Cancella</button>
                <button type="submit" class="btn btn-success">Salva</button>
            </div>
        </div>
    </form>
</div>
@endsection