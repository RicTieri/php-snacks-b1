<form action="./index.php" method="GET">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" placeholder="Insert name">
  <br>
  <label for="email">Email</label>
  <input type="email" name="email" id="email" placeholder="Insert email">
  <br>
  <label for="age">Age</label>
  <input type="number" name="age" id="age" placeholder="Insert age">
  <br>
  <button type="submit">Login</button>
</form>


<?php 
  $name = $_GET['name'];
  $email = $_GET['email'];
  $age = $_GET['age'];

  if(empty($name) && empty($email) && empty($age)){
    echo 'access denied';
  } else{
    if(strlen($name) > 3 && str_contains($email, '@' ) && str_contains($email, '.') && is_numeric($age)){
      echo 'access granted';
    } else{
      echo 'access denied';
    }
  }

?>