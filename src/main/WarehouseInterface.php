<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WareHouse Interface</title>
    </head>

    <?php
    include("library2.php");
    include("Styles2.php");
    ?>   

    <body>

        <header>

            <h1 style='text-align: center'>
                🏁 Rusty's Autoparts Warehouse🏁
            </h1>

            <div class='ButtonLeft'>
                <form action="ProductPage.php" method="POST">
                    <button onclick="history.go(-1);" > Home </button>
                </form>

                <button onClick="window.print()">Print</button>

            </div>

            
        </header>


        <h1 style='text-align: center'>Orders</h1>
        <div class="DButton">
    
        <button onclick="DropDownSort()" class="dropbtn">Sort By</button>
        <div id='DropDownSort' class='dropdownS'>
            <form action='WarehouseInterface.php' method='POST'>
                <?php
                    $sql = "SELECT * FROM ORDERS";
                    echo "<button name='Pending'>Pending</button>";
                    echo "<button name='Complete'>Complete</button>";
                    echo "<button name='Shipped'>Shipped</button>";

                    if(isset($_POST['Pending'])){
                        $sql = "SELECT * FROM ORDERS WHERE orderStatus = 'Pending';"; 
                    }
            
                    if(isset($_POST['Complete'])){
                        $sql = "SELECT * FROM ORDERS WHERE orderStatus = 'Complete';";
                    }
        
                    if(isset($_POST['Shipped']) ){
                        $sql = "SELECT * FROM ORDERS WHERE orderStatus = 'Shipped';";
                    }    


                    
                ?>
                </form>
            </div>

            <form action='WarehouseInterface.php' method='POST'>
                <button class="dropbtn">Reset</button>
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