<?php 

$conn=mysqli_connect('localhost','root', '','product');
$sql="SELECT * FROM students";
$result=mysqli_query($conn, $sql);
$shows=mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($shows as $show){
?>    
<div class="mt-3 d-flex justify-content-between">
<div><img src="db/db_pics/students/<?php echo $show['prof']; ?>" style="width:100px; height: 100px" alt="">
<span><?php echo $show['name']; ?></span>
<span><?php echo $show['room']; ?></span>
</div>

<?php
}

?>