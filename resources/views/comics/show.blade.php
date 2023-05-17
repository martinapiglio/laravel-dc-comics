@extends('layouts/main') 

@section('main')
<main>

    <div class="container d-flex justify-content-center gap-3">

        <div id="comic" class="col-5">
            <img src="{{ $comic->thumb }}" alt="comic-poster">
        </div>

        <div>
            <h4 class="pb-4"> {{ $comic->title }} </h4>
            <p> {{ $comic->description }} </p>
            <ul class="list-group">
                <li class="list-group-item"> <strong>Series:</strong> {{ $comic->series }}</li>
                <li class="list-group-item"><strong>Price:</strong> {{ $comic->price }}</li>
                <li class="list-group-item"><strong>On sale starting from:</strong> {{ $comic->sale_date }}</li>
                <li class="list-group-item"><strong>Artists:</strong> {{ $comic->artists }}</li>
                <li class="list-group-item"><strong>Written by:</strong> {{ $comic->writers }}</li>
            </ul>
        </div>

    </div>

</main>
@endsection