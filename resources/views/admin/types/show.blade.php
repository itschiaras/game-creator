@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h4 class="mt-3 badge rounded-pill text-bg-success py-3 px-5 fw-bold text-uppercase">{{ $type->name }}</h4>
            <h4 class="mt-3 badge rounded-pill text-bg-info py-3 px-5 fw-bold text-uppercase"><a
                    href="{{ route('admin.types.index') }}">Type list</a></h4>

        </div>


        <h3 class="mt-5">Personaggi di questo tipo:</h3>
        @if ($characters && count($characters) > 0)
            @foreach ($characters as $character)
                <br>
                <hr class="text-dark">
                <h4 class="text-success mt-3">{{ $character->name }}</h4>
                <p>{{ $character->description }} </p>
                <p>Attack: {{ $character->attack }} </p>
                <p>Defence {{ $character->defence }} </p>
                <p>Speed: {{ $character->speed }} </p>
                <p>Life: {{ $character->life }} </p>
            @endforeach
        @else
            <h4>Nessun personaggio con questa categoria</h4>
        @endif
    </div>

@endsection
