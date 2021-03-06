@extends("layouts.main")

@section("title", "Single Item")


@section("main-content")
    <div class="container-fluid">
        <section class="row p-3 justify-content-center">
            <div class="col-5">
                <div class="card">
                    <div class="comic-img" style="height: 500px">
                        <img style="height: 100%" src="{{ $singleComic->thumb }}" class="card-img-top" alt="{{ $singleComic->title }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $singleComic->title }}</h5>
                        <p class="card-text">{{ $singleComic->description }}</p>
                        <p class="card-text text-capitalize">price: {{ $singleComic->price }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
