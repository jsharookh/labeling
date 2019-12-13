<?php include 'database.php'; ?>
<?php


$f_name =  $_POST['f_name'];
$l_name = $_POST['l_name'];
$gender = $_POST['gender'];
$gender1 = $_POST['gender1'];
$phone = $_POST['phone'];
$c_name = $_POST['c_name'];
$f_name =md5($f_name);



$sql = "INSERT INTO a (e_name, a_name, e_price, a_price, e_country, a_country)
VALUES ('$f_name', '$l_name', '$gender', '$gender1', '$phone', '$c_name');";

   if (mysqli_query($connect, $sql)) {
       header("Location:productlist.php");
} else {
    echo "Error inserting record  :".$l_name;
       echo("Error description: " . mysqli_error($connect));
};


?>