@extends('layouts.main')

@section('content')
<section class="container">
    <h1 class="text-center mb-5">Add new Comic</h1>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf {{-- cross-site request forgery --}}

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="type">Type</label>
                    <input class="form-control" type="text" name="type" id="type">
                </div>
                
                <div class="mb-3">
                    <label for="series">Series</label>
                    <input class="form-control" type="text" name="series" id="series">
                </div>
                
                <div class="mb-3">
                    <label for="price">Price</label>
                    <input class="form-control" type="number" name="price" id="price" placeholder="0.10" step="0.10">
                </div>
                
                <div class="mb-3">
                    <label for="thumb">Url immagine</label>
                    <input class="form-control" type="text" name="thumb" id="thumb">
                </div>
                
                <div class="mb-3">
                    <label for="sale_date">Selling date</label>
                    <input class="form-control" type="date" name="sale_date" id="sale_date">
                </div>
                
                <div class="mb-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" row="9"></textarea>
                </div>

                <button class="btn btn-success offset-5 col-2 mb-4" type="submit">Add new Comic</button>
            
            </form>
        </div>
    </div>


</section>
    
@endsection