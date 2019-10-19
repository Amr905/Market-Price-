<?php
  session_start();
?>
<?php

require_once('mysqli_connect.php');

$query = "SELECT * FROM user WHERE Email ='".$_POST['email']."' AND Password = '".$_POST['pass']."';";
$res=@mysqli_query($dbc,$query);
if($res->num_rows >0){
   $row = mysqli_fetch_array($res);
   $_SESSION["email"] = $row["Email"];
   $_SESSION["userID"]=$row["ID"];
   header("location:index.php");
}
else{
    echo '<script>alert("Invalid");</script>';
   header("location:Login.html");
}
$dbc->close();
?>


