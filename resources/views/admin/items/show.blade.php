@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="mt-3 badge rounded-pill text-bg-danger py-3 px-5 fw-bold text-uppercase">{{ $item->name }}</h4>
        <h4 class="mt-3 badge rounded-pill text-bg-info py-3 px-5 fw-bold text-uppercase"><a
                href="{{ route('admin.items.index') }}">items list</a></h4>
    </div>


    <h3 class="mt-5">Characters holding this item:</h3>
    @foreach ($item->characters as $character)
        <hr class="text-dark">
        <h3>{{ $character->name }}</h3>
        @if ($character->description)
            <p>{!! $character->description !!}</p>
        @endif
    @endforeach
@endsection
