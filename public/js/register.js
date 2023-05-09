function register() {
  var name = document.getElementById('login_name');
  var email = document.getElementById('user_infor');
  var pass = document.getElementById('user_password');
  var passconfirm = document.getElementById('user_passwordconfirm');

  switch (true) {
    case (name.value.length == 0):
      alert('Vui lòng nhập họ và tên');
      break;
    case (email.value.length == 0):
      alert('Vui lòng nhập email');
      break;
    case (!/\S+@\S+\.\S+/.test(email.value)):
      alert('Vui lòng nhập đúng định dạng email');
      break;
    case (pass.value.length == 0):
      alert('Vui lòng nhập mật khẩu');
      break;
    case (passconfirm.value.length == 0):
      alert('Vui lòng xác nhận lại mật khẩu');
      break;
    case (pass.value != passconfirm.value):
      alert('Hai mật khẩu không giống nhau!');
      break;
    default:
      var formData = new FormData();
      formData.append('name', name.value);
      formData.append('email', email.value);
      formData.append('password', pass.value);
      formData.append('confirmpass', passconfirm.value);

      fetch('/register', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status == 'success') {
          alert('Tài khoản của bạn đã được tạo thành công!');
        } else {
          alert(data.message);
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
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