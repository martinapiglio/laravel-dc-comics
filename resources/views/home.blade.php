@extends('layouts/main')

@section('main')
<div class="container my-5">

    <h2 class="mb-3"> <a href=" {{route('comics.index')}} "> Click here to see the comics list</a></h2>
    <h2><a href=" {{ route('comics.create') }} "> Click here to add a new comic </a></h2>

</div>
@endsection
