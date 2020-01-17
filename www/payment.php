<?php include "head.php"?>
<?php include "header.php"?>
<h1 text-align="center">Check Out Page<h1>
    <h2> Billing Address</h2>

    <form class="form-signin"> 
    <input  class="btn btn-lg btn-primary btn-block" type="button" name="Use my saved details" value="Use my saved details"><br>
    <input type="Firstname" id="Firstname" class="form-control" placeholder="First Name" name="Firstname" required><br>
    <input type="Lastname" id="Lasrtname" class="form-control" placeholder="Last Name" name="Lastname" required><br>
   <input type="TelephoneNumber" id="TelephoneNumber" class="form-control" placeholder="Telephone Number" name="TelephoneNumber" required><br>
    <input type="Address" id="Address" class="form-control" placeholder="Address" name="Address" required><br>
    <input  class="btn btn-lg btn-primary btn-block" type="submit" name="Complete Order" value="Complete Order">
     <input  class="btn btn-lg btn-primary btn-block" type="button" name="Payment Paypal" value="Payment Paypal">

    </form>     
    
    
    <?php include "footer.php"?>
