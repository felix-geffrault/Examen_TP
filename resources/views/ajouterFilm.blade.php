@extends('template')

@section('titrePage')
    Ajout de Film
@endsection

@section('contenu')
    <div class="col-3 border m-3">
        {!! Form::open(['url' => 'films']) !!}
        <div class="row font-weight-bold border-bottom p-2">
            <div class="col-8">
                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                    {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Titre du Film']) !!}
                    {!! $errors->first('titre', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
            <div class="offset-2">
                <a class="btn btn-primary" href="{{ route('films.index') }}">Retour</a>
            </div>
        </div>
        <div class="m-3">
            <div class="row">
                <div class="form-group {!! $errors->has('anneeSortie') ? 'has-error' : '' !!}">
                    {!! Form::label('Année de sortie : ') !!}
                    {!! Form::number('anneeSortie', 'Année') !!}
                    {!! $errors->first('anneeSortie', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group {!! $errors->has('id_categorie') ? 'has-error' : '' !!}">
                    {!! Form::label('Catégorie : ') !!}
                    {!! Form::select('id_categorie', $categorieArray,null, ['placeholder' => 'Choisissez une catégorie...']) !!}
                    {!! $errors->first('id_categorie', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Brève description']) !!}
                    {!! $errors->first('description', '<small class="help-block text-danger">:message</small>') !!}
                </div>
            </div>
            {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}
        </div>

    </div>
@endsection
