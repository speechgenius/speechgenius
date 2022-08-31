<?php
include 'db/db_conn.php';
include 'db/db_signup.php';
include 'components/header.php';
?>
<body>
    <div class="container mt-4">
    <div class="row justify-content-center">

    <div class="card col-4 p-0">
        <div class="card-header text-center">Sign Up</div>
        <div class="card-body  ">
   <form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="mt-3">
        <label for="" class="form-label">Username:</label>
    <input type="text" class="form-control" name="username">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Profile:</label>
    <input type="file" class="form-control" name="profile">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Email:</label>
    <input type="text" class="form-control" name="email">
    </div>

    <div class="d-flex">
    <div class="mt-3 me-3">
        <label for="" class="form-label">Password:</label>
    <input type="text" class="form-control" name="password">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Re-enter Password:</label>
    <input type="text" class="form-control" name="re-pass">
    </div>
   </div>

       <!-- start group gender and role -->
<div class="d-flex ">
    <div class="mt-3 me-3">
    <label for="" class="form-label">Gender:</label><br>
    <input type="radio" name="gender" value="male">
    <label for="" class="form-label">Male</label>
    <input type="radio" name="gender" value="female">
    <label for="" class="form-label">Female</label>

    </div>

    <div class="mt-3">
    <label for="" class="form-label">Role:</label><br>
    <input type="radio" name="role" value="student">
    <label for="" class="form-label">Student</label>
    <input type="radio" name="role" value="warden">
<label for="" class="form-label">Warden</label>
    </div>
    </div>
    <!-- end group gender and role -->

    <div class="mt-2 text-center">
        <input type="submit" name="submit" value="Sign Up">
    </div>
   </form> 
   </div>
   <!-- end card body -->
   </div> 
   <!-- end card -->

   </div>
   <!-- end row -->
   </div>
   <!-- end container -->
</body>
</html>