@extends('layouts.app')

<section class="container">
    <h5 class="card-title">{{$character->name}}</h5>
    <p class="card-text">{{$character->description}}</p>
    <div>
        <div>{{$character->attack}}</div>
        <div>{{$character->defence}}</div>
        <div>{{$character->speed}}</div>
        <div>{{$character->life}}</div>
    </div>
</section>
