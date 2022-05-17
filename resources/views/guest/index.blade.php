@extends("layouts.main")

@section("title", "Laravel Base CRUD")

@section("main-content")
    <div class="container-fluid">
        <section class="row p-3">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card">
                        <div>
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <p class="card-text text-capitalize">price: {{ $comic->price }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>

@endsection
