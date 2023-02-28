@extends('layouts.main')

@section ('title', 'Comics')

@section ('main-content')
    <section id="comics">
        <div class="comics-top">
            <div class="container">
                <h4>CURRENT SERIES</h4>
                <div>
                    @foreach ($comics as $comic)
                        <div class="card">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <h5> {{ $comic->series }}</h5>
                        </div>      
                    @endforeach
                 </div>
                <div class="comics-button">
                    <button>LOAD MORE</button>
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