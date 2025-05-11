<!-- File: planning-school/app/views/salle/index.php -->  
<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <title>Liste des salles</title>  
    <link rel="stylesheet" href="/planning-school/public/css/style_n.css">  
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
    <h1>Liste des Salles</h1>  

    <table class="compact-table">  
        <thead>  
            <tr>  
                <th>ID</th>  
                <th>Nom</th>  
                <th>Actions</th>  
            </tr>  
        </thead>  
        <tbody>  
            <?php foreach ($salles as $salle): ?>  
                <tr>  
                    <td><?= $salle->id ?></td>  
                    <td><?= $salle->nom ?></td>  
                    <td>  
                        <a class="btn" href="/planning-school/salle/edit/<?= $salle->id ?>">Éditer</a>  
                        <a class="btn" href="/planning-school/salle/delete/<?= $salle->id ?>" onclick="return confirm('Supprimer cette salle ?')">Supprimer</a>  
                    </td>  
                </tr>  
            <?php endforeach; ?>  
        </tbody>  
    </table>  

    <!-- Button moved below the table -->  
    <a href="/planning-school/salle/create"  
       class="tiny-btn">  
       + Ajouter une Salle  
    </a>  

</main>

<footer>  
    <p>&copy; 2023 School System. Tous droits réservés.</p>  
</footer>  
</body>  
</html>