<?php
  session_start();

  include_once "pdo.php";
  $mydate=getdate(date("U"));
  $date = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
  echo $date;
  
?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

<body>
 


    <p> Make sure these are your items... </p>

    <?php
        include('database_inc.php');

        if ($_POST['drinks'] == "Open this select menu") {
            $_POST['drinks'] = "Not selected";
        } 
        if ($_POST['snacks'] == "Open this select menu") {
            $_POST['snacks'] = "Not selected";
        }
        if ($_POST['utilities'] == "Open this select menu") {
            $_POST['utilities'] = "Not selected";
        }
        
        echo $_POST['drinks']," ", $_POST['drinkq'],"<br>", $_POST['snacks']," ", $_POST['snackq'],"<br>",$_POST['utilities']," ", $_POST['utilitiesq'];
        
        $_SESSION['d'] = $_POST['drinks'];
        $_SESSION['s'] = $_POST['snacks'];
        $_SESSION['u'] = $_POST['utilities'];
        $_SESSION['dq'] = $_POST['drinkq'];
        $_SESSION['sq'] = $_POST['snackq'];
        $_SESSION['uq'] = $_POST['utilitiesq'];
    ?>

    <form method = "post" action = "purchase_app.php">
        <p> 
        <input type = "submit" name = "confirmation" value ="yes"> 
        <input type = "submit" name = "confirmation" value ="no">   
        </p>
    </form>

    

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