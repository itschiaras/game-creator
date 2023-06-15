 @extends('layouts.admin')

 @section('content')
     <div class="container">
         <div class="text-end">
             <a class="btn btn-success" href="{{ route('admin.characters.create') }}">Crea nuovo progetto</a>
         </div>
         <div class="container d-flex flex-wrap gap-3 justify-content-start mt-5">

             @foreach ($characters as $character)
                 <div class="card" style="width: 18rem;">
                     <div class="card-body">
                         <h5 class="card-title">{{ $character->name }}</h5>
                         @if ($character->description)
                             <p class="card-text">{!! $character->description !!}</p>
                         @endif

                         {{-- <p class="card-text">{{$character->type->name}}</p> --}}
                     </div>
                     <div class="card-body d-flex flex-column align-items-center gap-2 ">
                         <a href="{{ route('admin.characters.show', $character->id) }}"
                             class="btn btn-success text-white">Qui
                             il
                             link per la show</a>
                         <a href="{{ route('admin.characters.edit', $character->id) }}"
                             class="btn btn-warning text-white">Modifica</a>
                         <form action="{{ route('admin.characters.destroy', $character->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button type='submit' class="delete-button"
                                 data-item-title="{{ $character->name }}">Cancella</button>
                         </form>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 @endsection
