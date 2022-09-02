<?php
if(isset($_POST['delete'])){
    $id=$_POST['id_to_delete'];
    $file=$_POST['profile'];
$sql="DELETE FROM students WHERE id=$id";
$result=mysqli_query($conn, $sql);
$path="db/db_pics/students/".$file;
unlink($path);
echo '<span>deleted successful!</span>';
header("Location: view.php");

}
?>
