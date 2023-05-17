@extends('layouts/main') 

@section('main')
<main>

    <h2>Change the comic info!</h2>

    <div class="container d-flex justify-content-center">

        <form action=" {{ route('comics.update', $comic->id) }} " method="POST">
            @csrf 
            @method('PUT')

            <div class="input-group mb-3">
                <label for="title">Title</label>
                <input class="mx-3" type="text" id="title" name="title" value="{{$comic->title}}">
            </div>

            <div class="input-group mb-3">
                <label for="description">Description</label>
                <textarea class="mx-3" id="description" name="description"> {{$comic->description}} </textarea>
            </div>

            <div class="input-group mb-3">
                <label for="thumb">Thumbnail</label>
                <input class="mx-3" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>

            <div class="input-group mb-3">
                <label for="price">Price</label>
                <input class="mx-3" type="number" id="price" name="price" value="{{$comic->price}}">
            </div>

            <div class="input-group mb-3">
                <label for="series">Series</label>
                <input  class="mx-3" type="text" id="series" name="series" value="{{$comic->series}}">
            </div>

            <div class="input-group mb-3">
                <label for="sale_date">Sale Date</label>
                <input class="mx-3" type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="input-group mb-3">
                <label for="type">Type</label>
                <input class="mx-3" type="text" id="type" name="type" value="{{$comic->type}}">
            </div>

            <div class="input-group mb-3">
                <label for="artists">Artists</label>
                <textarea class="mx-3" type="text" id="artists" name="artists"> {{$comic->artists}} </textarea>
            </div>

            <div class="input-group mb-3">
                <label for="writers">Writers</label>
                <textarea class="mx-3" type="text" id="writers" name="writers"> {{$comic->writers}} </textarea>
            </div>

            <button type="submit">change</button>
        </form>

      </div>

</main>
@endsection