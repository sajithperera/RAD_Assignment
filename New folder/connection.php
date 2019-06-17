<?php
$connection = new mysqli('localhost', 'root','', 'animal_clinic');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
// }
// $select_db = mysqli_select_db($connection, 'animal_clinic');
// if (!$select_db){
//     die("Database Selection Failed" . mysqli_error($connection));
// }
}