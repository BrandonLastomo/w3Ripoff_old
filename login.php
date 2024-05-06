<?php
    session_start();
    include "conn.php";

    if (isset ($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        // $password = md5($_POST["password"]);

        $sql =  mysqli_query($conn, "select * from users where email = '$email' AND password = '$password'");

        if (mysqli_num_rows($sql) === 1) {
            $row = mysqli_fetch_assoc($sql);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['email'] = $row['email'];
                // $_SESSION['nama'] = $row['nama'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
                exit();
            }
                echo "
                <script>
                    alert('Login berhasil');
                </script>
                ";
                header('Location: index.php');
        }

        else {
            echo "
            <script>
                alert('Email atau password anda salah!');
            </script>
            ";
        }
    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Login</title>
</head>
<body class="bg-dark">

    
    <div class="row justify-content-start border border-dark my-4 mx-5 text-light">
        <div class="col-sm-5 my-4 ms-5 ps-5">
            <img src="public/img/loginImg.jpg" class="rounded float-start" style="width: 500px; height: 500px">
        </div>
        <div class="col-md-5" style="margin-top: 120px; margin-left: 100px">

                <main class="form-signin">
                    <h1 class="h3 mb-5 fw-normal text-center"><b>w3Ripoff</b></h1>

                    <form action="/login.php" method="POST">
                        <center>
                    <div class="form-floating col-md-8 pb-1">
                        <input type="email" name="email" class="form-control border border-dark @error('email') is-invalid @enderror"
                        id="email" placeholder="name@example.com" autofocus required>
                        <label for="email" class="text-secondary">Email address</label>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="form-floating col-md-8 pb-3">
                        <input type="password" name="password" class="form-control border border-dark" id="password" placeholder="Password" required>
                        <label for="password" class="text-secondary">Password</label>
                    </div>

                    <button class="w-25 btn btn-lg btn-primary mb-1" type="submit" name="login">Login</button>
                    
                    </center>
                    </form>
                    <small class="d-block text-center mt-3">
                        Not registered? <a href="/register.php" class="text-decoration-none text-brown">Register</a>
                    </small>
                </main>
            </div>
        </div>
        

<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>