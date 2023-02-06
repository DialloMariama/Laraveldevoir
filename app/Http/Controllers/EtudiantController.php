<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Matiere;
use App\Models\Semestre;
use DB;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function create()
    {
        $etudiant = etudiant::all();
        $semestre = semestre::all();
        $matiere = matiere::all();
        return view('create',compact('semestre','matiere'));
    }
    public function store(Request $request)
    {
        $etudiant = new Etudiant();

        $etudiant->prenom= $request->prenom;
        $etudiant->nom= $request->nom;
        $etudiant->semestre_id= $request->semestre;
        $etudiant->matiere_id= $request->matiere;
        $etudiant->note= $request->note;
        $etudiant->examen= $request->examen;

        $etudiant->save();//1 ou 0
        return redirect('create'); 
    }
    public function index()
    {
        $etudiantlist = Etudiant::all() ;
        return view('classe', compact('etudiantlist')); 
    }
}
