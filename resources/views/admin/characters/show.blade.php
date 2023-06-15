@extends('layouts.admin')

@section('content')
    <section class="container mt-5">
        <h5 class="card-title">{{ $character->name }}</h5>
        @if ($character->description)
            <p class="card-text">{!! $character->description !!}</p>
        @else
            <p class="card-text">No Description!</p>
        @endif
        <div>
            <div>attacco: {{ $character->attack }}</div>
            <div>difesa: {{ $character->defence }}</div>
            <div>velocità: {{ $character->speed }}</div>
            <div>hp: {{ $character->life }}</div>
            <div>
                <h6 class="mt-3">Type:</h6>
                <span class="mt-2"> {{ $character->type ? $character->type->name : 'Senza categoria' }}</span>
            </div>
            @if ($character->items && count($character->items) > 0)
                <div class="d-flex align-items-center gap-2 my-2">
                    <h6 class="mt-3">items:</h6>
                    @foreach ($character->items as $item)
                        <a href="{{ route('admin.items.show', $item->slug) }}"
                            class="badge rounded-pill text-bg-primary py-2 px-2 mt-2">{{ $item->name }}</a>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
