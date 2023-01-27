<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <!-- css flie -->
            <link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
            <!-- bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            <!-- Ajax -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
            <div class="container">
            <div class="row">
                        <div class="section-content padd-15">
                                    <div class="row">
                                                <div class="card" style="width: 18rem;">
                                                            <div class="card-body">
                                                                        <h5 class="card-title">Admin</h5>
                                                                        <h6 class="card-subtitle mb-2 text-muted">Welcome</h6>
                                                                        <p class="card-text">Log In or Registration as a Admin</p>
                                                                        <!-- <a href="#Register"></a> -->
                                                                        <button class="btn btn-primary" id="admin">Admin</button>
                                                            </div>
                                                </div>
                                                <div class="card" style="width: 18rem;margin-left: 20px;">
                                                            <div class="card-body">
                                                                        <h5 class="card-title">User</h5>
                                                                        <h6 class="card-subtitle mb-2 text-muted">Welcome</h6>
                                                                        <p class="card-text">Log In or Registration as a User</p>
                                                                        <!-- <a href="#LogIn"></a> -->
                                                                        <button class="btn btn-primary"  id="user">User</button>
                                                            </div>
                                                </div>
                                    </div>
                        </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
</body>
<script>
            document.getElementById("admin").addEventListener("click",()=>{
                        window.open("./Admin/AdminIndex.php")
            })
            document.getElementById("user").addEventListener("click",()=>{
                        window.open("./Customer/CustomerIndex.php")
            })
</script>
</html>