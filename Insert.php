

<?php
include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query= "INSERT INTO `form2`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

// if ($conn->query($query) === TRUE) {
//     echo"sucussfuly";
// }else {
//     echo "not";
// }
$sql = mysqli_query($conn,$query);

header('Location:display.php');
?>
