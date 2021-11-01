<?php require_once('connection.php'); ?>

<?php

$con = mysqli_connect('localhost', 'root', '', 'contestants_db');
$code = mysqli_real_escape_string($con, $_POST['code']);
$votes = mysqli_real_escape_string($con, $_POST['votes']);

$query="SELECT * FROM `contestants` WHERE contestant_code='$code'";

$checkUser=mysqli_query($con,$query);

$row=mysqli_num_rows($checkUser);

if ($row>0) {

    $insert = "INSERT INTO votes(contestant_code,contestant_votes) VALUES('$code','$votes')";

    mysqli_query($con, $insert);

    echo "Added Successfully";
}
else{
    echo "contestant does not exist";
}

?>

<html>
 <a href="form.php">Click here to go back and vote</a>
</html>
