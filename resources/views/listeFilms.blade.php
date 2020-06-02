@extends('template')

@section('titrePage')
    Liste des Films
@endsection

@section('contenu')

    <div class="col-4 m-2 font-weight-bold border pb-2">
        <div class="row border-bottom p-2">
            <div class="col-4 al">
                Films
            </div>
            <div class="col-4">
                <div class="select">
                    <select onchange="window.location.href = this.value">
                        <option value="{{ route('films.index') }}" @unless($laCategorie) selected @endunless>Toutes catégories</option>
                        @foreach($categories as $categorie)
                            <option value="{{ route('films.categorie', $categorie->id) }}" {{ $laCategorie == $categorie->id ? 'selected' : '' }}>{{ $categorie->libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4">
                <a class="btn btn-primary" href="{{ route('films.create') }}">Créer un film</a>
            </div>
        </div>
        <div class="col-12 pt-2">
            Titre
        </div>
            @foreach($lesFilms as $film)
                <hr/>
                <div class="row">
                    <div class="col-4">
                        {{ $film->titre }}
                    </div>
                    <div class="col-2">
                        <a class="btn btn-success" href="{{ route('films.show', $film->id) }}">Voir</a>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-warning" href="{{ route('films.edit', $film->id) }}">Modifier</a>
                    </div>
                    <div class="col-3">
                        <form action="{{ route('films.destroy', $film->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </div>
                </div>
            @endforeach
    </div>
@endsection
