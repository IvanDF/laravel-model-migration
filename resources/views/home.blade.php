@extends('layouts.main-section')

@section('main-section')

<main>

    <div class="level mt-6 container">
        @foreach($cars as $car)
            <div class="level-item has-text-centered">
                <div>
                    <h3 class="heading is-size-5">{{$car -> marca}}</h3>
                    <p class="title">{{$car -> modello}}</p>
                </div>
            </div>
        @endforeach
    </div>
    
</main>

@endsection