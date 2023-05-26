@extends('layoutsapp')

@section('content')
    <h1>Homepage VideoGame</h1>

    @foreach ($characters as $character)
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $character->name }}</h5>
                            <p class="card-text">{{ $character->description }}</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Qui il link per la show</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
