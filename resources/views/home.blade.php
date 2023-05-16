@extends('layouts/main')

@section('main')
<main>

    <div id="current-series-label">
        current series
    </div>

    <div class="container">

        <div class="row gy-5">
    
            @foreach($comics as $comic)

                <div class="col-2" id="current-series-container">

                    <div class="current-series">

                        <a href="{{ route('comics.show', $comic->id) }}">
                            <img class="img-fluid" src=" {{ $comic['thumb'] }} " alt="comic-poster">
                            <div class='title pt-2'>
                                {{ $comic['series'] }} 
                            </div>
                        </a>

                    </div>

                </div>

            @endforeach
    
        </div>

        <button class="mt-4">Load more</button>

    </div>

</main>
@endsection

@section('buy-comics')
<section id="buy-comics-section">

    <div class="container">

        <ul>
            @foreach($buyComicsLinks as $buyComic)
                <li>
                    <img src=" {{ Vite::asset($buyComic['icon']) }} " alt="">
                    {{ $buyComic['title'] }} 
                </li>
            @endforeach
        </ul>

    </div>
    
</section>
@endsection