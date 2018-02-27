<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
     <br/>
     <br/>
        
        <?php
        // Echo Name variable that were set on previous page
        echo "Name: " . $_POST["user_name"] . ".";
        ?>
        
    <br/>
    <br/>
        
        <?php
        // Echo email variable that were set on previous page
        echo "Email: " . $_POST["email_address"] . ".";
        ?>
        
    <br/>
    <br/>
        
        <?php
        // Echo total variable that were set on previous page
        echo "Total is &euro;" . $_SESSION["total"] . ".";
        ?>
    
    <br/>
    <br/>
    
    <a href="homepage.html" class="btn btn-green">Next</a>
    
        
    </body>
</html>