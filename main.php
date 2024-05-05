<?php

// no 1
$a = 5;
$b = 3.45;
$c = 'a';
$d = "Hello World";

// no 2
// if
// $i = "yes";

// if ($i == "yes") {
//     echo("Hello!");
// }

// if else
// if elseif else
// switch

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <title>Main Page</title>
</head>
<body>
    <h3>No. 1</h3>
    <h4>integer</h4>
    <p id = "int"><?php echo $a; ?></p>
    <h4>float</h4>
    <p id = "float"><?php echo $b; ?></p>
    <h4>char</h4>
    <p id = "char"><?php echo $c; ?></p>
    <h4>string</h4>
    <p id = "string"><?php echo $d; ?></p>
    <br><br>

    <h3>No. 2</h3>
    <h4>If</h4>
    <p><?php 
    $i = "yes";

    if ($i == "yes") {
        echo "Hello!";
    }?></p>

    <h4>If else</h4>
    <p>
        <?php

            $i = "no";
        
            if ($i == "yes") {
                echo "Hello!";
            } else {
                echo "Hi!";
            }

        ?>
    </p>

    <h4>If elseif else</h4>
    <p>
        <?php

            $i = "maybe";
        
            if ($i == "yes") {
                echo "Hello!";
            } elseif ($i == "no") {
                echo "Hi!";
            } else {
                echo "Bye!";
            }

        ?>
    </p>

    <h4>switch</h4>
    <p>
        <?php

            $i = "no";

            switch ($i) {
                case "yes":
                    echo "Hello!";
                    break;

                case "no":
                    echo "Hi!";
                    break;
                
                default:
                    echo "Bye!";
                    break;
            }

        ?>
    </p>
    <br><br>

    <h3>No. 3</h3>
    <h4>for</h4>
    <p>
        <?php
        
        for ($x = 0; $x < 5; $x++) {
            echo "Halo! <br>";
        }
        
        ?>
    </p>

    <h4>while</h4>
    <p>
        <?php
        $x = 0;

        while ($x < 5) {
            echo "Hello! <br>";
            $x++;
        }
        
        ?>
    </p>

    <h4>do while</h4>
    <p>
        <?php
        $x = 0;

        do {
            echo "Hai! <br>";
            $x++;
        } while ($x < 5); 
        
        ?>
    </p>

    <h4>foreach</h4>
    <p>
        <?php
        $arr = array("sushi", "oden", "shirataki");

        foreach ($arr as $value) {
            echo "$value <br>";
        }
        
        ?>
    </p>
    <br><br>

    <h3>No. 4</h3>
    <p>
        <?php
        
        $ar = ["makan"=>"ayam", "minum"=>"susu", "dessert"=>"cheesecake"];
        echo $ar ["makan"] . "<br>";
        echo $ar ["minum"] . "<br>";
        echo $ar ["dessert"] . "<br>";

        ?>
    </p>
</body>
</html>