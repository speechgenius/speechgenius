
<?php
if(isset($_POST['more'])){
$id=mysqli_real_escape_string($conn, $_POST['id_more']);
$sql="SELECT * FROM students WHERE id=$id";
$result=mysqli_query($conn, $sql);
$display=mysqli_fetch_assoc($result);
?>


<img src="db/db_pics/students/<?php echo $display['prof'];  ?>" style="width: 100%; height:300px;" alt="">
<div><label for="">Name: </label><?php echo ' '.$display['name']; ?></div>
<div><label for="">Reg no: </label><?php echo ' '.$display['reg']; ?></div>
<div><label for="">Gender: </label><?php echo ' '.$display['gender']; ?></div>
<div><label for="">Course: </label><?php echo ' '.$display['course']; ?></div>
<div>Contacts: <?php echo ' '.$display['phone']; ?></div>
<div><label for="">Year of Study: </label><?php echo ' '.$display['year']; ?></div>
<div><label for="">Room: </label><?php echo ' '.$display['room']; ?></div>

<?php } ?>