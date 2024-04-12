<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/main.css">
    <title>My Moovies - Publier un film</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="logonav" src="../images/film-maker-294496_1280.webp" alt="logo navbar"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php">Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./views/create.php">Publier un film</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main>
        <h3>Publier un nouveau film</h3>
        <form class="container-fluid w-50" method="POST">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" placeholder="Le titre du film" class="form-control">
            <label for="synopsis">Synopsis</label>
            <textarea name="synopsis" id="synopsis" rows="10" placeholder="Le résumé du film" class="form-control"></textarea>
            <label for="imageUrl">Image</label>
            <input type="url" name="imageUrl" id="imageUrl" placeholder="L'URL de l'image du film" class="form-control">
            <label for="relaseDate">Date de sortie</label>
            <input type="date" name="relaseDate" id="relaseDate" class="form-control">
            <label for="category"></label>
            <select name="categoryId" id="category" class="form-select">
                <option value="" selected>-- Sélectionnez une catégorie --</option>
                <option value="1">Horreur</option>
                <option value="2">Drame</option>
                <option value="3">Comédie</option>
            </select>
            <input type="submit" value="Publier" class="btn btn-primary mt-3">
        </form>
    </main>
</body>
</html>