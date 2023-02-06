<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function create()
    {
        return view('createMat');
    }
    public function store(Request $request)
    {
        $matiere = new Matiere();

        $matiere->nomMat= $request->nomMat;
        $matiere->save();
        $result= $matiere->save();//1 ou 0
        return view('createMat',['confirmation' => $result]); 
    }
}
