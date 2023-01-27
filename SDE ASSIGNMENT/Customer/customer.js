$(document).ready(function () {
            $("#customerRegistration").click(function () {
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
                        if (f == 1) {
                                    $.ajax({
                                                method: "POST",
                                                url: "reg.php",
                                                data: data,
                                                success:function (data) {
                                                            go(data,data.email);
                                                }
                                    })
                        }
            })
})

$("#customerSignIn").click(function () {
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
            if (f == 1) {
                        $.ajax({
                                                method: "POST",
                                                url: "log.php",
                                                data: data,
                                                success:function (data) {
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
            url: "showAvailableaCar.php",
            success: function (data) {
                        $("#showCar").html(data);
            }
})
localStorage.setItem("bookId", "[]");
function book(params) {
            if (localStorage.getItem("logInStatus") == 1) {
                        var Start=document.getElementById("Sdate"+params).value
                        var end = document.getElementById("Edate" + params).value
                        if (Start != "" && end != "") {
                                    data = {
                                                            StartDate: Start,
                                                            EndDate: end,
                                                            id: params,
                                                            email:localStorage.getItem("userEmail")
                                                }
                                                $.ajax({
                                                            method: "POST",
                                                            url: "storeData.php",
                                                            data:data,
                                                })
                                    var oldData = JSON.parse(localStorage.getItem("bookId"));
                                    oldData.push(params);
                                    localStorage.setItem("bookId", JSON.stringify(oldData));
                        } else {
                                    alert("Please Enter date")
                        }
            } else {
                        alert("You can't Book Car Before LogIn. LogIn first")
            }
            var oldData = JSON.parse(localStorage.getItem("bookId"));
            oldData.push(params);
            localStorage.setItem("bookId", JSON.stringify(oldData));
            // console.log(params);
            // console.log(Start);
}

 $.ajax({
             method: "POST",
             url: "bookData.php",
             data:{email:localStorage.getItem("userEmail")},
             success: function (data) {
                         $("#showData").html(data);
             }
 })