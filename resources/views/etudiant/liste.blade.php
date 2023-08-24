<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>CRUD </title>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>CRUD EN LARAVEL</h1>
                <a href="/ajouter" class="btn btn-primary">Ajouter un Etudiant</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Classe</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($etudiants as $etudiant )
                        <tr>
                            <td>{{ $etudiant->id }}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->classe}}</td>
                            <td>
                                <a href="/update/{{$etudiant->id}}" class="btn btn-info">UPDATE</a>
                                 <a href="/delete/{{$etudiant->id}}" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        @endforeach
                       
                       
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>