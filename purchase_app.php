<?php
  session_start();
  include_once "pdo.php";
  $mydate=getdate(date("U"));
  $date = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
  $time = "$mydate[hours] : $mydate[minutes] ";
  echo $date; 


  $flaga = false;
  $flagb = false;
  $flagc = false;
        
  if(isset($_POST['confirmation'])){
    if($_POST['confirmation'] == "yes") {

      $stmt = $pdo->query("SELECT name, price_sold FROM items");

      while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
      
      
      if ($row['name'] == $_SESSION['d']){
      $flaga = true;
      $pfone = $_SESSION['dq'] * $row['price_sold'];
      $reciptone = $time." ".$_SESSION['d']." ".$_SESSION['dq']." bought"; 
      }
      

      if ($row['name'] == $_SESSION['s']){
        $flagb = true;
        $pftwo = $_SESSION['sq'] * $row['price_sold'];
        $recipttwo = $time." ".$_SESSION['s']." ".$_SESSION['sq']." bought"; 
        
      }

      if ($row['name'] == $_SESSION['u']){ 
        $flagc = true;
        $pfthree = $_SESSION['uq'] * $row['price_sold'];
        $reciptthree = $time." ".$_SESSION['u']." ".$_SESSION['uq']." bought"; 
        
      } 

      }
    }
      
  }


if ($flaga == true){
  $sql = "INSERT INTO recipt (date, details, profit) VALUES (:date, :details, :profit)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':date'=>$date, ':details'=>$reciptone, ':profit'=>$pfone));
}
if ($flagb == true){
  $sql = "INSERT INTO recipt (date, details, profit) VALUES (:date, :details, :profit)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':date'=>$date, ':details'=>$recipttwo, ':profit'=>$pftwo));
}
if ($flagc == true){
  $sql = "INSERT INTO recipt (date, details, profit) VALUES (:date, :details, :profit)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':date'=>$date, ':details'=>$reciptthree, ':profit'=>$pfthree));
}


$stmt = $pdo->query("SELECT date, profit FROM recipt");
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    if($row['date'] == $date){
      $profit = $profit + $row['profit'];
    }
}

echo "<p>"."PROFIT = ".$profit."</p>";
?>








<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head> 


<body>


      
<p>Corner Of Consumption Inventory Purchase Application</p>


      <p>Reminder</p>
      <p>
        Make sure to double check the options that each of the customers buy. Make sure to select the correct items.
      </p>

    
<form method="POST" action="confirm_purchase.php"> 
   
    <div id = "drink">
      <p> Drinks </p> 
      <select name="drinks" id="drinks">
        <option selected>Open this select menu</option>
        <?php
            $stmt = $pdo->query("SELECT name FROM items WHERE type='drinks'");
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                  echo("<option>".$row['name']."</option>");
                }
        ?>
      </select> 
      <p> Quantity of drinks: <input type="int" name = "drinkq" size="7" value="0"> </p> 

      <p> Snacks </p> 
      <select name="snacks" id="snacks">
        <option selected>Open this select menu</option>
        <?php
            $stmt = $pdo->query("SELECT name FROM items WHERE type='snacks'");
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                  echo("<option>".$row['name']."</option>");
                }
        ?>
      </select> 
      <p> Quantity of snacks: <input type="int" name = "snackq" size="7" value="0"> </p> 

    
      <p> Utilities </p> 
      <select name="utilities" id="utilities">
        <option selected>Open this select menu</option>
        <?php
            $stmt = $pdo->query("SELECT name FROM items WHERE type='utilities'");
            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                  echo("<option>".$row['name']."</option>");
                }
        ?>
      </select> 
      <p> Quantity of utilities: <input type="int" name = "utilitiesq" size="7" value="0"> </p> 
    

<input type="submit" value="Submit" name="sbmit" class = "btn btn-primary w-25" id="submit_btn" >

</form>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  </body>
</html>