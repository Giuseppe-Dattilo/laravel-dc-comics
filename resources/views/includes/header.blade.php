<header class="container">
    <nav>
        <figure>
            <a href="{{route('home')}}"><img id="logo" src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="DC"></a>
        </figure>
        <ul>
           <li><a href="{{ url('/')}}">Home</a></li>
           <li><a href="{{ route('characters')}}">characters</a></li>
           <li><a href="{{ route('comics')}}">comics</a></li>
           <li><a href="{{ route('tv')}}">tv</a></li>
           <li><a href="{{ route('games')}}">games</a></li>
           <li><a href="{{ route('collectibles')}}">collectibles</a></li>
           <li><a href="{{ route('videos')}}">videos</a></li>
           <li><a href="{{ route('fans')}}">fans</a></li>
           <li><a href="{{ route('news')}}">news</a></li>
           <li><a href="{{ route('shop')}}">shop</a></li>
        </ul>
        <div class="search">
            <form action="#">
                <input type="text" placeholder="search">
                <i class="fas fa-magnifying-glass"></i>
            </form>
        </div>
    </nav>
</header>
<div class="jumbotron"></div> 