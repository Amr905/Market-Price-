<?php
  session_start();
?>
<?php

require_once('mysqli_connect.php');
if(!isset($_SESSION["userID"])){
     echo '<script>history.go(-1);</script>';
    exit ;
}
$Check_query="SELECT * FROM orders WHERE user_ID =".$_SESSION["userID"].";";
$Check_res=@mysqli_query($dbc,$Check_query);

//if($Check_res->num_rows<=0)
//{
    $query ="INSERT INTO `orders`(`user_ID`, `Status`,`Product_id`,`Supplier_id`)
    VALUES (".$_SESSION["userID"].", 'Active',".$_POST['P_ID'].",".$_POST['S_ID'].")";
    $res=@mysqli_query($dbc,$query);
    echo '<script>history.go(-1);</script>';
   /* $Check_query="SELECT * FROM orders WHERE user_ID =".$_SESSION["userID"].";";
    $Check_res=@mysqli_query($dbc,$Check_query);

}
$row =mysqli_fetch_array($Check_res);
//echo 'kimo='.$row['order_ID']."u_id ".$_SESSION["userID"]."s_id ".$_POST['S_ID'];
$query = "INSERT INTO `order_products`(`order_ID`,`P_ID`, `Sup_ID`) VALUES (".$row['order_ID'].",".$_POST['P_ID'].",".$_POST['S_ID'].");";
 $res=@mysqli_query($dbc,$query);
echo '<script>alert("Item successfully added");history.go(-1);</script>';
/*foreach($_POST as $stuff){
    echo $stuff;
}*/
?>
