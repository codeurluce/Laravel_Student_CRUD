<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Etudiant en laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>CRUD Etudiant en laravel</h1>
            </div>
            <div class="col mt-2">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
            <h2>formulaire d'inscription Num: {{ $etudiant->id }}</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            
            @endif

            <form action="{{ route('etudiant.edit') }}" method="post">
                @csrf
                <input type="text" name="id" value="{{ $etudiant->id }}" hidden>

                <div class="row">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" value="{{ $etudiant->nom }}" id="nom" placeholder="Entrez votre nom">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" value="{{ $etudiant->prenom }}" name="prenom" placeholder="Entrez votre prenom">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="classe" class="form-label">Classe</label>
                        <select id="classe" name="classe_id" class="form-control">
                            <option value="{{ $etudiant->classe_id }}">sa classe est:{{ $etudiant->classe->libelle }}</option>
                            @foreach ($classes as $item)
                                <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    <div class="row">
                        <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <a href="{{ route('etudiant.index') }}" class="btn btn-info">Voir la liste</a>
                        </div>
                    </div>
            </form>
    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>