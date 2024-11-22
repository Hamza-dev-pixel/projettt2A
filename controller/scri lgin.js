document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;

    if (username && password && role) {
        alert(`Bienvenue ${role} ${username} !`);
    } else {
        alert("Veuillez remplir tous les champs.");
    }
});
