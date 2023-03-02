@extends('layouts.main')

@section ('title', 'Crea Comic')

@section ('main-content')
    <div class="card-title d-flex align-items-center justify-content-between container">
        <h1 class="fw-bold mt-3">Modifica un Comic</h1>
        <a href="{{ route('comics.index')}}" class="btn btn-small btn-secondary ms-5 mt-2">Indietro</a>
    </div>
    <hr class="mb-4">
    <div class="card container mb-5">
        <div class="card-body">
           @include('includes.comics.form')
        </div>
    </div>
@endsection