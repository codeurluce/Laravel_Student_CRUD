<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;

class EtudiantController extends Controller
{
    //Afficher tous les etudiants
    public function index(){
        $etudiants = Etudiant::all();
        return view('etudiant.index', [
            'etudiants' => $etudiants
        ]);
    }

    //Afficher le formulaire d'ajout d'un etudiant
    public function add(){
        $classes = Classe::all();
        return view('etudiant.add', [
            'classes' => $classes
        ]);
    }

    //Traiter le formulaire d'ajout d'un etudiant
    public function store(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe_id' => 'required|exists:classes,id'
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->classe_id = $request->input('classe_id');
        $etudiant->save();

        return back()->with('success', 'Etudiant ajouté avec succès');
        // return redirect()->route('etudiant.index')->with('success', 'Etudiant ajouté avec succès');
    }

    //Afficher le formulaire de modification d'un etudiant
    public function show($id){
        $etudiant = Etudiant::findOrFail($id);
        $classes = Classe::all();
        return view('etudiant.show', [
            'etudiant' => $etudiant,
            'classes' => $classes
        ]);
    }

    //traiter le formulaire de modification d'un etudiant
    public function update(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);
        // $etudiant = Etudiant::find($id);
        $etudiant = Etudiant::findOrFail($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe_id = $request->classe_id;
        $etudiant->update();

    return back()->with('success', 'Etudiant modifié avec succès');
}

    //Supprimer un etudiant
    public function delete($id){
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();
        return back()->with('success', 'Etudiant supprimé avec succès');
    }
}

