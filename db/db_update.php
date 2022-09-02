<?php
if(isset($_POST['update'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $reg=mysqli_real_escape_string($conn, $_POST['reg']);
    $gender=mysqli_real_escape_string($conn, $_POST['gender']);
    $course=mysqli_real_escape_string($conn, $_POST['course']);
    $year=mysqli_real_escape_string($conn, $_POST['year']);
    $phone=mysqli_real_escape_string($conn, $_POST['phone']);
    $room=mysqli_real_escape_string($conn, $_POST['room']);
    $prof2=mysqli_real_escape_string($conn, $_POST['prof2']);
    $id=mysqli_real_escape_string($conn, $_POST['id_to_update']);

    $file=$_FILES['profile']['name'];
    $temp=$_FILES['profile']['tmp_name'];
    $path="db/db_pics/students/".$file;

if(empty($file)){
    $file=$prof2;
}

$sql="UPDATE students SET name='$name', prof='$file', reg='$reg',gender='$gender',course='$course', year='$year',phone='$phone',room='$room'  WHERE id=$id";
$result=mysqli_query($conn, $sql);

move_uploaded_file($temp, $path);

header("Location: view.php");
}
?>