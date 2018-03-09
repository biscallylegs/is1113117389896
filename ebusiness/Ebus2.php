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
        
         <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #565656;
        
    }
    
    li {
        float: left;-
    }
    
    li a, .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    li a:hover, .dropdown:hover .dropbtn {
        background-color: red;
    }
    
    li.dropdown {
        display: inline-block;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        
    }
    
    .dropdown-content a:hover {background-color: #f1f1f1}
    
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
           
           
    </head>
    <body>
        
             <ul>
          <li><a href="homepage.html">Home</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Curriculum Vitae</a>
            <div class="dropdown-content">
              <a href="cv/cv_page1.html">Personal Information</a>
              <a href="cv/cv_page2.html">Education</a>
              <a href="cv/cv_page3.html">Work Experience</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Interests</a>
            <div class="dropdown-content">
              <a href="interests/sports.html">Sports</a>
              <a href="interests/travel.html">Travel</a>
            </div>
          </li>
          <li><a href="ebusiness/Ebus1.php">E-Business</a></li>
          <li><a href="aboutcloud.html">About Cloud</a></li>
            </div>
        </ul>
        
        
            <h2>Please enter your payment details</h2>
            
                <form action="Ebus3.php" method="POST">
                    
                        <label for="user_name">Name:</label>
                        
                        <input type="text" id="user_name" name="user_name" placeholder="Your Name Here">
                        
                        <br/>
                        <br/>
                        
                        <label for="email_address">Email:</label>
                        
                        <input type="text" id="email_address" name="email_address" placeholder="Email Address">
                        
                        <br/>
                        <br/>
                        
                        <label for="user_pin">PIN:</label>
                        
                        <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                        
                        <br/>
                        <br/>
                        
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