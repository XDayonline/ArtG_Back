@extends('layouts.app')

@section('content')
    <a href="{{ route('cars.create') }}" class="btn btn-success mb-2">Ajouter</a>
    <br>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered" id="laravel_crud">
                <thead>
                <tr>
                    <th>Modèle</th>
                    <th>Marque</th>
                    <th>Image</th>
                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->marque }}</td>
                        <td><img height="100px" src="{{ $car->urlimg }}"></td>
                        <td><a href="{{ route('cars.edit',$car->id)}}" class="btn btn-primary">Modifier</a></td>
                        <td>
                            <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $cars->links() !!}
        </div>
    </div>
@endsection
