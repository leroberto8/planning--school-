<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="/planning-school/public/css/style.css">  
    <title>School System</title>  
</head>  
<body>  
    <header>  
        <div class="navbar">  
            <img src="/planning-school/images/logo.jpg" alt="Logo" class="logo"> <!-- Adjust the path to your logo -->   
            <a href="/planning-school/auth/logout">Déconnexion</a> <!-- Ensure the path points to your logout script -->  
        </div>  
    </header>  
    
    <div class="center-form">  
        <h2>Inscription</h2>  
        <form method="POST" action="/planning-school/auth/register">  <!-- Corrected action attribute -->  
            <input type="text" name="name" placeholder="Nom" required><br>  
            <input type="email" name="email" placeholder="Email" required><br>  
            <input type="password" name="password" placeholder="Mot de passe" required><br>  
            <select name="role" required>  
                <option value="">Sélectionnez un rôle</option>  
                <option value="student">Étudiant</option>  
                <option value="teacher">Enseignant</option>  
            </select><br>  
            <input type="text" name="secret_code" placeholder="Code secret" required><br>  
            <button type="submit" class="btn">S'inscrire</button>  
        </form>  
    </div>   
    
    <footer>  
        <p>&copy; 2023 School System. Tous droits réservés.</p>  
    </footer>  
</body>  
</html>