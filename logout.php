<?php
session_start();
?>
<?php
//unset ($_SESSION["email"]);
session_unset();
header("location:index.php");
?>
