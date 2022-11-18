<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
<body class="bg-secondary p-2 text-white">
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">COC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="https://learningcomputerscience.com/9_8_BT/purchase-app.php">Purchase Application <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <div style="margin-top: 60px;" class = "row justify-content-center">
        <h1> Purchase order completed </h1>
    </div>

    
 
    <div class = "row justify-content-center">
        <a style = "color: white;" href="https://learningcomputerscience.com/9_8_BT/purchase-app.php"> Click here to complete another one </a>
    </div>


    <div>
        <a class = "m-10" style = "font-size: 30px"> Make sure these are your items... <a>
    </div>   

    <?php
include('database_inc.php');



$drink = $_POST['drinks'];
$snack = $_POST['snacks'];
$utilities = $_POST['utilities'];
$sq = $_POST['snackq'];
$dq = $_POST['drinkq'];
$uq = $_POST['utilitiesq'];
 


$result = mysqli_query($connect,
    "INSERT INTO `test11` 
    (`b`,`snacks`, `snack_q`, `drinks`, `drinks_q`, `utilities`, `utilities_q`) 
    VALUES ('$block','$snack', '$sq','$drink', '$dq','$utilities', '$uq');");
 
$query_get_items = mysqli_query($connect, "SELECT * FROM test11 ORDER BY timestamp DESC");

$row = mysqli_fetch_array($query_get_items);

echo "<p>" . $row['ID'] . ": " . $row['snacks'] . " x " . $row['snack_q'] . "</p>";



// echo "<pre>";
// print_r(get_defined_vars());
// echo "</pre>";

// header('location:HTML.php');
?>

    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING BELOW THIS LINE -->
    <!-- =========================================== -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  </body>
</html>
