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


    <form class="d-flex justify-content-between" action="view.php" method="POST">
    <input type="submit" class="fw-bold text-primary bg-grey text-start" name="need_to_add" value="REFRESH">
        <input type="submit" class="fw-bold text-primary bg-grey" name="need_to_add" value="ADD NEW STUDENT">
    </form>

</div>

        <div class="card-body  text-center">

   
        <?php
$sql="SELECT * FROM students ORDER BY gender,room";
$result=mysqli_query($conn, $sql);
$shows=mysqli_fetch_all($result, MYSQLI_ASSOC);


if(mysqli_num_rows($result) > 0){
    mysqli_free_result($result);
?>

<?php
foreach($shows as $show){
    ?>

<div class="mt-3 d-flex justify-content-between">
<div><img src="db/db_pics/students/<?php echo $show['prof']; ?>" style="width:100px; height: 100px" alt="">
<span><?php echo $show['name']; ?></span>
<span><?php echo $show['room']; ?></span>
</div>

<!-- start of edit and delete div -->

<div class="d-flex">

<div class="me-2">
<form action="view.php" method="POST">
<input type="hidden" name="id_more" value="<?php echo htmlspecialchars($show['id']); ?>"> 
<input type="submit" name="more" value="More">
</form>
</div>

<div class="me-2">
    <button><a href="view.php?id=<?php echo htmlspecialchars($show['id']); ?>">Edit</a></button>
</div>

<!-- start delete -->
<div>
<form action="view.php" method="POST">
<input type="hidden" name="id_to_delete" value="<?php echo htmlspecialchars($show['id']); ?>"> 
<input type="hidden" name="profile" value="<?php echo htmlspecialchars($show['prof']); ?>"> 
<input type="submit" name="delete" value="Delete">
</form>
</div>
</div>
<!-- end of edit and delete div -->

</div>
<hr>
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
    include 'forms/add.php';
}
// end add new student page


if(isset($_GET['id'])){
$id=mysqli_real_escape_string($conn, $_GET['id']);
$sql="SELECT * FROM students WHERE id=$id";
$result=mysqli_query($conn, $sql);
$display=mysqli_fetch_assoc($result);

include 'forms/edit.php';

?>

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