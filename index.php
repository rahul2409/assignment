<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  <?php
    require_once('navbar.php');
  ?>
  <div class="container">
    <div class="row" >
      <h3 class="content">
        about us 
      </h3>
    </div>
  <div class="row">
        <p>
        we have build a portal in order to help you run and upload all your python files and see the desired output !!!
        hope this portal helps you</p>
        <form action="file.php" method="POST" enctype="multipart/form-data">
            <label for="file-upload">Upload python files here</label>
            <input type="file" class="form-control" id="file-upload" name='file'>
            <input type="submit" class='btn btn-success' value='Submit' name ='submit'>
        </form>
  </div>
  <div class="row" id ='output'></div>        
  </div>
  
</body>
</html>