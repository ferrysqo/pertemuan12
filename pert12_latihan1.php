<?php
$con = mysqli_connect("localhost","root","","data_mahasiswa");
if (!$con)
{
die('Could not connect: ' . mysqli_connect_error());
}
else {
  echo 'Berhasil';
}
mysqli_query($con,"UPDATE data_mahasiswa SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
mysqli_close($con);
?>