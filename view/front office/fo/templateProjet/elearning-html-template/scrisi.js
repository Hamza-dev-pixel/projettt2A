// Fonction pour afficher les champs en fonction du type d'utilisateur sélectionné
function toggleFields() {
    const userType = document.getElementById('user-type').value;
    document.getElementById('etudiant-fields').style.display = userType === 'etudiant' ? 'block' : 'none';
    document.getElementById('prof-fields').style.display = userType === 'prof' ? 'block' : 'none';
}

// Fonction pour valider les champs du formulaire avant la soumission
function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const dob = document.getElementById('dob').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const emailProf = document.getElementById('email-prof').value;

    // Vérification des champs requis
    if (!username || !password) {
        alert("Nom d'utilisateur et mot de passe sont requis.");
        return false;
    }

    // Validation du format de la date de naissance (yyyy-mm-dd)
    if (dob && !/^\d{4}-\d{2}-\d{2}$/.test(dob)) {
        alert("Veuillez entrer une date de naissance valide (yyyy-mm-dd).");
        return false;
    }

    // Validation de l'email pour étudiants
    if (document.getElementById('etudiant-fields').style.display === 'block' && email && !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        alert("Veuillez entrer un email valide.");
        return false;
    }

    // Validation de l'email pour professeurs
    if (document.getElementById('prof-fields').style.display === 'block' && emailProf && !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(emailProf)) {
        alert("Veuillez entrer un email valide.");
        return false;
    }

    // Si tout est valide, soumettre le formulaire
    return true;
}
