
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selSchool = $conn->query("SELECT * FROM school_tbl WHERE cou_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update School Name ( <?php echo strtoupper($selSchool['cou_name']); ?> )</i></legend>
  <div class="col-md-12 mt-4">
<form method="post" id="updateSchoolFrm">
     <div class="form-group">
      <legend>School Name</legend>
    <input type="hidden" name="school_id" value="<?php echo $id; ?>">
    <input type="" name="newSchoolName" class="form-control" required="" value="<?php echo $selSchool['cou_name']; ?>" >
  </div>
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
  </div>
</form>
  </div>
</fieldset>







