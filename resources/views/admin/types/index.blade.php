@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1>Types</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <th scope="row">{{ $type->id }}</th>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.types.show', $type->slug) }}">Show</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
