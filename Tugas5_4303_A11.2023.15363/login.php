<?php
    session_start();
    if(isset($_SESSION['isLoggedIn']))
    {
        if($_SESSION['isLoggedIn'])
        {
            header("Location:home.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #8174A0;
            margin: 0;
            padding: 0;
        }
        .card {
            background-color: #EFB6C8;
            border-radius: 10px;
            padding: 20px;
        }
        .btn-primary {
            color: black;
            background-color: #BC7FCD;
            border: none;
        }
        .btn-primary:hover {
            background-color: #8174A0;
        }
        .image {
            width: 300px;
            height: auto;
            margin-right: 20px;
        }
        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .social-login a {
            width: 50px;
            text-align: center;
            padding: 10px;
            color: black;
            text-decoration: none;
        }
        .avatar{
            position: absolute;
            width: 80px;
            height: 90px;
            top :-10%
            
        }
        .cat{
            width: 300px;
            height: 333px;
        }
    </style>
</head>
<body>
        <img src="hntu.png" alt="Image" class="image">
        <div class="card shadow p-4">
            <h3 class="text-center mb-4">Login</h3>
            <img src="cat.png" alt="Image" class="avatar">
            <form action="aksilogin.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
            <div class="text-center mt-3">Or login with</div>
            <div class="social-login mt-2">
                <a href="" ><i class="fa fa-facebook fa-2x" style="color: #3b5998;"></i></a>
                <a href=""><i class="fa fa-google fa-2x" style="color: #dd4b39;"></i></a>
                <a href=""><i class="fa fa-twitter fa-2x" style="color: #55acee;"></i>
                </a>
            </div>
        </div>
</body>
</html>
