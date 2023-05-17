<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Styles/main.css">
    <title>My Movies</title>
</head>

<body>
  <?php

  require_once "./entities/Movie.php"; 
  $movie= new Movie([
      'id'=>1,
      'title'=>'Troiscent', 
      'description'=>"L'histoire de la bataille des Thermopyles...", 
      'director'=>'Zack Snyder', 
      'image_url'=>'https://fr.web.img3.acsta.net/medias/nmedia/18/36/26/41/18737112.jpg', 
      'release_date'=>'2023-01-01', 
      'category_id'=>3
       ]);

      

   //$movie->setId(1)->setTitle('Troiscent')->setDescription("L'histoire de la bataille des Thermopyles...")->setDirector('Zack Snyder');
  
  ?>
 
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i class="bi bi-film fs-8">My Movies</i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                  <a class="nav-link" href="./Views/Creat.php">Publier un film ou une série</a>
                
                </div>
              </div>
            </div>
          </nav>

    </header>
 <main>
    <h1>My Movies</h1>
    <h3 >Découvrez nos films et séries de l'année 2023 </h3>
    <p> Vous pouvez également ajouter vos films et séries préférés</p>
    <img class="logo m-3" src="./Images/logo.jpg" alt="logo.jpg">
    
    <section class="container d-flex justify-content-center">
    <div class="card m-3" style="width: 18rem;">
      <img src="https://fr.web.img3.acsta.net/medias/nmedia/18/36/26/41/18737112.jpg" class="card-img-top" alt="300">
      <div class="card-body">
        <h5 class="card-title"><?= $movie->getTitle() ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $movie->getRelease_date() ?></h6>
        <p class="card-text"><?= $movie->getDescription() ?></p>
        <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"><i class="fa-solid fa-pen-to-square" title="Modifier"></i></a>

        <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"><i class="fa-solid fa-trash" title="Supprimer"></i></a>
      </div>
    </div>

    <div class="card m-3" style="width: 18rem;">
      <img src="https://fr.web.img5.acsta.net/medias/nmedia/18/91/71/02/20159308.jpg" class="card-img-top"  alt="Ce que le jour doit à la nuit">
      <div class="card-body">
        <h5 class="card-title">Ce que le jour doit à la nuit</h5>
        <h6 class="card-subtitle mb-2 text-md-center">2012-09-12</h6>
        <p class="card-text">Algérie, années 1930. Venu de la campagne, Younès, 9 ans, emménage avec sa famille à Oran...</p>
        <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"><i class="fa-solid fa-pen-to-square" title="Modifier"></i></a>

        <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"><i class="fa-solid fa-trash" title="Supprimer"></i></a>
      </div>
    </div>
    </section>    
    
   </main>
   <footer>

   </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

  </body>
</html>