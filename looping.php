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
    <title>Looping</title>
</head>
<body class="bg-dark">

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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            This Page's Contents
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#content">Definition of Looping</a></li>
            <li><a class="dropdown-item" href="#for">For</a></li>
            <li><a class="dropdown-item" href="#while">While</a></li>
            <li><a class="dropdown-item" href="#dowhile">Do While</a></li>
            <li><a class="dropdown-item" href="#foreach">Foreach</a></li>
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

<!-- Prolog -->
<div class="pt-5 pb-2 mb-3 px-5 bg-light text-dark rounded" id="content">
        <h3 class="text-danger">Looping</h3>
        <br>    
        <p>Often when you write code, you want the same block of code to run over and over again a certain number of times. 
            So, instead of adding several almost equal code-lines in a script, we can use loops.
            <br>
            Loops are used to execute the same block of code again and again, as long as a certain condition is true.
            <br>
            There are four loop types in PHP:</p>
        <ul>
            <li>For</li>
            <li>While</li>
            <li>Do while</li>
            <li>Foreach</li>
        </ul>
        <br>
        <hr>

<!-- Lesson -->

    <!-- For -->
    <p id="reminder"><span class="text-danger">*</span>Just a kindly reminder that the statements in the examples here are the most basic one, so don't get too attached to it. Thank you!</p>
    <div class="mt-3 pt-3" id="for">
            <h3 class="text-danger">1. For</h3>
            <br>
            <p>For type loops through a block of code a specified number of times.</p>
            
        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="if">for</span> <span id="kurung1">(</span>
                <span id="variable">$x</span> = <span id="number">0</span>; 
                <span id="variable">$x</span> < <span id="number">5</span>; 
                <span id="variable">$x</span>++
                <span id="kurung1">) {</span>
                  <br>
                <span id="echo">echo</span> <span id="string">"Halo! < br >"</span>;
                  <br>
                <span id="kurung1">}</span>
                  <br>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                <?php
                
                for ($x = 0; $x < 5; $x++) {
                    echo "Halo! <br>";
                }

                ?>
              </p>
            </p>
        </div>
        <br>

        <h5>Try It Yourself!</h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
          <p id="program">
                  <form action="" method="POST" id="program">
                  <span id="if">for</span> <span id="kurung1">(</span>
                  <span id="variable">$</span> <input type="text" name="forVar1"> = 
                  <input type="text" name="forVal1" id="ifVal1"> ; 
                  <span id="variable">$</span> <input type="text" name="forVar2" id="forVar2"> <  
                  <input type="text" name="forBond1" id="forBond1"> ; 
                  <span id="variable">$</span> <input type="text" name="forVar3" id="forVar3"> ++ 
                  <span id="kurung1">) {</span>
                    <br><br>
                  <span id="echo">echo</span> 
                  <span id="string">" <input type="text" name="forOut1"> < br >"</span>;
                    <br>
                  <span id="kurung1">}</span> 
                    <br><br>
                  <button type = "submit" class="btn btn-danger" name="forBut">Show Output</button>
                  </form>
                    <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php

                      if (isset ($_POST["forBut"])) {
                          if ($_POST["forVar1"] == $_POST["forVar2"] && $_POST["forVar1"] == $_POST["forVar3"]) {
                                  for ($i = $_POST["forVal1"]; $i < $_POST["forBond1"]; $i++) { 
                                    echo $_POST["forOut1"] . "<br>";
                                  }
                          }

                          else {
                              echo "Your variable doesn't match!";
                          }
                      }

                      ?>
                  </p>
              </p>    
          </p>
        </div>
    </div><br><hr>

    <!-- While -->
    <div class="mt-3 pt-3" id="while">
            <h3 class="text-danger">2. While</h3>
            <br>
            <p>While type loops through a block of code as long as the specified condition is true.</p>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="variable">$x</span> = <span id="number">0</span>;
                  <br><br>
                <span id="if">while</span> <span id="kurung1">(</span>
                <span id="variable">$x</span> < <span id="number">5</span> 
                <span id="kurung1">) {</span>
                  <br>
                <span id="echo">echo</span> <span id="string">"Hello! < br >"</span>;
                  <br>
                <span id="variable">$x</span>++;
                  <br>
                <span id="kurung1">}</span>
                  <br>
                  <hr>
            <p id="program">
                Output:
                <br>
                <?php
                
                $x = 0;

                while ($x < 5) {
                  echo "Hello! <br>";
                  $x++;
                }
                
                ?>
            </p>
            </p>
        </div>
        <br>

        <h5>Try It Yourself!</h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
          <p id="program">
                  <form action="" method="POST" id="program">
                  <span id="variable">$</span> <input type="text" name="whileVar1"> = 
                  <input type="text" name="whileVal1"> ; 
                    <br><br>
                  <span id="if">while</span> <span id="kurung1">(</span>
                  <input type="text" name="whileVar2"> <  
                  <input type="text" name="whileBond1">
                  <span id="kurung1">) {</span>
                    <br><br>
                  <span id="echo">echo</span> <span id="string">"
                  <input type="text" name="whileOut1"> < br >"</span>;
                    <br>
                  <span id="kurung1">}</span> 
                    <br><br>
                  <button type = "submit" class="btn btn-danger" name="whileBut">Show Output</button>
                  </form>
                    <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php

                      if (isset ($_POST["whileBut"])) {
                          if ($_POST["whileVar1"] == $_POST["whileVar2"]) {
                            $i = $_POST["whileVal1"];
                                  while ($i < $_POST["whileBond1"]) { 
                                    echo $_POST["whileOut1"] . "<br>";
                                    $i++;
                                  }
                          }

                          else {
                              echo "Your variable doesn't match!";
                          }
                      }

                      ?>
                  </p>
              </p>    
          </p>
        </div>
    </div><br><hr>

    <!-- Do while -->
    <div class="mt-3 pt-3" id="dowhile">
            <h3 class="text-danger">3. Do while</h3>
            <br>
            <p>Do while loops through a block of code once, and then repeats the loop as long as the specified condition is true.</p>
        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="variable">$x</span> = <span id="number">0</span>;
                  <br><br>
                <span id="if">do</span> <span id="kurung1">{</span>
                  <br>
                <span id="echo">echo</span> <span id="string">"Hai! < br >"</span>;
                  <br>
                <span id="variable">$x</span>++;
                  <br>
                <span id="kurung1">}</span> <span id="if">while</span> <span id="kurung1">(</span>
                <span id="variable">$x</span> < <span id="number">5</span> <span id="kurung1">)</span>;
                <br>
                <hr>
            <p id="program">
                Output:
                <br>
                <?php

                $x = 0;

                  do {
                    echo "Hai! <br>";
                    $x++;
                  } while ($x < 5);

                ?>
            </p>
            </p>
        </div>
        <br>
        <h5>Try It Yourself!</h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
         <p id="program">
                <form action="" method="POST" id="program">
                <span id="variable">$</span> <input type="text" name="dowhileVar1"> = 
                <input type="text" name="dowhileVal1"> ; 
                  <br><br><br>
                <span id="if">do</span> <span id="kurung1">{</span>
                  <br><br>
                <span id="echo">echo</span> <span id="string">"
                <input type="text" name="dowhileOut1"> < br >"</span>; 
                  <br><br>
                <span id="variable">$ </span><input type="text" name="dowhileInc1"> ++;
                <span id="kurung1">}</span> 
                  <br><br> 
                <span id="if">while</span> <span id="kurung1">(</span> 
                <input type="text" name="dowhileVar2"> <  
                <input type="text" name="dowhileBond1"> 
                <span id="kurung1">)</span>; 
                  <br><br>
                <button type = "submit" class="btn btn-danger" name="dowhileBut">Show Output</button>
                </form>
                <hr>
            <p id="program">
                Output:
                <br>
                <p id="program">
                    <?php
                    if (isset ($_POST["dowhileBut"])) {
                        if ($_POST["dowhileVar1"] == $_POST["dowhileVar2"]) {
                          $i = $_POST["dowhileVal1"];
                            do {
                              echo $_POST["dowhileOut1"] . "<br>";
                              $i++;
                            }
                            while ($i < $_POST["dowhileBond1"]);
                        }

                        else {
                            echo "Your variable doesn't match!";
                        }
                    }

                    ?>
                </p>
            </p>    
         </p>
        </div>
    </div><br><hr>

    <!-- Foreach -->
    <div class="mt-3 pt-3" id="foreach">
            <h3 class="text-danger">4. Foreach</h3>
            <br>
            <p>Foreach type loops through a block of code for each element in an array.</p>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
              <span id="variable">$arr</span> = <span id="echo">array</span> <span id="kurung1">(</span> 
              <span id="string">"sushi"</span>, <span id="string">"oden"</span>, <span id="string">"shirataki"</span>
              <span id="kurung1">)</span>;
                <br><br>
              <span id="if">foreach</span> <span id="kurung1">(</span> <span id="variable">$arr</span> 
              as <span id="variable">$value</span> 
              <span id="kurung1">) {</span>
                <br>
              <span id="echo">echo</span> <span id="variable">$value</span> . <span id="string">" < br >"</span>;
                <br>
              <span id="kurung1">}</span>
                <br>
                <hr>
              <p id="program">
                Output:
                <br>
                <?php
                
                $arr = array("sushi", "oden", "shirataki");

                foreach ($arr as $value) {
                    echo $value . " <br>";
                }

                ?>
              </p>
            </p>
        </div>
        <br>

        <h5>Try It Yourself!</h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
          <p id="program">
                  <form action="" method="POST" id="program">
                    <span id="variable">$ </span><input type="text" name="arrVar1"> = 
                    <span id="echo">array</span> <span id="kurung1">(</span>
                    <span id="string">" <input type="text" name="arrVal1"> "</span>, 
                    <span id="string">" <input type="text" name="arrVal2"> "</span>, 
                    <span id="string">" <input type="text" name="arrVal3"> "</span>
                    <span id="kurung1">)</span>; 
                      <br><br><br>
                    <span id="if">foreach</span> <span id="kurung1">(</span>
                    <input type="text" name="arrVar2"> as <span id="variable">$value</span> 
                    <span id="kurung1">) {</span>
                      <br><br>
                    <span id="echo">echo</span> <span id="variable">$value</span> . <span id="string">"< br >"</span>;
                      <br><br>
                    <span id="kurung1">}</span>
                      <br><br>
                    <button type = "submit" class="btn btn-danger" name="arrBut">Show Output</button>
                  </form>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php

                      if (isset ($_POST["arrBut"])) {
                        $arr = [$_POST["arrVal1"], $_POST["arrVal2"], $_POST["arrVal3"]];
                          if ($_POST["arrVar1"] == $_POST["arrVar2"]) {
                            foreach ($arr as $value) {
                              echo $value . "<br>";
                            }
                          }

                          else {
                              echo "Your variable doesn't match!";
                          }
                      }

                      ?>
                  </p>
              </p>    
          </p>
        </div>
    </div><br>
</div>

<!-- Footer -->
<footer
          class="text-center text-lg-start text-light bg-dark"
          style="border-top: solid 1px lightgray"
          >
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-1 col-lg-1 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="fw-bold" id="footer-brand">Asahina</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-light">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-light">Blog</a>
            </p>
            <p>
              <a href="#!" class="text-light">Career</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Guide and Help</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-light">Privacy Policy</a>
            </p>
            <p>
              <a href="#!" class="text-light">Terms and Condition</a>
            </p>
            <p>
              <a href="#!" class="text-light">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col col-xl-3 mx-auto mb-4 text-end">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i>Karawang, Indonesia</p>
            <p><i class="fas fa-envelope mr-3"></i>asahinaco@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i>(0267) 1234</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3 text-light bg-dark">
      &copy; 2022 Copyright: Brandon with
      <a class="text-light" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
</footer>


</body>
</html>