<!-- File: planning-school/app/views/salle/edit.php -->  
<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <title>Modifier Salle</title>  
    <link rel="stylesheet" href="/planning-school/public/css/style.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>  
<body>  
    <header>  
        <div class="navbar">  
            <img src="/planning-school/images/logo.jpg" alt="Logo" class="logo">  
            <a href="/planning-school/auth/logout" class="btn-deconnexion">Déconnexion</a>  
        </div>  
    </header>  

    <main class="container">  
        <h1>Modifier Salle</h1>  

        <form action="/planning-school/salle/edit/<?= $salle->id ?>" method="POST">  
            <div class="form-group">  
                <label for="nom">Nom de la Salle:</label>  
                <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($salle->nom, ENT_QUOTES, 'UTF-8') ?>" required>  
            </div>  
            <button type="submit" class="btn">Mettre à jour</button>  
            <a href="/planning-school/salle/index" class="btn">Annuler</a>  
        </form>  
    </main>  

    <footer>  
        <p>&copy; 2023 School System. Tous droits réservés.</p>  
    </footer>  
</body>  
</html>