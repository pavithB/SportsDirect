<body>
<?php
$con=mysqli_connect("localhost","root","","sportsdirect");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO feedback (name, email, comment, rating)
VALUES
('$_POST[name]','$_POST[email]','$_POST[comment]','$_POST[rating]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';

mysqli_close($con);

?>
<a href="feedback page/form.php">back</a>
</body>
