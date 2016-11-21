 $(document).ready(function () {
    var loginForm = $('.login_form');

    loginForm.on('submit', function (e) {
        e.preventDefault();
        
        var data = '{"username":"' + $("input.username").val() + '","password":"' + $("input.password").val() + '"}';
        $.ajax({
            type: "POST",
            url: "/services/loginService.php",
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                if (data) {
                    //document.cookie = "authenticated=authenticated; path=/";
                    window.location.replace("/index.php");
                }
            }
    });
 });
 });
