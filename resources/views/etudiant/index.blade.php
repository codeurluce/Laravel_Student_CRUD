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
                <a href="{{ route('etudiant.add') }}" class="btn btn-primary">Ajouter un étudiant</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <h2>Liste des étudiants</h2>
            </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Classe</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Licence 1</td>
      <td>
        <a href="#" class="btn btn-primary">Modifier</a>
        <a href="#" class="btn btn-danger">Supprimer</a>
        </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Licence 2</td>
      <td>
        <a href="#" class="btn btn-primary">Modifier</a>
        <a href="#" class="btn btn-danger">Supprimer</a>
        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Bird</td>
      <td>Licence 3</td>
      <td>
        <a href="#" class="btn btn-primary">Modifier</a>
        <a href="#" class="btn btn-danger">Supprimer</a>
        
      </td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>