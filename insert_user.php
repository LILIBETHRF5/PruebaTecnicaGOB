<?php
include("connection.php");
$con = connection();

$sql = "SELECT MAX(id) AS last_id FROM users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $last_id = $row['last_id'];
    $new_id = $last_id + 1;
} 

$id = $new_id;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$Phone = $_POST['Phone'];

$sql = "INSERT INTO users VALUES('$id','$name','$lastname','$username','$email', '$password', '$Phone')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>