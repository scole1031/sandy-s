<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Contact US</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("includes/header.html");?> 
<h1 id="chead">Contact Us</h1>
<hr>
<div class="box" id="alert">    
    <form   method="post" id="conForm" action="contactphp.php" onsubmit="return validateForm();">
        <div class="row">
            <div class="field1">   
                <label for="FirstName">First Name:</label>
            </div>
            <div class="field2">
                <input type="text" name="FirstName" id="FirstName" title="First Name" placeholder="required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="LastName">Last Name:</label>
            </div>
            <div class="field2">
                <input type="text" name="LastName" id="LastName" title="Last Name" placeholder="required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="Email">Email:</label>
            </div>
            <div class="field2">   
                <input name="Email" id="Email" type="text"  title="Email" placeholder="required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="Message">Message:</label> 
            </div>
            <div class="field2">         
                <textarea rows="10" cols="50" name="Message"  id="Message" placeholder="required"></textarea>
            </div>
        </div>
        <div class="row">
            <input type="submit" id="submit" name="submit" value="Send"><span class="output_message"></span>
        </div>
        <div id="loader"></div>
    </form>
</div>     
<?php include("includes/footer.html");?>
<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script> 
 

</body>

</html>


