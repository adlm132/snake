var loggedIn = false;

function login(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Verificar credenciales
    if (username === "usuario" && password === "contraseña") {
        loggedIn = true;
        alert("Has iniciado sesión.");
        window.location.href = "game.html"; // Redirigir al juego
    } else {
        alert("Credenciales inválidas. Inténtalo de nuevo.");
    }
}

function logout() {
    loggedIn = false;
    alert("Has cerrado sesión.");
    window.location.href = "login.html"; // Redirigir al inicio de sesión
}
