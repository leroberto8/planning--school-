<!-- File: planning-school/app/views/salle/create.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une salle</title>
    <link rel="stylesheet" href="/planning-school/public/css/style.css">

<style>

.tiny-form-container {
    max-width: 380px;
    margin: 40px auto;
    background-color: #ffffff;
    padding: 20px 25px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    font-size: 0.9rem;
}

.tiny-form-container h2 {
    text-align: center;
    margin-bottom: 15px;
    color: #333;
}

.tiny-form-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
}

.tiny-form-container input[type="text"] {
    width: 100%;
    padding: 8px;
    font-size: 0.9rem;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.tiny-form-container button {
    width: 100%;
    padding: 8px;
    background-color: #2ecc71;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.tiny-form-container button:hover {
    background-color: #27ae60;
}

</style>
</head>

<body>
    <header>
        <div class="navbar">
            <img src="/planning-school/images/logo.jpg" alt="Logo" class="logo">
            <a href="/planning-school/auth/logout" class="btn-deconnexion">Déconnexion</a>
        </div>
    </header>

		<div class="tiny-form-container">
		<h2>Ajouter une Salle</h2>
		<form action="/planning-school/salle/create" method="POST">
			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom" required>

			<button type="submit">Créer</button>
		</form>
	</div>


    <footer>
        <p>&copy; 2023 School System. Tous droits réservés.</p>
    </footer>
</body>
</html>
