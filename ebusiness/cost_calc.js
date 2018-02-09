<!DOCTYPE html>
<html>
    <head>
         <title>Select Production</title>
         
         <!--jQuery-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript" src="cost_calc.js"></script>
         
    </head>
    
    <body>
           
            <h4>Select a Product</h4>
            
            <br/>
            
                <form method="POST" action="Ebus2.php">
                    
                    <label for="salesforce">
                        <input type="radio" id="salesforce" name="product" checked onCLcik="disablebtnProceed">
                        SalesForce @ $100
                    <button type="submit" id="btnPurchase" disabled>proceed with Purchase</button>
                    
                </form>
                
                <br/>
                <button onClick="validateDetails()">Validate</button>
                
            <script type="text/javascript" src="ebus_validator.js"></script>
    </body>
</html>