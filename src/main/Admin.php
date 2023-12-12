<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrative Interface</title>
    </head>

    <?php
    include("library2.php");
    include("Styles2.php");
    ?>   

    <body>

        <header>

            <h1 style='text-align: center'>
                🏁 Rusty's Autoparts Admin Portal🏁
            </h1>

            <div class='ButtonLeft'>
                <button onClick="window.print()">Print</button>

            </div>

            
        </header>


        <h1 style='text-align: center'>Orders ready for shipping</h1>
        <div class="DButton">
    
        <button onclick="Filter()" class="filterbtn">Filter</button>
        <div id='Filter' class='dropdownF'>
            <form action='Admin.php' method='POST'>
                <?php
                    $startDate = '1984-01-01';
                    $endDate = '2099-01-01';
                    $minPrice = 0;
                    $maxPrice = PHP_INT_MAX;
                    $orderStatus = 'Complete';
                    $sql = "SELECT * FROM ORDERS WHERE orderStatus = 'Complete' AND orderStatus = 'Shipped';";
                    echo "<button name='ByDate'>By Date</button>";
                    echo "<button name='PriceRange'>Price Range</button>";
                    echo "<button name='Status'>Status</button>";

                    if(isset($_POST['ByDate'])){
                        $sql = "SELECT * FROM ORDERS WHERE orderStatus BETWEEN $startDate AND $endDate;"; 
                    }
            
                    if(isset($_POST['PriceRange'])){
                        $sql = "SELECT * FROM ORDERS WHERE totalPrice BETWEEN $minPrice AND $maxPrice;";
                    }
        
                    if(isset($_POST['Status']) ){
                        $sql = "SELECT * FROM ORDERS WHERE orderStatus = $orderStatus;";
                    }    


                    
                ?>
                </form>
            </div>

            <form action='Admin.php' method='POST'>
                <button class="filterbtn">Reset</button>
            </form>

        </div>

        <?php
            /*
            $sql= "SELECT productID FROM PRODUCTS"; 
            $pdo = new PDO($dsn, $username, $password, $options);
            
            foreach ($pdo->query($sql) as $row){

                $cEmail = $row['customerEmail'];
                $cPID = $row['productID'];
               
            }
            */
            
            if(isset($_POST['AddToCart'])){
                //echo "<button name='PhoneNumPicked' value='$PhoneNum$IDNum'> $row[PhoneNum]</button>";
                echo '<script> alert("ads") </script>';

            }


            try {
                 // connect to database
                 $pdo = new PDO($dsn, $username, $password, $options);
                 $statement = $pdo->prepare($sql);
                 $statement->execute();
                 $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                 drawTable2($rows);
            }
             catch (PDOException $e) {
                 die("<p>Query failed: {$e->getMessage()}</p>\n");
            }
        
        ?>                

    </body>

</html>
