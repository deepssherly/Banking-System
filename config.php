<?php 
$conn = mysqli_connect('localhost','deeps','deepthi','dbms','3307');
if(!$conn)
{
    echo "connection error".mysqli_connect_error();
}
?>