<?php

if($conn){
if(isset($_POST['add'])){
    $room=mysqli_real_escape_string($conn, $_POST['room']);

    $sql2="SELECT * FROM students WHERE room='$room'";
    $result2=mysqli_query($conn, $sql2);
    if(mysqli_num_rows($result2) < 4){
    $number=mysqli_num_rows($result2)+1;
    // $profile=mysqli_real_escape_string($conn, $_POST['profile']);
    $room=mysqli_real_escape_string($conn, $_POST['room']);    
    $name=strtoupper(mysqli_real_escape_string($conn, $_POST['name']));
    $reg=strtoupper(mysqli_real_escape_string($conn, $_POST['reg']));
    $course=strtoupper(mysqli_real_escape_string($conn, $_POST['course']));
    $phone=strtoupper(mysqli_real_escape_string($conn, $_POST['phone']));
    if(!empty($_POST['gender'])){
    $gender=strtoupper(mysqli_real_escape_string($conn, $_POST['gender']));
    }else{$gender='';};
    if(!empty($_POST['year'])){
    $year=strtoupper(mysqli_real_escape_string($conn, $_POST['year']));
    }else{$year='';}

$file=$_FILES["profile"]["name"];
$temp=$_FILES["profile"]["tmp_name"];
$path="db/db_pics/students/".$file;

    $sql="INSERT INTO students(reg, course,name, prof, phone,gender, year, room, number) VALUES('$reg', '$course','$name', '$file', '$phone','$gender', '$year', '$room', '$number')";
    $result=mysqli_query($conn, $sql);

    move_uploaded_file($temp, $path);
    
  
                    }
else{ 
    echo "<span class='text-danger'>Room " .$room." is full (has 4 students)!</span>";
}
}
}
?>