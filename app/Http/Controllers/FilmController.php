<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\modele\Categorie;
use App\modele\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($laCategorie = null)
    {
        //
        $query = $laCategorie ? Genre::where('libelle',"$laCategorie")->firstOrFail()->films() : Film::query();
        $lesFilms = $query->get();
        $categories = Categorie::all();
        return view('listeFilms',compact('lesFilms','categories','laCategorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lesCategories = Categorie::all();
        $categorieArray = array();
        foreach ($lesCategories as $categorie){
            $categorieArray[$categorie->id] = $categorie->libelle;
        }
        return view('ajouterFilm',compact('categorieArray'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertFilmRequest $filmRequest)
    {
        //
        Film::create($filmRequest->all());
        return redirect()->route('films.index')->with('info','Le film a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
        $categories = Categorie::all();
        foreach ($categories as $categorie){
            if($categorie->id == $film->id_categorie){
                $categorie = $categorie->libelle;
                break;
            }
        }
        return view('afficherFilm',compact('film','categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilmRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
        $film->delete();
        return back()->with('info', 'Le film a bien été supprimé dans la base de données.');
    }
}
