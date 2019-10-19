<?php
define('DB_user', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');
define('DB_Name', '');

$dbc = @mysqli_connect(DB_HOST,DB_user,DB_PASSWORD,DB_Name);
mysqli_set_charset($dbc, "utf8");


/*$query ="SELECT * FROM `order`";

$res =@mysqli_query($dbc,$query);
if($res){
echo '<table align="left"
cellspacing="5" cellpadding="8">
<tr><td align="left"><b>id</b></td>
<td align="left"><b>user_id</b></td>
<td align="left"><b>product_id</b></td>
<td align="left"><b>price</b></td></tr>';
while($row = mysqli_fetch_array($res))
{
    echo '<tr><td align="left">'.
    $row['id'].'</td><td align="left">'.
    $row['user_id'].'</td><td align="left">'.
    $row['product_id'].'</td><td align="left">'.
    $row['price'].'</td>';

    echo '</tr>';
}
echo '</table>';
}
else {
    echo "Couldnt open";
    echo mysqli_error($dbc);
}*/
?>
