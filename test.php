<?php
$con = mysql_connect("localhost","root","123456");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("ecmos", $con);

$result = mysql_query("SELECT * FROM ecmos_store");

while($row = mysql_fetch_array($result))
{
    echo $row['store_id'] . " " . $row['store_name'];
    echo "<br />";
}

mysql_close($con);