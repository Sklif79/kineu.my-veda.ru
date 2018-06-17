$(document).ready(function(){

            var options = {
    timeout: 3000 ,// тайм-аут
    success : function(response) {
            $("#register").html(response);
            var err=$("#errL").attr('err');
            confirm(err);

            //$("#linkJS").html("<span class='enter'>"+userLogin+"</span><span class='register'><a href='?logout=yes' >Выйти</a></span>");
            }
     };

    $("#FormRegValid").validate({
        submitHandler: function(form) {
      $(form).ajaxSubmit(options);
    },
       rules:{
           L_USER_LOGIN:{
                required: true,
                minlength: 4,
                maxlength: 16,
            },
            L_USER_PASSWORD:{
                required: true,
                minlength: 6,
                maxlength: 16,
            },
            L_USER_CONFIRM_PASSWORD:{
                required: true,
                minlength: 6,
                maxlength: 16,
                equalTo: "#L_USER_PASSWORD",
            },
            L_USER_LAST_NAME:{
                required: true,
                minlength: 2,
            },
             L_USER_EMAIL:{
                required: true,
                email: true,
            },

       },
       messages:{
            L_USER_LOGIN:{
                required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 4 символов",
                maxlength: "Максимальное число символов - 16",
            },
            L_USER_PASSWORD:{
                required: "Это поле обязательно для заполнения",
                minlength: "Пароль должен быть минимум 6 символов",
                maxlength: "Пароль должен быть максимум 16 символов",
            },
            L_USER_CONFIRM_PASSWORD:{
                required: "Это поле обязательно для заполнения",
                equalTo: "Пароли должны совподать",
                minlength: "Пароль должен быть минимум 6 символов",
                maxlength: "Пароль должен быть максимум 16 символов",
            },
            L_USER_LAST_NAME:{
                required: "Это поле обязательно для заполнения",
                minlength: "Имя должен быть минимум 2 символа",
            },
            L_USER_EMAIL:{
                required: "Это поле обязательно для заполнения",
                email: "Email адрес должен быть корректным",
            },
       }
    });
});