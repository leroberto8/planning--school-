<!DOCTYPE html>  
<html lang="fr">  
<head> 
    <link rel="stylesheet" href="/planning-school/public/css/style.css"> 
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
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
    <h2>Réinitialiser mot de passe</h2>
    <form method="POST" action="/planning-school/auth/reset">
        <input type="email" name="email" placeholder="Email" required><br>
        <button type="submit" class="btn">Envoyer</button>
    </form>
</div> 
    
    <footer>  
        <p>&copy; 2023 School System. Tous droits réservés.</p>  
    </footer>  
</body>  
</html>