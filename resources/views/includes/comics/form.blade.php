@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

@if($comic->exists)
<form action="{{ route('comics.update', $comic->id) }}" method="POST" novalidate>
    @method('PUT')
@else
<form action="{{ route('comics.store') }}" method="POST" novalidate>
@endif

@csrf
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label for="title" class="form-label">Nome Comic</label>
            <input type="text" class="form-control" id="title" placeholder="nome" name="title" value{{ old('title', $comic->title) }}>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="series" class="form-label">Serie Comic</label>
            <input type="text" class="form-control" id="series" placeholder="nome" name="series"  value{{ old('series', $comic->series) }}>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="type" class="form-label">Tipo del Comic</label>
            <input type="text" class="form-control" id="type" placeholder="tipo" name="type" value{{ old('type', $comic->type) }}>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="thumb" class="form-label">Logo</label>
            <input type="url" class="form-control" id="thumb" placeholder="logo" name="thumb" value{{ old('thumb', $comic->thumb) }}>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" value{{ old('description', $comic->description) }}></textarea>
        </div>
    </div>
    <div class="col-4">
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="text" class="form-control" id="sale_date" placeholder="Data" name="sale_date" value{{ old('sale_date', $comic->sale_date) }}>
        </div>
    </div>
    <div class="col-4">
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" placeholder="Prezzo" name="price" value="0" value{{ old('price', $comic->price) }}>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <textarea class="form-control" name="artists" id="artists" cols="10" value{{ old('artists', $comic->artists) }}></textarea>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <textarea class="form-control" name="writers" id="writers" cols="10" value{{ old('writers', $comic->writers) }}></textarea>
        </div>
    </div>
    <div class="d-flex justify-content-start">
        <button type="submit" class="btn btn-small btn-success">Salva</button>
    </div>
</div>
</form>