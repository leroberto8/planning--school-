<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="/planning-school/css/style.css">  
    <title>School System</title>  
</head>  
<body>  
    <header>  
        <div class="navbar">  
            <img src="/planning-school/images/logo.jpg" alt="Logo" class="logo"> <!-- Adjust the path to your logo --> 
				<a href="/planning-school/auth/logout">Déconnexion</a>
        </div>  
    </header>  
    
    <div class="center-form">  
    <h2>Connexion</h2>  
    <form method="POST" action="/planning-school/auth/login"> <!-- Change here -->  
        <input type="email" name="email" placeholder="Email" required><br>  
        <input type="password" name="password" placeholder="Mot de passe" required><br>  
        <button type="submit" class="btn">Se connecter</button>  
    </form>  
    <p>  
        <a href="/planning-school/auth/register">Créer un compte</a> | <!-- Change here -->  
        <a href="/planning-school/auth/reset">Mot de passe oublié</a> <!-- Change here -->  
    </p>  
</div>  
    
    <footer>  
        <p>&copy; 2023 School System. Tous droits réservés.</p>  
    </footer>  
</body>  
</html>