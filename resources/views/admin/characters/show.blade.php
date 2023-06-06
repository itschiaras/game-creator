@extends('layouts.app')

@section('content')
<section class="container">
    <h5 class="card-title">{{$character->name}}</h5>
    <p class="card-text">{{$character->description}}</p>
    <div>
        <div>attacco: {{$character->attack}}</div>
        <div>difesa: {{$character->defence}}</div>
        <div>velocità: {{$character->speed}}</div>
        <div>hp: {{$character->life}}</div>
    </div>
</section>
@endsection
