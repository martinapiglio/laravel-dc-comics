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
                <input class="mx-3 form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}" required>

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="description">Description</label>
                <textarea class="mx-3 form-control @error('description') is-invalid @enderror" id="description" name="description" required> {{old('description') ?? $comic->description}} </textarea>
            
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="thumb">Thumbnail</label>
                <input class="mx-3 form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $comic->thumb}}" required>
            
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="price">Price</label>
                <input class="mx-3 form-control @error('price') is-invalid @enderror" type="text" step="0.01" id="price" name="price" value="{{old('price') ??  str_replace('$', '', $comic->price) }}" required>
            
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="series">Series</label>
                <input  class="mx-3 form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series') ?? $comic->series}}">
            
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="sale_date">Sale Date</label>
                <input class="mx-3 form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}" required>
            
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="type">Type</label>
                <input class="mx-3 form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type') ?? $comic->type}}">
            
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="artists">Artists</label>
                <textarea class="mx-3 form-control @error('artists') is-invalid @enderror" type="text" id="artists" name="artists"> {{old('artists') ?? $comic->artists}} </textarea>
            
                @error('artists')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="writers">Writers</label>
                <textarea class="mx-3 form-control @error('writers') is-invalid @enderror" type="text" id="writers" name="writers"> {{old('writers') ?? $comic->writers}} </textarea>
            
                @error('writers')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit">change</button>
        </form>

      </div>

</main>
@endsection