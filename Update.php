<?php
$conn=new mysqli('localhost','root','','store');

$ret="UPDATE admin SET first='mozzam' where id='1'";

if($conn->query($ret))
{
    echo "Record update successfully";

}
else
{
    echo "record failed to update";
}
$conn->close();
?>