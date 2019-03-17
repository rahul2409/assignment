<?php
  require_once('navbar.php');
?>
<html>
  <body>
  <div class="container">
    <div class="row">
      <form>
        <br>
        
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" name="username">
        </div>
        
        <div class="form-group">
          <label for="Password">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>

        <input type="submit" class='btn btn-primary' name ='submit' value='Submit'>
      </form>
    </div>
  </div>
  </body>
</html>