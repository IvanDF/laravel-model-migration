@extends('layouts.main-section')

@section('main-section')

<main>
    <div class="container">
        <h1 class="title has-text-centered mt-6">Macchine</h1>
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
        <h1 class="title has-text-centered mt-6">Moto</h1>
        <div class="level mt-3">
            @foreach($bikes as $bike)
                <div class="level-item has-text-centered">
                    <div>
                        <h3 class="heading is-size-5">{{$bike -> marca}}</h3>
                        <p class="title">{{$bike -> modello}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
</main>

@endsection