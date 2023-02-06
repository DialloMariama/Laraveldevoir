<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de Classe</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    
<body class="bg-dark">
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Devoir (Gestion de Classes)</h2>
                    </div>
                    <div class="card-body">
                        
                        <br> <br>
                       @php
                         $moyen  = 0;
                        @endphp
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Prenom</th>
                                        <th>Nom</th>
                                        <th>
                                            <select class="form-select">
                                                <option selected>Semestre</option>
                                            </select>
                                        </th>
                                        <th>
                                            <select class="form-select">
                                                <option selected>Matiere</option>
                                            </select>
                                        </th>    
                                        <th>Note</th>
                                        <th>Examen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $somme = 0 ;
                                    $cpt = 0;
                                    $p = $etudiantlist[0];
                                    ?>
                                <tr>
                                @foreach($etudiantlist as $etd)
                               
                                        <td>{{ $etd->id}}</td>
                                        <td>{{ $etd->prenom}}</td>
                                        <td>{{ $etd->nom}}</td>
                                        <td>{{ $etd->semestre_id}}</td>
                                        <td>{{ $etd->matiere_id}}</td>
                                        <td>{{ $etd->note}}</td>
                                        <td>{{ $etd->examen}}</td>
                                        <td>{{$moyenne =($etd->note + $etd->examen)/2 }}</td>
                                        <?php $somme = $somme+$moyenne ;
                                        $cpt = $cpt + 1;
                                        if($moyenne >($p->note+$p->examen)/2){
                                            $p = $etd ;
                                        }
                                        ?>
                                           
                                    </tr>
                                    @endforeach 
                                    <td>Moyenne</td>
                                    <td>{{ $somme/$cpt}}</td>       
                                </tbody>
                            </table>
                                {{$p->nom}}
                                {{$p->note}}
                                {{$p->examen}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{$moyen}}

</body>
</html>

