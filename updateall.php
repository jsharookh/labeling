<?php include 'database.php'; ?>
<?php

$ne_price = '';
$na_price ='';

$sql = "UPDATE a
SET e_price='$ne_price', a_price='$na_price' ";

   if (mysqli_query($connect, $sql)) {
       echo $ne_price;
        header("Location:productlist.php"); /* Redirect browser */
exit();
       
} else {
    echo "Error inserting record";
       echo("Error description: " . mysqli_error($connect));
}
?>