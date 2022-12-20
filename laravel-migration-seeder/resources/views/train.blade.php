@extends('layouts.app')


@section('content')

<section class="cards py-5">

    <div class="container">
        <h1 class="text-uppercase mb-4">train cards:</h1>
        <div class="row row-cols-2 row-cols-md-4 g-4">
            @forelse($trains as $train)
            <div class="col">
                <div class="card p-2 text-center">
                    <div class="card-head">
                        <div> Comapny: {{$train -> company}} </div>
                        <span> Start Station: {{$train -> start_station}}</span>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="train_code">Train code: {{$train->train_code}}</div>
                        <div class="wagon">wagon: {{$train->wagon}}</div>
                    </div>
                </div>
            </div>
            @empty
            <p>Ops! no trains available!</p>
            @endforelse
        </div>
    </div>
</section>
@endsection