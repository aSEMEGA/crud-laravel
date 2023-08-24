<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Ajouter</title>
</head>
<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status') }}
        </div>
    @endif
    <ul>
        @foreach ( $errors->all() as $error )
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
    </ul>
    <div class="container text-center">
    <div class="row">
        <div class="col s12">
            <form action="/update/traitement" method="POST"> 
                @csrf
                <input type="text" style="display : none" value="{{$etudiant->id}}">
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" value=" {{$etudiant->nom}} ">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Prenom</label>
                    <input type="text" class="form-control"  name="prenom" value="{{$etudiant->prenom}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Classe</label>
                    <input type="text" class="form-control" name="classe" value="{{$etudiant->prenom}}">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
    </div>
   
</body>
</html>