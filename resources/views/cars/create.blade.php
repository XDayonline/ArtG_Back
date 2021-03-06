@extends('layouts.app')

@section('content')
    <h2 style="margin-top: 12px;" class="text-center">Ajouter un véhicule</h2>
    <br>

    <form action="{{ route('cars.store') }}" method="POST" name="add_product">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Modèle</strong>
                    <input type="text" name="name" class="form-control" placeholder="Entrez un modèle">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Marque</strong>
                    <input type="text" name="marque" class="form-control" placeholder="Entrez une marque">
                    <span class="text-danger">{{ $errors->first('marque') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="text" name="urlimg" class="form-control" placeholder="Entrez l'url de l'image">
                    <span class="text-danger">{{ $errors->first('urlimg') }}</span>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>

    </form>
@endsection
