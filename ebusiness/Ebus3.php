<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>RECEIPT</title>
        
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
    
    <a href="../homepage.html" class="btn btn-green">Home</a>
    
        
    </body>
</html>