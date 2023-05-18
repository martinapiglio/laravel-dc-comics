@extends('layouts/main') 

@section('main')
<main>

    <h2>Add a new comic!</h2>

    {{-- @if($errors->all())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div class="container d-flex justify-content-center">

        <form action=" {{ route('comics.store') }} " method="POST">
          @csrf 

            <div class="input-group mb-3">
                <label for="title">Title</label>
                <input class="mx-3 form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}" required>
                
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="description">Description</label>
                <textarea class="mx-3 form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{old('description')}}" required></textarea>
                            
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="thumb">Thumbnail</label>
                <input class="mx-3 form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb')}}" required>
                                
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="price">Price</label>
                <input class="mx-3 form-control @error('price') is-invalid @enderror" type="number" id="price" name="price" value="{{old('price')}}" required>
                            
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="series">Series</label>
                <input  class="mx-3 form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series')}}">
                            
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="sale_date">Sale Date</label>
                <input class="mx-3 form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}" required>
                            
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="type">Type</label>
                <input class="mx-3 form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type')}}">
                            
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="artists">Artists</label>
                <textarea class="mx-3 form-control @error('artists') is-invalid @enderror" type="text" id="artists" name="artists">{{old('artists')}}</textarea>
                            
                @error('artists')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="writers">Writers</label>
                <textarea class="mx-3 form-control @error('writers') is-invalid @enderror" type="text" id="writers" name="writers">{{old('writers')}}</textarea>
                            
                @error('writers')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit">add</button>
        </form>

      </div>

</main>
@endsection