// Fonction pour ajouter une nouvelle ligne au tableau
document.getElementById('addButton').addEventListener('click', function () {
    const tableBody = document.getElementById('tableBody');

    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td><img src="https://via.placeholder.com/40" alt="User"></td>
        <td>Nouvel Utilisateur</td>
        <td class="class-cell">Non spécifiée</td>
        <td><button class="edit-btn" onclick="editRow(this)">Edit</button></td>
        <td><button class="details-btn" onclick="viewDetails(this)">Détails</button></td>
    `;
    tableBody.appendChild(newRow);
    alert('Nouvel utilisateur ajouté avec succès!');
});

// Fonction pour modifier la classe d'un étudiant
function editRow(button) {
    const row = button.closest('tr');
    const classCell = row.querySelector('.class-cell');
    const newClass = prompt('Entrez la nouvelle classe :', classCell.textContent);

    if (newClass) {
        classCell.textContent = newClass;
        alert('Classe modifiée avec succès!');
    }
}

// Fonction pour afficher les détails d'une ligne
function viewDetails(button) {
    const row = button.closest('tr');
    const name = row.children[1].textContent;
    const classe = row.querySelector('.class-cell').textContent;
    alert(`Détails de ${name} : Classe - ${classe}`);
}
