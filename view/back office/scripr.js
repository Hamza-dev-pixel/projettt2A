function editRow(button) {
    const row = button.parentNode.parentNode;
    const cells = row.querySelectorAll('[contenteditable="true"]');

    cells.forEach(cell => {
        if (cell.getAttribute('contenteditable') === 'true') {
            cell.setAttribute('contenteditable', 'false');
            cell.style.backgroundColor = '';
        } else {
            cell.setAttribute('contenteditable', 'true');
            cell.style.backgroundColor = '#f0f8ff'; // Couleur de mise en évidence
        }
    });
}

function viewDetails(button) {
    const row = button.parentNode.parentNode;
    const name = row.children[1].textContent;
    const subject = row.children[2].textContent;

    alert(`Nom : ${name}\nMatière : ${subject}`);
}
