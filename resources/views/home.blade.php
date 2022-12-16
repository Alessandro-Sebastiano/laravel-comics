@extends('layouts.app')


@section('content')
    <div class="containe-fluid bg-dark">
        <div class="container-lg position-relative">
            <span
                class="text-white py-1 px-4 bg-primary position-absolute top-0 translate-middle-y fs-2 text-uppercase fw-bold">Current
                Series</span>
            <div class="row g-4 py-5">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="card border-0 ratio ratio-1x1">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top fit" alt="...">
                        </div>
                        <div class="card-body p-0 mt-2">
                            <p class="card-text fw-bold text-white">{{ $comic['series'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
