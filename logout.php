<?php
session_start();
if (isset($_SESSION['id'])){
    session_unset();
    session_destroy();
    header("Location: index.php");
}

else {
    echo "<script>
        alert ('Please login first')    
        location.replace('login.php');
        </script>";
    }
?>