add matiere
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
    @if(isset($confirmation))
            @if ($confirmation ==1)
                <div class="alert alert-success">Matiere Ajouter</div>
            @else
                <div class="alert alert-success">Matiere Non_Ajouter</div>
            @endif
        @endif
<div class="container mt-5">
    <div class="card col-md-6">
        <div class="card-header">Ajout Matiere</div>
        <div class="card-body"></div>
        <form  method="POST" action="createMat">
            @csrf
            <label for="">Nom Matiere</label>
            <input type="text" class="form-control" name="nomMat">
            <button type="submit" class="btn btn-success mt-2 offset-4" >Ajouter</button>
        </form>
    </div>
</div>
</body>
</html>