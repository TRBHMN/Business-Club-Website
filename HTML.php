<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
  <script src="jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="HTML.css">   
</head> 
<body class="bg-secondary p-2 text-white">
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->

    
<h1 class="mx-auto" style="width: 600px; font-size: 50px;"  title="Title"><kbd>Corner Of Consumption Inventory Purchase Application</kbd></h1>

<!-- 
<div id="upperPart">
    <img id="foxPicture" th:src="file:///Users/23behmen_t/Library/Mobile%20Documents/com~apple~CloudDocs/Documents/Programming/HTML/GANGSTER.jpg" height="400" width="400"/>
</div> --> 
<div class="row justify-content-center">
  <div
    class="col-6 bg-image card shadow-1-strong"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');"
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
    <div id = "drink" class="bg-dark col-3 ml-5 mr-5" style="border-style: solid; border-width: thick; border-color: cyan;">
      <h2 style = "font-size: 50px; font-family: Noto Sans;"> Drinks </h2> </br>
      <select name="drinks" id="drinks">
        <option selected>Open this select menu</option>
        <option value="Hortex Orange Juice 300ml">Hortex Orange Juice 300ml</option>
        <option value="Still Water 500ml">Still Water 500ml</option>
        <option value="Oshee Vitamin Zero Magnesium 250ml">Oshee Vitamin Zero Magnesium 250ml</option>
      </select> </br>
      <h5> Quantity of drinks: <input type="int" name = "drinkq" size="7" value="0"> </h5> </br>
      <!-- <button name="add" id="add" class = "btn btn-success add_item_btn"> Add Item +<button>   -->
    </div>

    <div class="bg-dark col-3 ml-5 mr-5" style="border-style: solid; border-width: thick; border-color: red">
      <h2 style = "font-size: 50px; font-family: Noto Sans;"> Snacks </h2> </br>
      <select name="snacks" id="snacks">
        <option selected>Open this select menu</option>
        <option value="Felix Salted Peanuts 70g">Felix Salted Peanuts 70g</option>
        <option value="GO ON Protein Vanilla">GO ON Protein Vanilla</option>
        <option value="GO ON Protein Peanut/Chocolate">GO ON Protein Peanut/Chocolate</option>
        <option value="GO ON Protein Coconut">GO ON Protein Coconut</option>
        <option value="GO ON Protein Cocoa">GO ON Protein Cocoa</option>
        <option value="Halls Cough Drops Strong">Halls Cough Drops Strong</option>
        <option value="Halls Cough Drops Lime">Halls Cough Drops Lime</option>
        <option value="Tic Tac x100 Orange">Tic Tac x100 Orange</option>
        <option value="Tic Tac x100 Mint">Tic Tac x100 Mint</option>
        <option value="Lajkonik Crackers">Lajkonik Crackers</option>
        <option value="Lajkonik Junior Safari Crackers">Lajkonik Junior Safari Crackers</option>
        <option value="Mentos Clean Breath Mints">Mentos Clean Breath Mints</option>
        <option value="Lajkonik Pretzel Crackers">Lajkonik Pretzel Crackers</option>
        <option value="Ricola Cough Drops Black">Ricola Cough Drops Black</option>
        <option value="Ricola Cough Drops Original Green">Ricola Cough Drops Original Green</option>
        <option value="Ricola Cough Drops Cranberry">Ricola Cough Drops Cranberry</option>
        <option value="Belvita Cookie">Belvita Cookie</option>
      </select> </br>
      <h5> Quantity of snacks: <input type="int" name = "snackq" size="7" value="0"> </h5> </br>
    </div>

    <div class="bg-dark col-3 ml-5 mr-5" style="border-style: solid; border-width: thick; border-color: black">
      <h2 style = "font-size: 50px; font-family: Noto Sans;"> Utilities </h2> </br>
      <select name="utilities" id="utilities">
        <option selected>Open this select menu</option>
        <option value="Notebook 1">Notebook 1</option>
        <option value="Notebook 2">Notebook 2</option>
        <option value="Notebook 3">Notebook 3</option>
        <option value="Notebook 4">Notebook 4</option>
        <option value="Notebook 5">Notebook 5</option>
        <option value="Notebook 6">Notebook 6</option>
        <option value="Bike Chain Toy">Bike Chain Toy</option>
        <option value="Sigma adhesive strips">Sigma adhesive strips</option>
        <option value="Sigma Index Stripes ">Sigma Index Stripes </option>
        <option value="Sigma Z-Notes 75mmx75mm">Sigma Z-Notes 75mmx75mm</option>
        <option value="Blue Ink Pen">Blue Ink Pen</option>
      </select> </br>
      <h5> Quantity of utilities: <input type="int" name = "utilitiesq" size="7" value="0"> </h5> </br>
    </div>
</div>
<br>
<div class="row justify-content-center">
    <input type="submit" value="Submit" class = "btn btn-primary w-25" id="submit_btn" >
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