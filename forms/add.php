<form action="view.php" method="POST" enctype="multipart/form-data">
    <div class="mt-3">
        <label for="" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Reg:</label>
    <input type="text" class="form-control" name="reg">
    </div>

    <div class="mt-3 me-3">
    <label for="" class="form-label">Course:</label>
    <select id="" name="course">
  <option value="BIT">BIT</option>
  <option value="BCS">BCS</option>
  <option value="BSP">BSP</option>
  <option value="BAC">BAC</option>
</select>
    </div>


    <div class="mt-3">
        <label for="" class="form-label">Profile:</label>
    <input type="file" class="form-control" name="profile">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Phone Number:</label>
    <input type="text" class="form-control" name="phone">
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
    <label for="" class="form-label">Year of study:</label><br>
    <input type="radio" name="year" value="1st Yr">
    <label for="" class="form-label">First</label>
    <input type="radio" name="year" value="2nd Yr">
    <label for="" class="form-label">Second</label>
    <input type="radio" name="year" value="3rd Yr">
    <label for="" class="form-label">Third</label>
    </div>
    </div>
    <!-- end group gender and role -->

    <div class="mt-3">
        <label for="" class="form-label">Room:</label>
    <input type="number" value="300" class="form-control" name="room">
    </div>

    <div class="mt-2 text-center">
        <input type="submit" name="add" value="Add Student">
    </div>
   </form> 