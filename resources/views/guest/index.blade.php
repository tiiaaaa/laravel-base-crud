@extends("layouts.main")

@section("title", "Laravel Base CRUD")

@section("main-content")
    <div class="container-fluid">
        <section class="row p-3">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <a class="text-decoration-none" href="{{ route("guest.show", $comic->id)}}" style="color: black">
                        <div class="card">
                            <p>{{ $comic->id }}</p>
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
                    </a>
                </div>
            @endforeach
        </section>
    </div>

@endsection
