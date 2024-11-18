function registerUser() {
    const username = document.getElementById('register-username').value;
    const password = document.getElementById('register-password').value;

    if (username && password) {
        localStorage.setItem(username, password);  // Stockage du mot de passe
        alert("Utilisateur inscrit avec succès !");
    } else {
        alert("Veuillez remplir tous les champs.");
    }
}

function loginUser() {
    const username = document.getElementById('login-username').value;
    const password = document.getElementById('login-password').value;
    const userType = document.getElementById('user-type').value;

    const storedPassword = localStorage.getItem(username);
    if (storedPassword && storedPassword === password) {
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'none';
        document.getElementById('user-info').style.display = 'block';
        document.getElementById('user-name').innerText = username;

        // Afficher le menu en fonction du type d'utilisateur
        if (userType === 'student') {
            document.getElementById('student-menu').style.display = 'block';
        } else if (userType === 'professor') {
            document.getElementById('professor-menu').style.display = 'block';
        }
    } else {
        alert("Nom d'utilisateur ou mot de passe incorrect.");
    }
}

function logoutUser() {
    document.getElementById('login-form').style.display = 'block';
    document.getElementById('register-form').style.display = 'block';
    document.getElementById('user-info').style.display = 'none';
    document.getElementById('user-name').innerText = '';
    document.getElementById('info-display').innerHTML = '';
    document.getElementById('student-menu').style.display = 'none';
    document.getElementById('professor-menu').style.display = 'none';
}

function showInfo(option) {
    const infoDisplay = document.getElementById('info-display');
    let message;

    switch (option) {
        case 'schedule':
            message = "<h4>Emploi du Temps</h4><p>Lundi: Maths - 10h<br>Mardi: Physique - 14h<br>Mercredi: Informatique - 16h</p>";
            break;
        case 'absence':
            message = "<h4>Absences</h4><p>Maths: 2 absences<br>Physique: 1 absence<br>Informatique: 0 absence</p>";
            break;
        case 'progress':
            message = "<h4>Avancement Académique</h4><p>Maths: 80%<br>Physique: 75%<br>Informatique: 90%</p>";
            break;
        case 'record-absence':
            message = `
                <h4>Enregistrer une absence</h4>
                <p>
                    Nom de l'étudiant : <input type="text" id="student-name" placeholder="Nom de l'étudiant"><br>
                    Date : <input type="date" id="absence-date"><br>
                    Heure : <input type="time" id="absence-time"><br>
                    <button onclick="recordAbsence()">Enregistrer</button>
                </p>
            `;
            break;
        case 'add-remark':
            message = `
                <h4>Ajouter une remarque académique</h4>
                <p>
                    Nom de l'étudiant : <input type="text" id="remark-student-name" placeholder="Nom de l'étudiant"><br>
                    Remarque : <textarea id="academic-remark" placeholder="Saisir une remarque"></textarea><br>
                    <button onclick="addRemark()">Ajouter</button>
                </p>
            `;
            break;
        default:
            message = "<p>Aucune information disponible</p>";
    }

    infoDisplay.innerHTML = message;
}

// Fonction pour enregistrer une absence avec nom de l'étudiant, date et heure
function recordAbsence() {
    const studentName = document.getElementById('student-name').value;
    const absenceDate = document.getElementById('absence-date').value;
    const absenceTime = document.getElementById('absence-time').value;

    if (studentName && absenceDate && absenceTime) {
        alert(`Absence enregistrée pour ${studentName} le ${absenceDate} à ${absenceTime}.`);
    } else {
        alert("Veuillez remplir tous les champs.");
    }
}

// Fonction pour ajouter une remarque académique pour un étudiant spécifique
function addRemark() {
    const studentName = document.getElementById('remark-student-name').value;
    const remark = document.getElementById('academic-remark').value;

    if (studentName && remark) {
        alert(`Remarque ajoutée pour ${studentName}: "${remark}"`);
    } else {
        alert("Veuillez remplir tous les champs.");
    }
}

