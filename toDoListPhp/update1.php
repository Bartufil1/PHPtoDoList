<?php
include "config.php";
$List = $_POST['list'];
$ID = $_POST['id'];
mysqli_query($con,"UPDATE `tbltodo` SET `list`='$List ' WHERE  id =  $ID ");
header("location:index.php");
?>