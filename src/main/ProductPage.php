<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Product Sales</title>
  <link rel="stylesheet" href="ProductPage.css">
</head>

<body>

  <header>
    <h1>
      <form action="Login.php" method='POST'>
        🏁 Rusty's Autoparts 🏁 
        <button>Login</button> 
      </form>  
      
      <form action="SignUp.php" method='POST'>
        <button>Sign Up</button> 
      </form>

    </h1>

  </header>

  <div id="product-container"></div>

  <?php
    include("library2.php");
    
    try 
      {
          // connect to database
          $pdo = new PDO($dsn, $username, $password, $options);
          $sql = "SELECT partPicture, partDescription, partPrice FROM PRODUCTS";
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
