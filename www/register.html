<?php
require("head.php");
if(isset($_POST['register'])){

  //Retrieve the field values from our registration form.
  $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
  $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;

  //TO ADD: Error checking (username characters, password length, etc).
  //Basically, you will need to add your own error checking BEFORE
  //the prepared statement is built and executed.

  //Now, we need to check if the supplied username already exists.

  //Construct the SQL statement and prepare it.
  $sql = "SELECT COUNT(username) AS num FROM user WHERE username = :username";
  $stmt = $pdo->prepare($sql);

  //Bind the provided username to our prepared statement.
  $stmt->bindValue(':username', $username);

  //Execute.
  $stmt->execute();

  //Fetch the row.
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  //If the provided username already exists - display error.
  //TO ADD - Your own method of handling this error. For example purposes,
  //I'm just going to kill the script completely, as error handling is outside
  //the scope of this tutorial.
  if($row['num'] > 0){
      die('That username already exists!');
  }

  //Hash the password as we do NOT want to store our passwords in plain text.
  $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));

  //Prepare our INSERT statement.
  //Remember: We are inserting a new row into our users table.
  $sql = "INSERT INTO user (username, password) VALUES (:username, :password)";
  $stmt = $pdo->prepare($sql);

  //Bind our variables.
  $stmt->bindValue(':username', $username);
  $stmt->bindValue(':password', $passwordHash);

  //Execute the statement and insert the new account.
  $result = $stmt->execute();

  //If the signup process is successful.
  if($result){
      //What you do here is up to you!
      echo 'Thank you for registering with us.';
  }

}

?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Register</title>
  </head>
  <body>

<?php include "header.php"?>
  <form class="form-signin" action="register.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Register</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="username" id="username" class="form-control" placeholder="Username"  name="username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
      <input type="Firstname" id="Firstname" class="form-control" placeholder="First Name" name="Firstname" required>
      <input type="Lastname" id="Lastname" class="form-control" placeholder="Last Name" name="Lastname" required>
    <input type="Email" id="Email" class="form-control" placeholder="Email" name="Email" required>
      <input type="PhoneNumber" id="PhoneNumber" class="form-control" placeholder="Phone Number" name="Phonenumber" required>
      <input type="Address" id="Address" class="form-control" placeholder="Address" name="Address" required>
      
      
      
      
            <div class="checkbox mb-3">
          <label>
              <input type="checkbox" value="remember-me"> Remember me
          </label>
      </div>
      <input  class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Register">
  </form>
  </body>
</html>
