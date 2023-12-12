<!DOCTYPE html>
<html lang="en">

    <?php
    include("library2.php");
    include("Styles2.php");
    ?>    

    <title>Sign Up</title>
    
    <main>

        <header>

            <h1 style='text-align: center'>
                🏁 Rusty's Autoparts Sign Up🏁
            </h1>

            <div class='ButtonLeft'>
                <form action="ProductPage.php" method="POST">
                    <button onclick="history.go(-1);" > Back </button>
                </form>
            </div> 

        </header>

        <div class='SignUp'>
            <form action='SignUp.php' method='POST'>

                <Label for='NameIn'>Name</label>
                <input type='text' name='NameIn' placeholder='Name' required>
                <br>    
                <Label for='AddressIn'>Address</label>
                <input type='text' name='AddressIn' placeholder='Address' required>
                <br>
                <Label for='CityIn'>City</label>
                <input type='text' name='CityIn' placeholder='City' required>
                <br>
                <Label for='StateIn'>State</label>
                <input type='text' name='StateIn' placeholder='IL' required>
                <br>
                <Label for='CountryIn'>Country</label>
                <input type='text' name='CountryIn' placeholder='US' required>
                <br>
                <Label for='PostalCodeIn'>Postal Code</label>
                <input type='text' name='PostalCodeIn' placeholder='Postal Code' required>
                <br>
                <Label for='EmailIn'>Email</label>
                <input type='text' name='EmailIn' placeholder='Example@gmail.com' required>
                <br>
                <Label for='PSWIn'>Password</label>
                <input type='text' name='PSWIn' placeholder='Password' required>
                <br>
                <button name='SignUpIn'>Sign Up</button>
            </form>    

            <?php
                if(!empty($_POST["NameIn"])) {
   
                    if(preg_match('~[0-9]+~', $_POST["NameIn"]) == 0 && strlen($_POST["NameIn"]) <= 100 && strlen($_POST["StateIn"]) <= 2
                    && strlen($_POST["CountryIn"]) <= 2 && strlen($_POST["PostalCodeIn"]) == 5){
                        $Name = $_POST["NameIn"];
                        $AddressIn = $_POST["AddressIn"];
                        $City = $_POST["CityIn"];
                        $State = $_POST["StateIn"];
                        $Country = $_POST["CountryIn"];
                        $PostalCode = $_POST["PostalCodeIn"];
                        $Email = $_POST["EmailIn"];
                        $PSW = $_POST["PSWIn"];

                        $sql = 'INSERT INTO CUSTOMERS (customerName,Address1,City,State,Country,PostalCode,customerEmail,PSW) 
                                Values (?,?,?,?,?,?,?,?)';
                        try {
                            $pdo = new PDO($dsn, $username, $password, $options); 
                            $statement = $pdo->prepare($sql);
                            $statement->execute([$Name,$AddressIn,$City,$State,$Country,$PostalCode,$Email,$PSW]);
                            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                            
                            echo '<script> alert("Your Account Was Created!") </script>';
                        } catch (PDOException $e) {
                            echo '<script> alert("Account Exists Already!") </script>';
                        }
                    }else{
                        echo '<script> alert("Information Error!") </script>';
                    }
                    
                }
                
            ?>
        </div>
    </main>
</html>