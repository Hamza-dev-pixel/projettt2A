<?php

include '../../controller/usercontroller.php';


$error = "";

$offer= null;
// create an instance of the controller
$userController = new userController();


if (
    isset($_POST["nom_utilisateur"]) && $_POST["email"] && $_POST["date_naissance"] && $_POST["mdp"] && $_POST["role"] 
) {
    if (
        !empty($_POST["nom_utilisateur"]) &&!empty($_POST["email"])  && !empty($_POST["date_naissance"]) && !empty($_POST["mdp"]) && !empty($_POST["role"])
    
    ) {
        
        $offer = new user(
            null,
            $_POST['nom_utilisateur'],
            new DateTime($_POST['date_naissance']),
            $_POST['email'],
            $_POST['mdp'],
            $_POST['role']
        );
        //
            
        $userController->addUser($offer);

       header('Location:signup.php');
    } else
        $error = "Missing information";
}




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Inscription</title>
    <link rel="stylesheet" href="stylesi.css">
    <link rel="stylesheet" href="footer.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="img/favicon.ico" rel="icon">
</head>
<body>
<div class="background-slideshow">
    <div class="slide" style="background-image: url('img/image 1.jpg');"></div>
    <div class="slide" style="background-image: url('img/image 2.jpeg');"></div>
    <div class="slide" style="background-image: url('img/image 3.jpg');"></div>
    <div class="slide" style="background-image: url('img/image 4.avif');"></div>
</div>

<div class="login-container">
    <h2>Inscription</h2>
    <form action="signup.php" method="POST" onsubmit="return validateForm()">
    <div class="input-group">
        <label for="nom_utilisateur">Nom d'utilisateur :</label>
        <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
    </div>
    <div class="input-group">
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required>
    </div>
    <div class="input-group">
        <label for="confirm-password">Confirmer le mot de passe :</label>
        <input type="password" id="confirm-password" required>
    </div>
    <div class="input-group">
        <label for="role">Rôle :</label>
        <select id="role" name="role" required>
            <option value="etudiant">Étudiant</option>
            <option value="prof">Professeur</option>
        </select>
    </div>

    <!-- Champs communs -->
    <div class="input-group">
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required>
    </div>
    <div class="input-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
    </div>

    <button type="submit">S'inscrire</button>
</form>
</div>

<!-- Bouton d'inscription -->
<button type="submit">S'inscrire</button>

   <!-- Footer Start -->
   <!-- Footer content remains unchanged -->
   ...
   <!-- Footer End -->

   <!-- Include your JavaScript file here -->
   <script src='scrisi.js'></script>

   <!-- JavaScript function to toggle fields based on user type -->
   <script >
       function toggleFields() {
           var userType = document.getElementById("user-type").value;
           document.getElementById("etudiant-fields").style.display = userType === "etudiant"? "block": "none";
           document.getElementById("prof-fields").style.display = userType === "prof"? "block": "none";
       }

       function validateForm() {
           var password = document.getElementById("password").value;
           var confirmPassword = document.getElementById("confirm-password").value;
           if (password !== confirmPassword) {
               alert("Les mots de passe ne correspondent pas.");
               return false;
           }
           return true; // Allow form submission
       }
   </ script >

</ body >
</ html >