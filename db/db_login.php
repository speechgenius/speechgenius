<?php
include 'db/db_conn.php';
include 'db/db_update.php';
include 'db/db_del.php';
include 'components/header.php';

?>
<style>
a:hover{color:green !important;

}
</style>

<body>


    <div class="container mt-4">
    <div class="row">

    <div class="card col-6 p-0 me-3">
    <div class="card-header text-end">
        
    <form action="view.php" method="POST">
        <input type="submit" class="fw-bold text-primary bg-grey" name="need_to_add" value="ADD NEW STUDENT">
    </form>
</div>

        <div class="card-body  ">
        <?php
$sql="SELECT * FROM students";
$result=mysqli_query($conn, $sql);
$shows=mysqli_fetch_all($result, MYSQLI_ASSOC);


if(mysqli_num_rows($result) > 0){
    mysqli_free_result($result);

foreach($shows as $show){
    ?>

<div class="mt-3 d-flex justify-content-between">
<div><img src="db/db_pics/<?php echo $show['prof']; ?>" style="width:50px; height: 50px" alt="">
<span><?php echo $show['name']; ?></span>
<span><?php echo $show['room']; ?></span>
</div>

<!-- start of edit and delete div -->
<div class="d-flex ">

<div class="me-2">
<form action="view.php" method="POST">
<input type="hidden" name="id_more" value="<?php echo htmlspecialchars($show['id']); ?>"> 
<input type="submit" name="more" value="More">
</form>
</div>





<!-- start delete -->
<div>
<form action="view.php" method="POST">
<input type="hidden" name="id_to_delete" value="<?php echo htmlspecialchars($show['id']); ?>"> 
<input type="submit" name="delete" value="Delete">
</form>
</div>
</div>
<!-- end of edit and delete div -->

</div>

<?php 
}
// end foreach
}
// end num_rows

else{
 echo "<span style='color:red;'>No Record!</span>";   
}


?>



   </div>
   <!-- end card body -->
   </div> 
   <!-- end card -->


  <!-- start new card 2-->

  <div class="card col-5 p-0">
        <div class="card-body  ">
        
        <?php

// including add student file
include 'db/db_add_student.php';

if(isset($_POST['more'])){
    include 'db/db_more.php';
}


// add new student page
if(isset($_POST['need_to_add'])){
    include 'add.php';
}
// end add new student page


if(isset($_GET['id'])){
$id=mysqli_real_escape_string($conn, $_GET['id']);
$sql="SELECT * FROM students WHERE id=$id";
$result=mysqli_query($conn, $sql);
$display=mysqli_fetch_assoc($result);

?>

<form action="view.php" method="POST">
    <div class="mt-3">
    <input type="hidden" name="id_to_update" value="<?php echo $display['id']; ?>">
        <label for="" class="form-label">name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $display['name']; ?>">
    </div>
    <div class="mt-3">
    <label for="" class="form-label">Room:</label>
<input type="text" class="form-control" name="room" value="<?php echo $display['room']; ?>">
</div>
<input type="submit" name="update" value="Save">
</form>

<?php
}
?>
   </div>
   <!-- end card body -->
   </div> 
   <!-- end card 2-->

   </div>
   <!-- end row -->
   </div>
   <!-- end container -->
</body>
</html>