
        <form action="view.php" method="POST" enctype="multipart/form-data">
            <div class="mt-3">
            <input type="hidden" name="id_to_update" value="<?php echo $display['id']; ?>">
                <label for="" class="form-label">name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $display['name']; ?>">
            </div>
            
            <div class="mt-3">
            <img src="db/db_pics/students/<?php echo $display['prof']; ?>" style="width:100px; height:100px;" alt="">
            <label for="" class="form-label"> Profile </label>
        <input type="file" class="form-control" name="profile" value="<?php echo $display['prof']; ?>">

        <!-- incase no new profile uploaded -->
        <input type="hidden" name="prof2" value="<?php echo $display['prof']; ?>">
        </div>

        <div class="d-flex">
            <div class="mt-3 col-8 me-2">
            <label for="" class="form-label">Reg No: </label>
        <input type="text" class="form-control" name="reg" value="<?php echo $display['reg']; ?>">
        </div>
        
        <div class="mt-3">
            <label for="" class="form-label">Room: </label>
        <input type="number" class="form-control" name="room" value="<?php echo $display['room']; ?>">
        </div>
        </div>


    <div class="text-danger mt-3"><hr>Last Records: <?php echo 'Gender: '. $display['gender'] .' | Course: '. $display['course'].' | Year:'. $display['year'] ?><hr></div>  
    <div class="d-flex ">
    <div class="mt-3 me-3">
    <label for="" class="form-label">Course:</label><br>
    <select id="" name="course">
  <option value="BIT">BIT</option>
  <option value="BCS" <?php echo $display['course'] == 'BCS' ? 'selected': '' ?> >BCS</option>
  <option value="BSP" <?php echo $display['course'] == 'BSP' ? 'selected': '' ?> >BSP</option>
  <option value="BAC" <?php echo $display['course'] == 'BAC' ? 'selected': '' ?>>BAC</option>
</select>
    </div>
    <div class="mt-3">
    <label for="" class="form-label">Year of study:</label><br>
    <input type="radio" name="year" value="1st Yr" <?php echo $display['year'] == '1st Yr' ? 'checked': ''; ?>>
    <label for="" class="form-label">First</label>
    <input type="radio" name="year" value="2nd Yr" <?php echo $display['year'] == '2nd Yr' ? 'checked': ''; ?>>
    <label for="" class="form-label">Second</label>
    <input type="radio" name="year" value="3rd Yr" <?php echo $display['year'] == '3rd Yr' ? 'checked': ''; ?>>
    <label for="" class="form-label">Third</label>
    </div>
    </div>

    <div class="d-flex">
    <div class="mt-3 me-3">
    <label for="" class="form-label">Gender:</label><br>
    <input type="radio" name="gender" value="male" <?php echo $display['gender'] == 'male' ? 'checked': '' ?> >
    <label for="" class="form-label">Male</label>
    <input type="radio" name="gender" value="female" <?php echo $display['gender'] == 'female' ? 'checked': '' ?> >
    <label for="" class="form-label">Female</label>
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Contacts: </label>
    <input type="text" class="form-control" name="phone" value="<?php echo $display['phone']; ?>">
    </div>
</div>


        <input type="submit" name="update" value="Save">
        </form>
        