@extends('layouts/main') 

@section('main')
<main>

    <h2>Add a new comic!</h2>

    @if($errors->all())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif

    <div class="container d-flex justify-content-center">

        <form action=" {{ route('comics.store') }} " method="POST">
          @csrf 

            <div class="input-group mb-3">
                <label for="title">Title</label>
                <input class="mx-3" type="text" id="title" name="title" value="{{old('title')}}" required>
            </div>

            <div class="input-group mb-3">
                <label for="description">Description</label>
                <textarea class="mx-3" id="description" name="description" value="{{old('description')}}" required></textarea>
            </div>

            <div class="input-group mb-3">
                <label for="thumb">Thumbnail</label>
                <input class="mx-3" type="text" id="thumb" name="thumb" value="{{old('thumb')}}" required>
            </div>

            <div class="input-group mb-3">
                <label for="price">Price</label>
                <input class="mx-3" type="number" id="price" name="price" value="{{old('price')}}" required>
            </div>

            <div class="input-group mb-3">
                <label for="series">Series</label>
                <input  class="mx-3" type="text" id="series" name="series" value="{{old('series')}}">
            </div>

            <div class="input-group mb-3">
                <label for="sale_date">Sale Date</label>
                <input class="mx-3" type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}" required>
            </div>

            <div class="input-group mb-3">
                <label for="type">Type</label>
                <input class="mx-3" type="text" id="type" name="type" value="{{old('type')}}">
            </div>

            <div class="input-group mb-3">
                <label for="artists">Artists</label>
                <textarea class="mx-3" type="text" id="artists" name="artists">{{old('artists')}}</textarea>
            </div>

            <div class="input-group mb-3">
                <label for="writers">Writers</label>
                <textarea class="mx-3" type="text" id="writers" name="writers">{{old('writers')}}</textarea>
            </div>

            <button type="submit">add</button>
        </form>

      </div>

</main>
@endsection