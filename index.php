<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION/index</title>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.css">
    <script src="./bootstrap5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="contanr d-flex justify-content-center align-items-center ">
        <div class="col-lg-5 col-sm-8 col-md-6 ">
            <div class="bg-light p-4 shadow" style=" border-radius: 20px;">
                <div class=" d-flex flex-column">
                    <div class="ms-4">
                        <h1 class="ps-2 border-start">E-class</h1>
                    </div>
                    <div class="text-center">
                        <h3 class="text-uppercase">Sign In</h3>
                        <p class="text-muted">Enter your credentials to access your account</p>
                    </div>
                    <form action="">
                    <div class=" d-flex flex-column text-muted ">
                        <label for="" class="col-form-label">E-mail</label>
                        <input type="email" placeholder="Enter your email"
                            class="w-100 rounded-3 border  p-2 bg-transparent form-control">
                    </div>
                    <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter your password"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                  
                    <div class="mt-3">
                        <a href="dashboard.php" class="btn btn-info w-100 rounded-3 border-1 text-white text-uppercase">  Sign in </a>
                    </div>
                    </form>
                    <div class="text-center mt-3">
                        <p class="text-muted fs-6">Forgot your password?<a href="#" class="text-info">Reset Password</a>
                        </p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>