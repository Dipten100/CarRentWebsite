$("#AdminRegistration").click(function () {
            var f = 0;
            data = {
                        name: $("#inputName").val(),
                        phone: $("#inputPhoneNumber").val(),
                        email: $("#inputEmail").val(),
                        password: $("#inputPassword").val(),
                        confromPassword: $("#inputConfromPassword").val(),
            }
            if (data.email == ""|| !data.email.includes("@")) {
                        document.querySelector(".error-msg-mail").classList.remove("hidden")
                        f=0
            } else {
                        document.querySelector(".error-msg-mail").classList.add("hidden")
                        f=1
            }
            if (data.password == "") {
                        document.querySelector(".error-msg-pass").classList.remove("hidden")
                        f=0
            } else {
                        document.querySelector(".error-msg-pass").classList.add("hidden")
                        if (data.password != data.confromPassword) {
                                    document.querySelector(".error-msg-check").classList.remove("hidden")
                                    f = 0;
                        } else {
                                    document.querySelector(".error-msg-check").classList.add("hidden")
                                    f=1
                        }
            }
            console.log(data)
            if (f == 1) {
                        $.ajax({
                                                method: "POST",
                                                url: "AdminReg.php",
                                                data: data,
                                    success: function (data) {
                                                            go(data);
                                                }
                                    })
            }
})
$("#AdminSignIn").click(function () {
            var f = 0;
            data = {
                        email: $("#inputEmail3").val(),
                        password: $("#inputPassword3").val(),
            }
            if (data.email == ""|| !data.email.includes("@")) {
                        document.querySelector(".error-msg-mail").classList.remove("hidden")
                        f=0
            } else {
                        document.querySelector(".error-msg-mail").classList.add("hidden")
                        f=1
            }
            if (data.password == "") {
                        document.querySelector(".error-msg-pass").classList.remove("hidden")
                        f=0
            } else {
                        document.querySelector(".error-msg-pass").classList.add("hidden")
                        f = 1
            }
            console.log(data)
            if (f == 1) {
                        $.ajax({
                                                method: "POST",
                                                url: "AdminLog.php",
                                                data: data,
                                                success: function (data) {
                                                            go(data);
                                                }
                                    })
            }
})
function go(e) {
            if (e == 1) {
                        document.getElementById("show").classList.remove("hidden");
                        document.getElementById("show1").classList.remove("hidden");
                        localStorage.setItem("logInStatus", 1);
                        localStorage.setItem("userEmail", data.email);
            } else {
                        document.getElementById("show").classList.add("hidden");
                        document.getElementById("show1").classList.add("hidden");
                        localStorage.setItem("logInStatus", 1);
                        localStorage.setItem("userEmail", data.email);
            }
}
$.ajax({
            method: "POST",
            url: "showAvCar.php",
            success: function (data) {
                        $("#showCar").html(data);
            }
})
$.ajax({
            method: "POST",
            url: "showBookCar.php",
            success: function (data) {
                        $("#showBookCar").html(data);
            }
})
$("#addNewCar").click(function () {
            data = {
                        model:$("#model").val(),
                        number:$("#number").val(),
                        seat:$("#seat").val(),
                        rent:$("#rent").val(),
            }
            $.ajax({
                        method: "POST",
                        url: "addNewCar.php",
                        data:data,
                        success: function (data) {
                                    s(data)
                        }
            })
})
function s(params) {
            console.log(params)
            if (params == 1) {
                        document.getElementById("show3").classList.remove("hidden");
            } else {
                        document.getElementById("show3").classList.add("hidden");
            }
}