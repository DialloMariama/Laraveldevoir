<?php

namespace App\Http\Controllers;
use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    public function create()
    {
        return view('createSem');
    }
    public function store(Request $request)
    {
        $semestre = new Semestre();

        $semestre->nomSems= $request->nomSems;
        $semestre->save();
        $result= $semestre->save();//1 ou 0
        return view('createSem',['confirmation' => $result]); 
    }
}
