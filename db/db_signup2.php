<?php
if($conn){
if(isset($_POST['submit'])){
    $user=mysqli_real_escape_string($conn, $_POST['username']);
    $pass=mysqli_real_escape_string($conn, $_POST['password']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $gender=mysqli_real_escape_string($conn, $_POST['gender']);
    $role=mysqli_real_escape_string($conn, $_POST['role']);

    // $profile=mysqli_real_escape_string($conn, $_POST['profile']);

$file=$_FILES["profile"]["name"];
$temp=$_FILES["profile"]["tmp_name"];
$path="db/db_pics/".$file;

    $sql="INSERT INTO users(user,prof, pass,email,gender, role) VALUES('$user', '$file','$pass','$email','$gender','$role')";
    $result=mysqli_query($conn, $sql);

    move_uploaded_file($temp, $path);
header("Location: view.php");

}
}
?>