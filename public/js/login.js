function check() {
    var storedEmail_Tel = localStorage.getItem('email_phonenumber');
    var storedPassword = localStorage.getItem('password');
    var loginid = document.getElementById('login_id');
    var password = document.getElementById('user_password');

    switch (true) {
    case (loginid.value == storedEmail_Tel && password.value == storedPassword):
        alert('Đăng nhập thành công');
        break;
    case (loginid.value.length == 0 && password.value.length == 0):
        alert('Vui lòng nhập đầy đủ thông tin');
        break;
    case (loginid.value.length == 0):
        alert('Vui lòng nhập tài khoản');
        break;
    case (password.value.length == 0):
        alert('Vui lòng nhập mật khẩu');
        break;
    default:
        alert('Đăng nhập thất bại');
        break;
    }
}

function showPassword() {
    var passwordField = document.getElementById("user_password");
    var icon = document.querySelector(".input-icon-1");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    } else {
        passwordField.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
}