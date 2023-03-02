@extends('layouts.main')

@section ('title', 'Comics')

@section ('main-content')

    <section id="comics">
        <div class="comics-top">
            <div class="container">
                <h4 class="text-center fw-bold">CURRENT SERIES</h4>
                <div class="d-flex mx-5 card-container">
                    @foreach ($comics as $comic)
                        <div class="card d-flex my-3 flex-column justify-content-between align-items-center">
                            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}" >
                            <h5 class="fw-bold"> {{ $comic->series }}</h5>
                            <a href="{{ route ('comics.show', $comic->id) }}" class="btn btn-small btn-primary">Vedi</a>
                        </div>      
                    @endforeach
                 </div>
                <div class="text-center">
                    
                    <a href="{{ route ('comics.create') }}"><button>Crea</button></a>
                </div>
            </div>
        </div>
        <div class="comics-bottom bg-primary">
            <div class="container">
                <ul>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="digital">
                            <span>DIGITAL COMICS</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="merchandise">
                            <span>MERCHANDISE</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="subscription">
                            <span>SUBSCRIPTION</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="shop">
                            <span>COMIC SHOP LOCATOR</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="visa">
                            <span>DC POWER VISA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection