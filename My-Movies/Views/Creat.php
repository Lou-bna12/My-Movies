<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Styles/main.css">
    <title>My movies - Ajouter un film ou une série </title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i class="bi bi-film fs-8">My Movies</i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link " aria-current="page" href="../index.php">Acceuil</a>
                  <a class="nav-link active" href="../My-Movies/Views/Creat.php">Publier un film</a>
                 
                
                </div>
              </div>
            </div>
          </nav>

    </header>
 <main>
    <h2>Ajouter un nouveau film ou une série</h2>
    <form method="get" class="container-fluid w-50">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="tile" id="title" placeholder="Le titre du film/série" class="form-control">
        <label for="synopsis" class="form-label">Synopsis</label>
        <textarea name="synopsis" id="synopsis" class="form-control" rows="10" placeholder="Le résumé du film/série"></textarea>
        <label for="imageUrl" class="form-label">Image</label>
        <input type="url" name="imageUrl" id="imageUrl" placeholder="L'URL de l'image du film/série" class="form-control">
        <label for="releaseDate" class="form-label">Date de sortie</label>
        <input type="date" name="releaseDate" id="releaseDate" class="form-control">
        <label for="category" class="form-label">Catégories</label>
        <select name="categoryId" id="category" class="form-select">
           <option vlaue="" seleted>--Séléctionner une catégorie--</option>
           <option value="1">Horreur</option>
           <option value="2">Drame</option>
           <option value="3">Comédie</option>
           <option value="4">Action</option>
           <option value="5">Aventure</option>
           <option value="6">Thriller</option>
           <option value="7">Science fiction </option>
           <option value="8">Romance</option>
           <option value="9">Enfant</option>
           <option value="10">Disney</option>
    </select>
    <input type="submit" value="Publier" class="btn btn-primary mt-2" >

    </form>
  

 </main>
    
</body>
</html>