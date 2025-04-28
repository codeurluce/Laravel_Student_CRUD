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
}
