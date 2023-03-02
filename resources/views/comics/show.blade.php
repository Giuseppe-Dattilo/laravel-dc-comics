@extends('layouts.main')

@section ('title', $comic->title)

@section ('main-content')
<div class="card container my-5">
    <div class="card-header bg-white mb-3 d-flex align-items-center justify-content-between">
        <h1>{{ $comic->title }}</h1>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-0 me-3">Elimina</button>
        </form>
    </div>
    <div class="card-body">
       <div class="row">
            @if($comic->thumb)
                <div class="col-3 text-center">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title}}">
                </div>
            @endif
            <div class="col">
                <h3 class="text-muted">{{ $comic->title }}</h3>
                <div>{!! $comic->description !!}</div>
                <div><strong>Serie: </strong>{{ $comic->series }}</div>
                <div><strong>Prezzo: </strong>{{ $comic->price }}</div>
            </div>
        </div>
        <div class="card-footer bg-white d-flex justify-content-end">  
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning me-2">Modifica</a>
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">Indietro</a>
        </div>      
    </div>
</div>

@endsection