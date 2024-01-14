const username = document.getElementById('login_username')
const password = document.getElementById('login_password')

function onLogin() {
    const obj = {
        username: username.value,
        password: password.value,
        loginTrigger: true
    }
    $.ajax({
        method: 'post',
        url: 'app/helper/login_helper.php',
        data: obj,
        success: function(response){
            const parsedRes = JSON.parse(response)
            if(parsedRes[0].key == "ACCOUNT_NOT_FOUND") {
                alert("account not found");
            } else if(parsedRes[0].key == "PASSWORD_INVALID") {
                alert("Invalid password");
            } else {
                alert("success login");
                window.location.href = "http://localhost/Dash_SchedulerOriginal/login-register/index.php";
            }
        }
    })
}