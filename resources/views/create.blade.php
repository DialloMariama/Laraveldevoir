add etudiant
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation in Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container mt-5">
    <div class="card col-md-6">
        <div class="card-header">Ajout Etudiant</div>
        <div class="card-body"></div>
        <form  method="POST" action="create">
            @csrf
            <label for="">Prenom Etudiant</label>
            <input type="text" class="form-control" name="prenom">
            <label for="">Nom Etudiant</label>
            <input type="text" class="form-control" name="nom">
            <div>
                <label>Matiere</label>
                        <select class="form-select" aria-label="Default select example"  name="semestre"   class="form-control">
                            @foreach($semestre as $s)
                                <option value="{{$s->id}}">{{$s->nomSems}}</option>
                            @endforeach
                        </select>
            </div> 
            <div>  
                <label>Semestre</label>
                        <select class="form-select" aria-label="Default select example"  name="matiere"   class="form-control">
                            @foreach($matiere as $m)
                                <option value="{{$m->id}}">{{$m->nomMat}}</option>
                            @endforeach
                        </select> 
            </div>              
            <label for="">Note</label>
            <input type="number" class="form-control" name="note">
            <label for="">Examen</label>
            <input type="number" class="form-control" name="examen">
            <button type="submit" class="btn btn-success mt-2 offset-4" >Ajouter</button>
            <a href="{{ route('index') }}" class="btn btn-infos mt-2 offset-4">liste Projet</a>
        </form>
    </div>
</div>
</body>
</html>