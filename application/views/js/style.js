function masuk() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username == 'root' && password == '') {
        alert("success");
    } else {
        alert("failed")
    }
}