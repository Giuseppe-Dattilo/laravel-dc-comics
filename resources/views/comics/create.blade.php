@extends('layouts.main')

@section ('title', 'Crea Comic')

@section ('main-content')
    <div class="card-title d-flex align-items-center justify-content-between container">
        <h1 class="fw-bold mt-3">Crea un nuovo Comic</h1>
        <a href="{{ route('comics.index')}}" class="btn btn-small btn-secondary ms-5 mt-2">Indietro</a>
    </div>
    <hr class="mb-4">
    <div class="card container mb-5">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('comics.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nome Comic</label>
                            <input type="text" class="form-control" id="title" placeholder="nome" name="title" value{{ old('title') }}>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie Comic</label>
                            <input type="text" class="form-control" id="series" placeholder="nome" name="series"  value{{ old('series') }}>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipo del Comic</label>
                            <input type="text" class="form-control" id="type" placeholder="tipo" name="type" value{{ old('type') }}>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Logo</label>
                            <input type="url" class="form-control" id="thumb" placeholder="logo" name="thumb" value{{ old('thumb') }}>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" value{{ old('description') }}></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data</label>
                            <input type="text" class="form-control" id="sale_date" placeholder="Data" name="sale_date" value{{ old('sale_date') }}>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="number" class="form-control" id="price" placeholder="Prezzo" name="price" value="0" value{{ old('price') }}>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artisti</label>
                            <textarea class="form-control" name="artists" id="artists" cols="10" value{{ old('artists') }}></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="writers" class="form-label">Scrittori</label>
                            <textarea class="form-control" name="writers" id="writers" cols="10" value{{ old('writers') }}></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-small btn-success">Salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection