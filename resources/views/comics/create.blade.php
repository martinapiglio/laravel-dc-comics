@extends('layouts/main') 

@section('main')
<main>

    <h2>Add a new comic!</h2>

    <div class="container d-flex justify-content-center">

        <form action=" {{ route('comics.store') }} " method="POST">
          @csrf 

            <div class="input-group mb-3">
                <label for="title">Title</label>
                <input class="mx-3" type="text" id="title" name="title">
            </div>

            <div class="input-group mb-3">
                <label for="description">Description</label>
                <textarea class="mx-3" id="description" name="description"></textarea>
            </div>

            <div class="input-group mb-3">
                <label for="thumb">Thumbnail</label>
                <input class="mx-3" type="text" id="thumb" name="thumb">
            </div>

            <div class="input-group mb-3">
                <label for="price">Price</label>
                <input class="mx-3" type="text" id="price" name="price">
            </div>

            <div class="input-group mb-3">
                <label for="series">Series</label>
                <input  class="mx-3" type="text" id="series" name="series">
            </div>

            <div class="input-group mb-3">
                <label for="sale_date">Sale Date</label>
                <input class="mx-3" type="date" id="sale_date" name="sale_date">
            </div>

            <div class="input-group mb-3">
                <label for="type">Type</label>
                <input class="mx-3" type="text" id="type" name="type">
            </div>

            <div class="input-group mb-3">
                <label for="artists">Type</label>
                <textarea class="mx-3" type="text" id="artists" name="artists"></textarea>
            </div>

            <div class="input-group mb-3">
                <label for="writers">Type</label>
                <textarea class="mx-3" type="text" id="writers" name="writers"></textarea>
            </div>

            <button type="submit">add</button>
        </form>

      </div>

</main>
@endsection