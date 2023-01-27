<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <!-- css flie -->
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
            <!-- bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            <!-- Ajax -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
            <!-- Main Container Start -->
            <div class="main-container">
                        <!-- Aside Start -->
                        <div class="aside">
                                    <div class="container">
                                                <div class="nav-toggler">
                                                            <span></span>
                                                </div>
                                                <ul class="nav">
                                                            <li><a href="#Home" class="active"><i class="fa fa-home"></i>Home</a></li>
                                                            <li><a href="#availableCar"><i class="fa fa-car-on"></i>Available cars to rent</a></li>
                                                            <li><a href="#bookCar"><i class="fa fa-check"></i>View booked cars</a></li>
                                                </ul>
                                    </div>
                        </div>>
                        <!-- Aside end -->
                        <!-- home start -->
                                    <div class="section home" id="Home">
                                                <div class="container">
                                                            <div class="row">
                                                                        <div class="section-title padd-15">
                                                                                    <h2>Home Page</h2>
                                                                        </div>
                                                                        <div class="section-content padd-15">
                                                                                    <div class="row">
                                                                                                <div class="card" style="width: 18rem;">
                                                                                                            <div class="card-body">
                                                                                                                        <h5 class="card-title">Register</h5>
                                                                                                                        <h6 class="card-subtitle mb-2 text-muted">If you are a new user</h6>
                                                                                                                        <p class="card-text">Welcome, Please register here, click below button</p>
                                                                                                                        <a href="#"><button class="btn btn-primary" onclick="registerBtnClick()">Register</button></a>
                                                                                                            </div>
                                                                                                </div>
                                                                                                <div class="card" style="width: 18rem;margin-left: 20px;">
                                                                                                            <div class="card-body">
                                                                                                                        <h5 class="card-title">Log In</h5>
                                                                                                                        <h6 class="card-subtitle mb-2 text-muted">Good to see you</h6>
                                                                                                                        <p class="card-text">welcome Sir, Please log In here</p>
                                                                                                                        <a href="#"><button class="btn btn-primary" onclick="logInBtnClick()">Log In</button></a>
                                                                                                            </div>
                                                                                                </div>
                                                                                    </div>
                                                                        </div>
                                                                        <!-- Register In page start -->
                                                                        <div class="section-content padd-15 hidden" id="Register">
                                                                                    <div class="row">
                                                                                                <form class="padd-15">
                                                                                                            <div class="row mb-3">
                                                                                                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                                                                                        <div class="col-sm-10">
                                                                                                                                    <input type="text" class="form-control" id="inputName">
                                                                                                                        </div>
                                                                                                            </div>
                                                                                                            <div class="row mb-3">
                                                                                                                        <label for="inputPhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                                                                                                                        <div class="col-sm-10">
                                                                                                                                    <input type="number" class="form-control" id="inputPhoneNumber">
                                                                                                                        </div>
                                                                                                            </div>
                                                                                                            <div class="row mb-3">
                                                                                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                                                                                        <div class="col-sm-10">
                                                                                                                                    <input type="email" class="form-control" id="inputEmail">
                                                                                                                                    <h3 class="error-msg-mail hidden" style="color: red;font-size: 16px;font-weight: 400;">email must be content @ and not null</h3>
                                                                                                                        </div>
                                                                                                            </div>
                                                                                                            <div class="row mb-3">
                                                                                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                                                                                                        <div class="col-sm-10">
                                                                                                                                    <input type="password" class="form-control" id="inputPassword">
                                                                                                                                    <h3 class="error-msg-pass hidden" style="color: red;font-size: 16px;font-weight: 400;">password must be unique and not null</h3>
                                                                                                                        </div>
                                                                                                            </div>
                                                                                                            <div class="row mb-3">
                                                                                                                        <label for="inputConfromPassword3" class="col-sm-2 col-form-label">Confrom Password</label>
                                                                                                                        <div class="col-sm-10">
                                                                                                                                    <input type="password" class="form-control" id="inputConfromPassword">
                                                                                                                                    <h3 class="error-msg-check hidden" style="color: red;font-size: 16px;font-weight: 400;">password not matched</h3>
                                                                                                                        </div>
                                                                                                            </div>
                                                                                                            <button type="submit" class="btn btn-primary" id="customerRegistration">Register</button>
                                                                                                </form>
                                                                                                <div class="alert alert-primary hidden" id="show" role="alert">
                                                                                                            registration SuccessFull
                                                                                                </div>
                                                                                    </div>
                                                                        </div>
                                                                        <!-- Register In page end -->
                                                                        <!-- log In page start -->
                                                                        <div class="section-content padd-15 hidden" id="LogIn">
                                                                                    <div class="row">
                                                                                                <form class="padd-15">
                                                                                                            <div class="row mb-3">
                                                                                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                                                                                        <div class="col-sm-10">
                                                                                                                                    <input type="email" class="form-control" id="inputEmail3">
                                                                                                                                    <h3 class="error-msg-mail hidden" style="color: red;font-size: 16px;font-weight: 400;">email must be content @ and not null</h3>
                                                                                                                        </div>
                                                                                                            </div>
                                                                                                            <div class="row mb-3">
                                                                                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                                                                                                        <div class="col-sm-10">
                                                                                                                                    <input type="password" class="form-control" id="inputPassword3">
                                                                                                                                    <h3 class="error-msg-pass hidden" style="color: red;font-size: 16px;font-weight: 400;">password must be unique and not null</h3>
                                                                                                                        </div>
                                                                                                            </div>
                                                                                                            <button type="submit" class="btn btn-primary" id="customerSignIn">Sign in</button>
                                                                                                </form>
                                                                                                <div class="alert alert-primary hidden" id="show1" role="alert">
                                                                                                            logIn SuccessFull
                                                                                                </div>
                                                                                    </div>
                                                                        </div>
                                                                        <!-- log In page end -->
                                                            </div>
                                                </div>
                                    </div>
                        <!-- home end -->
                        <!-- Available cars to rent start -->
                        <div class="section avilable-cars" id="availableCar">
                                    <div class="container">
                                                <div class="row">
                                                            <div class="section-title padd-15">
                                                                        <h2>Available Cars to Rent</h2>
                                                            </div>
                                                            <div class="section-content padd-15">
                                                                        <div class="row">
                                                                                    <table class="table">
                                                                                                <thead>
                                                                                                            <tr>
                                                                                                                        <th scope="col">Sl No.</th>
                                                                                                                        <th scope="col">Vehicle model</th>
                                                                                                                        <th scope="col">Vehicle number</th>
                                                                                                                        <th scope="col">Seat capacity</th>
                                                                                                                        <th scope="col">Rent per day</th>
                                                                                                                        <th scope="col">Start Date</th>
                                                                                                                        <th scope="col">End Date</th>
                                                                                                            </tr>
                                                                                                </thead>
                                                                                                <tbody id="showCar">
                                                                                                </tbody>
                                                                                    </table>
                                                                        </div>
                                                            </div>
                                                </div>
                                    </div>
                        </div>
                        <!-- Available cars to rent end -->
                        <!-- View Booked cars start -->
                        <div class="section book-cars" id="bookCar">
                                    <div class="container">
                                                <div class="row">
                                                            <div class="section-title padd-15">
                                                                        <h2>Book Car</h2>
                                                            </div>
                                                            <div class="section-content padd-15">
                                                                        <div class="row">
                                                                                    <table class="table">
                                                                                                <thead>
                                                                                                            <tr>
                                                                                                                        <th scope="col">Sl No.</th>
                                                                                                                        <th scope="col">Vehicle model</th>
                                                                                                                        <th scope="col">Vehicle number</th>
                                                                                                                        <th scope="col">Seat capacity</th>
                                                                                                                        <th scope="col">Rent per day</th>
                                                                                                                        <th scope="col">Start Date</th>
                                                                                                                        <th scope="col">End Date</th>
                                                                                                            </tr>
                                                                                                </thead>
                                                                                                <tbody id="showData">
                                                                                                </tbody>
                                                                                    </table>
                                                                        </div>
                                                            </div>
                                                </div>
                                    </div>
                        </div> -->
                        <!-- View Booked cars end
            </div>
            <!-- Main Container end -->
            <!-- js file -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
            <script src="../js/script.js"></script>
            <script src="./customer.js"></script>
</body>
</html>