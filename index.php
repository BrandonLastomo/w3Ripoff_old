<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>

    <title>Welcome Page</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Asahina</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tipeData.php">Data Type</a></li>
            <li><a class="dropdown-item" href="conditional.php">Conditional Statement</a></li>
            <li><a class="dropdown-item" href="looping.php">Looping</a></li>
            <li><a class="dropdown-item" href="array.php">Array</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <a href="login.php">
        <button class="btn btn-danger" type="submit">Login</button>
        </a>
      </form>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="px-3 bg-dark text-light">
    <h1 class="pb-3">Hello<span class="text-danger">!</span></h1>
    <h5 class="ps-2">This is a web for you to learn the big picture of <a href="tipeData.php" class="text-danger">data type</a>, 
    <a href="conditional.php" class="text-danger">conditional statement</a>, <a href="looping.php" class="text-danger">looping</a>, and 
    <a href="array.php" class="text-danger">array</a> in php.</h5>
</header>

<!-- Footer -->
<footer class="text-center text-lg-start text-dark bg-light">
    <!-- Copyright -->
    <div class="text-center p-3 text-dark bg-light">
      &copy; 2022 Copyright: Brandon with
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>

</body>
</html>