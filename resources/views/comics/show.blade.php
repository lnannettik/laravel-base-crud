@extends('layouts.main')

@section('content')
<section class="container">
    <h1>{{ $comic->title }}</h1>

    <div class="mb-5">
        <span class="badge bg-primary">
            {{ $comic->series }}
        </span>
        <span class="badge bg-warning">
            {{ $comic->type }}
        </span>
    </div>

    <div class="d-flex w-100 justify-content-between mb-5">
        <span>
            Sale Date:
            {{ $comic->sale_date }}
        </span>
        <span>
            Price:
            {{ $comic->price }}
        </span>
    </div>

    <div class="img-and-txt-container d-flex p-5">
        <div class="mb-4 col-3">
            <img src="{{ $comic->thumb }}" alt="">
        </div>

        <div class="d-flex flex-column">
            <h2 class="mb-3">Description</h2>
            <p>{!! $comic->description !!}</p>
        </div>
    </div>
    

</section>
    
@endsection