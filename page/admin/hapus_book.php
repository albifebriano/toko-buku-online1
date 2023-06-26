<?php
include('../../config.php');
$bk=$_GET['id'];
mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM buku WHERE id_buku='$bk'");
header("location:index.php?page=buku");
 ?>