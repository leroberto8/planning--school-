<?php  
// File: planning-school/app/views/dashboard/index.php  
?>  

<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Tableau de bord</title>  
    <link rel="stylesheet" href="/planning-school/public/css/style.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> <!-- Pour les icônes -->
</head>  
<body>  
    <header>  
        <div class="navbar">
            <img src="/planning-school/images/logo.jpg" alt="Logo" class="logo">

			<div class="user-section">
			<a href="/planning-school/auth/logout" class="btn-deconnexion">Déconnexion</a>
			<i class="fas fa-bell notification-icon"></i> <!-- Icône blanche -->
			
			<!-- Infos utilisateur -->
			<div class="user-info-box">
				<p><strong>Nom :</strong> <?php echo $_SESSION['user']['name']; ?></p>
				<p><strong>Email :</strong> <?php echo $_SESSION['user']['email']; ?></p>
			</div>
		</div>

        </div>  
    </header>   

    <div class="container">  
			<aside class="sidebar">  
		<h2>Menu</h2>  
		<ul>  
			<li><a class="btn" href="/planning-school/dashboard">Home</a></li>  
			<li><a class="btn" href="/planning-school/salle/index">Salles</a></li>  
			<li><a class="btn" href="/planning-school/matiere/index">Matières</a></li>  
			<li><a class="btn" href="/planning-school/note/index">Notes</a></li>  
		</ul>  
	</aside>


        <main>  
            <main>  
    <h1>Bienvenue sur votre tableau de bord !</h1>  
    <p>Utilisez le menu à gauche pour naviguer dans les différentes sections.</p>  
</main>

        </main>  
    </div>  

    <footer>  
        <p>&copy; 2023 School System. Tous droits réservés.</p>  
    </footer>  
</body>  
</html>
