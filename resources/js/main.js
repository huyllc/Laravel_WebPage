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

function resetPass(){
    var email = document.getElementById("login_id");
    if (email.value.length != 0){
        alert('Gửi lại mật khẩu thành công!');
    }
}

function register() {
    var name = document.getElementById('login_name');
    var email_tel = document.getElementById('user_infor');
    var pass = document.getElementById('user_password');
    var passconfirm = document.getElementById('user_passwordconfirm');
    
    switch (true) {
        case (name.value.length == 0):
          alert('Vui lòng nhập họ và tên');
          break;
        case (email_tel.value.length == 0):
          alert('Vui lòng nhập email hoặc số điện thoại');
          break;
        case (pass.value.length == 0):
          alert('Vui lòng nhập mật khẩu');
          break;
        case (passconfirm.value.length == 0):
          alert('Vui lòng xác nhận lại mật khẩu');
          break;
        case (pass.value.length != passconfirm.value.length):
          alert('Hai mật khẩu không giống nhau!');
          break;
        case (name.value.length == 0 && email_tel.value.length == 0 && pass.value.length == 0 && passconfirm.value.length == 0):
          alert('Vui lòng nhập đầy đủ thông tin');
          break;
        default:
          localStorage.setItem('username', name.value);
          localStorage.setItem('email_phonenumber', email_tel.value);
          localStorage.setItem('password', pass.value);
          alert('Tài khoản của bạn đã được tạo thành công!');
          window.location.href = "../Login.html";
          break;
      }
      
}

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