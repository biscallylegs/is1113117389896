<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
          <a href="../cv/cv_page1.html">Personal Information</a>
          <a href="../cv/cv_page2.html">Education</a>
          <a href="../cv/cv_page3.html">Work Experience</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Interests</a>
        <div class="dropdown-content">
          <a href="../interests/sports.html">Sports</a>
          <a href="../interests/travel.html">Travel</a>
        </div>
      </li>
      <li><a href="../ebusiness/Ebus1.php">E-Business</a></li>
      <li><a href="../aboutcloud.html">About Cloud</a></li>
        </div>
    </ul>
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            <label for=subtotal>
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        <br/>
        <button onClick="calcSub()">Calculate Costs</button>
       <!-- Refreshes page-->
        <a role="button" href="Ebus1.php">Clear Choice</a>
    </body>
</html>