class User {
    constructor(username, password) {
        this.Username = username;
        this.Password = password;
    }

    // Getter for Username
    get getUsername() {
        return this.Username;
    }

    // Setter for Username
    set setUsername(username) {
        this.Username = username;
    }

    // Getter for Password
    get getPassword() {
        return this.Password;
    }

    // Setter for Password
    set setPassword(password) {
        this.Password = password;
    }

    isValid() {
        return this.Username === 'admin' && this.Password === 'pass';
    }

    isValid() {
        return this.Username === 'admin' && this.Password === 'pass';
    }
}

function validatesLogin() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    const user = new User(username, password);

    if (user.isValid()) {
        window.location.href = 'index.html';
    } else {
        alert('Invalid login credentials. Please try again.');
    }
}

