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