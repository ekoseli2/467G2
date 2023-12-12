<!DOCTYPE html>
<html lang="en">

<?php
  session_start();
  include("library2.php");
  include("Styles2.php");
  
?>    

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Product Sales</title>
</head>

<body>

  <header>
    
    <h1 style='text-align: center'>
      🏁 Rusty's Autoparts 🏁
      <div class="topnav">
        
        <div class='login-container'>

          <form action='ProductPage.php' method="POST">
            <input type='text' placeholder="Email" name='txtEmail' required>
            <input type='text' placeholder='Password' name='psw' required>
            <button type='submit' name="Login">Login</button>
          </form> 
          
          <form action="ProductPage.php" method="POST">
            <button name='SignOut' >Sign Out</button>
          </form>

          <form action='SignUp.php' method="POST">
            <button type='submit' name="SignUp">Sign Up</button> 
          </form>

          <form action='payment.html' method='POST'>
            <button type='submit' name='CheckOut'>Check Out</button>
          </form>

          <form action='WarehouseInterface.php' method='POST'>
            <button type='submit' name='WareHouse'>Warehouse Interface</button>
          </form>

        </div>
      </div>

      <?php 
        
        
        if(isset($_POST['Login']) )
        {
          
          $email = $_POST['txtEmail'];
          $pswd =  $_POST['psw'];
          $sql = "SELECT customerEmail,PSW FROM CUSTOMERS WHERE customerEmail = ? AND PSW = ?";
          try 
          {
              // connect to database
              $pdo = new PDO($dsn, $username, $password, $options);
              $statement = $pdo->prepare($sql);
              $statement->execute([$email,$pswd]);
              $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
              

              if(!empty($rows)){
                
                
                $_SESSION['email'] = $email;
                echo '<script> alert("Successfully Logged In!") </script>';
                echo "Welcome "; echo $_SESSION['email'];
              }else{
                echo '<script> alert("Email or Password Incorrect. Try Again!") </script>';
                

              }
          }
          catch (PDOException $e) {
              die("<p>Query failed: {$e->getMessage()}</p>\n");
          }
          
        }

        if(isset($_POST['SignOut'])){
          session_destroy();
          echo '<script> alert("You were logged out!") </script>';
        }

        $sql = "SELECT partPicture, partDescription, 
          partPrice,partQuantity FROM PRODUCTS";

        
      ?>
      
    </h1>

      

  </header>
      
  <div class="DButton">
    
    <button onclick="DropDownSort()" class="dropbtn">Sort By</button>
    <div id='DropDownSort' class='dropdownS'>
      <form action='ProductPage.php' method='POST'>
        <?php 

          echo "<button name='wheel'>Wheels</button>";
          echo "<button name='BrakePads'>Brake Pads</button>";
          echo "<button name='TailLight'>Tail Lights</button>";
          echo "<button name='AirFilter'>Air Filters</button>";
          echo "<button name='Mirror'>Mirrors</button>";
          echo "<button name='OilsandFluids'>Oils & Fludis</button>";

          if(isset($_POST['wheel'])){
            $sql = "SELECT partPicture, partDescription, 
            partPrice, partQuantity FROM PRODUCTS WHERE partName = 'Wheel';"; 
          }

           if(isset($_POST['BrakePads'])){
            $sql = "SELECT partPicture, partDescription, 
            partPrice, partQuantity FROM PRODUCTS WHERE partName = 'BrakePads';";
          }

          if(isset($_POST['TailLight']) ){
            $sql = "SELECT partPicture, partDescription, 
            partPrice, partQuantity FROM PRODUCTS WHERE partName = 'TailLight';";
          }

           if(isset($_POST['AirFilter']) ){
            $sql = "SELECT partPicture, partDescription, 
            partPrice, partQuantity FROM PRODUCTS WHERE partName = 'AirFilter';";
          }

          if(isset($_POST['Mirror']) ){
            $sql = "SELECT partPicture, partDescription, 
            partPrice, partQuantity FROM PRODUCTS WHERE partName = 'Mirror';";
          }

          if(isset($_POST['OilsandFluids']) ){
            $sql = "SELECT partPicture, partDescription, 
            partPrice, partQuantity FROM PRODUCTS WHERE partName = 'OilsAndFluids';";
          }     

        ?>
      </form>
    </div>  
    
    <form action='ProductPage.php' method='POST'>
      <button class="dropbtn">Reset Table</button>
    </form>

  </div>
  

  <?php

    try 
      {
          // connect to database
          $pdo = new PDO($dsn, $username, $password, $options);
          $statement = $pdo->prepare($sql);
          $statement->execute();
          $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
          drawTable($rows);
          
      }
      catch (PDOException $e) {
          die("<p>Query failed: {$e->getMessage()}</p>\n");
      }

      

  ?>

  

</body>

</html>
