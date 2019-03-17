<html>
<body>
<?php
  require_once('navbar.php');
?>
<div class="container">
  <div class="row">
    <form>
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="emailid">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
      </div>
      
      <div class="form-group">
          <label for="Password">Confirm Password</label>
          <input type="password" class="form-control" id="Password1" placeholder="Confirm Password" name="confirm_password">
      </div>

      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" required>
          agree privacy terms
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<div class="footer bg-primary">
  <div class= "footer-icons">
      <h5 class="footer-heading">Follow us on</h5>
      <a href="#" id="facebook" class="fa fa-facebook col-sm-2"></a>
      <a href="#" id="twitter" class="fa fa-twitter col-sm-2"></a>
      <a href="#" id="google" class="fa fa-google col-sm-2"></a>
      <a href="#" id="youtube" class="fa fa-youtube col-sm-2"></a>
      <a href="#" id="facebook" class="fa fa-instagram col-sm-2"></a>
  </div>
</div>
</body>
</html>