@extends('layouts.main-section')

@section('main-section')

<main class="hero-body">
    <div class="container">
        <!-- <h1 class="title has-text-centered mt-6 mb-1">Macchine</h1>
        <div class="level mt-3">
            @foreach($cars as $car)
                <div class="level-item has-text-centered">
                    <div>
                        <h3 class="heading is-size-5">{{$car -> marca}}</h3>
                        <p class="title">{{$car -> modello}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <h1 class="title has-text-centered mb-1">Moto</h1>
        <div class="level mt-3">
            @foreach($myBike as $bike)
                <div class="level-item has-text-centered">
                    <div>
                        <h3 class="heading is-size-5">{{$bike -> marca}}</h3>
                        <p class="title">{{$bike -> modello}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <h1 class="title has-text-centered mt-6 mb-1">Altre moto</h1>
        <div class="level mt-3">
            @foreach($otherBikes as $bike)
                <div class="level-item has-text-centered">
                    <div>
                        <h3 class="heading is-size-5">{{$bike -> marca}}</h3>
                        <p class="title">{{$bike -> modello}}</p>
                    </div>
                </div>
            @endforeach
        </div> -->
        <h1 class="title has-text-centered mt-6 mb-1">Altre moto</h1>
        <div class="level mt-3">
            <div class="level-item has-text-centered" v-for="el in bikes">
                <div>
                    <h3 class="heading is-size-5">@{{ el.marca }}</h3>
                    <p class="title">@{{ el.modello }}</p>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection