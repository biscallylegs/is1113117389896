<?php
// Start the Session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
         <title>Enter Details</title>
         
         <!--jQuery-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
            <h4>Please enter your payment details</h4>
            
                <form action="Ebus3.php" method="POST">
                    
                        <label for="user_name">Name</label>
                        
                        <input type="text" id="user_name" placeholder="Your Name Here">
                        
                        <label for="email_address">Email</label>
                        
                        <input type="text" id="email_address" placeholder="Email Address">
                        
                        <label for="user_pin">PIN</label>
                        
                        <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                        
                    <button type="submit" id="btnPurchase" disabled>proceed with Purchase</button>
                    
                </form>
                
                <br/>
                <button onClick="validateDetails()">Validate</button>
                
                <?php
                // Set session variables
                $_SESSION["total"] = $_POST["total"];
                ?>
                
            <script type="text/javascript" src="ebus_validator.js"></script>
    </body>
</html>