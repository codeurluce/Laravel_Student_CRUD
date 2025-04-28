<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    //Afficher tous les etudiants
    public function index(){
        $etudiants = Etudiant::all();
        return view('etudiant.index', [
            'etudiants' => $etudiants,
        ]);
    }

    //Afficher le formulaire d'ajout d'un etudiant
    public function add(){
        return view('etudiant.add');
    }
}
