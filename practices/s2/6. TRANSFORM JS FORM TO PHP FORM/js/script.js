function logIn(event) {
    event.preventDefault();
    let password = document.getElementById('password').value;
    if (password == "1234") {
        document.getElementById('hidden').style.display = 'block';
    }
}

document.getElementById('login_btn').addEventListener('click', logIn);