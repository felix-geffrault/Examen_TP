@extends('template')

@section('titrePage')
    Information sur le Film
@endsection

@section('contenu')
    <div class="col-3 border m-3">
        <div class="row font-weight-bold border-bottom p-2">
            <div class="col-8">
                Titre : {{ $film->titre }}
            </div>
            <div class="offset-2">
                <a class="btn btn-primary" href="{{ route('films.index') }}">Retour</a>
            </div>
        </div>
        <div class="m-3">
            <div class="row">
                Année de sortie : {{ $film->anneeSortie }}
            </div>
            <div class="row">
                Categorie : {{ $categorie }}
            </div>
            <hr/>
            <div class="row">
                {{ $film->description }}
            </div>
        </div>
    </div>
@endsection
