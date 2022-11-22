<?php
  include_once "pdo.php";

  if (isset($_POST['sbmit'])){
    $a = $_POST['drinks'];
    $b = $_POST['snacks'];
    $c = $_POST['utilities'];
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="act.css">
 
</head> 
<body class="bg-secondary p-2 text-white">
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->

      
<h1 class="mx-auto" title="Title"><kbd>Corner Of Consumption Inventory Purchase Application</kbd></h1>

<!--  
<div id="upperPart">
    <img id="foxPicture" th:src="file:///Users/23behmen_t/Library/Mobile%20Documents/com~apple~CloudDocs/Documents/Programming/HTML/GANGSTER.jpg" height="400" width="400"/>
</div> --> 
<div class="row justify-content-center">
  <div
    class="col-6 bg-image card shadow-1-strong"
  >
    <div class="card-body text-white">
      <h5 class="card-title">Reminder</h5>
      <p class="card-text">
        Make sure to double check the options that each of the customers buy. Make sure to select the correct items.
      </p>
    </div>
  </div>
<form method="POST" action="confirm_purchase.php"> <!--action="confirm_purchase.php"-->
    <br>
    <div class="col-12 ">
      <h5> Block: <input type="int" name = "block" value="0"> </h5> </br>
    </div>  
</div>
    <hr class="border border-light border-3">

<div class="row justify-content-center"> <!--justify content center is fucking sick -->
    <div id = "drink" class="bg-dark col-3 ml-5 mr-5">
      <h2> Drinks </h2> </br>
      <select name="drinks" id="drinks">
        <option selected>Open this select menu</option>
        <?php
            $stmt = $pdo->query("SELECT name FROM items WHERE type='drinks'");
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                  echo("<option>".$row['name']."</option>");
                }
        ?>
      </select> </br>
      <h5> Quantity of drinks: <input type="int" name = "drinkq" size="7" value="0"> </h5> </br>
      <!-- <button name="add" id="add" class = "btn btn-success add_item_btn"> Add Item +<button>   -->
    </div>

    <div class="bg-dark col-3 ml-5 mr-5" >
      <h2> Snacks </h2> </br>
      <select name="snacks" id="snacks">
        <option selected>Open this select menu</option>
        <?php
            $stmt = $pdo->query("SELECT name FROM items WHERE type='snacks'");
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                  echo("<option>".$row['name']."</option>");
                }
        ?>
      </select> </br>
      <h5> Quantity of snacks: <input type="int" name = "snackq" size="7" value="0"> </h5> </br>
    </div>

    <div class="bg-dark col-3 ml-5 mr-5" >
      <h2 > Utilities </h2> </br>
      <select name="utilities" id="utilities">
        <option selected>Open this select menu</option>
        <?php
            $stmt = $pdo->query("SELECT name FROM items WHERE type='utilities'");
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                  echo("<option>".$row['name']."</option>");
                }
        ?>
      </select> </br>
      <h5> Quantity of utilities: <input type="int" name = "utilitiesq" size="7" value="0"> </h5> </br>
    </div>
</div>
<br>
<div class="row justify-content-center">
    <input type="submit" value="Submit" name="sbmit" class = "btn btn-primary w-25" id="submit_btn" >
</div>

</form>
<script>
// $(document).ready(function(e)){
//   var i = 1;
//   $('.add_item_btn').click(function()){
//     e.preventDefault()
//     $('.drink').prepend(
//       "<select name="drinks" id="drinks"> <option selected>Open this select menu</option> <option value="Hortex Orange Juice 300ml">Hortex Orange Juice 300ml</option><option value="Still Water 500ml">Still Water 500ml</option> <option value="Oshee Vitamin Zero Magnesium 250ml">Oshee Vitamin Zero Magnesium 250ml</option></select> </br>"
//     );
//   }
// };
// </script>
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