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