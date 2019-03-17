<?php 
    print_r($_POST);
    $submit = $_POST['submit'];
    $file = $_FILES['file']['name'];
    if(isset($submit)){
        echo 'filename is '.$file;
    }
?>