 <?php

 include 'database.php';

  $id = $_POST["id"];
  $sql = "SELECT * FROM list WHERE id = '$id'";
  $res = mysqli_query($conn , $sql) or die("SQL Query Fail");
  $data = "";
if (mysqli_num_rows($res)) {
     while ($row = mysqli_fetch_assoc($res)) {

    $data .= '


    <div class="position-relative row form-group">
        <label  class="col-sm-3 col-form-label">Task Title</label>
        <div class="col-sm-9">
            <input name="title" id="title" value="'.  $row['title']  .'" placeholder="with a placeholder" type="text" class="form-control">
        </div>
    </div>
    
    
    <div class="position-relative row form-group">
        <label class="col-sm-3 col-form-label">Description</label>
        <div class="col-sm-9">
            <textarea name="description" id="description" rows="10" id="" class="form-control">'. $row["description"]  .'</textarea>
        </div>
    </div>
      
  <input type="hidden"  id="id" value = "'.$row["id"].'">

    <div class="position-relative row form-check">
        <div class="col-sm-9 offset-sm-3 pr-4" >
            <a name="submit" class="mb-2  btn btn-primary btn-lg btn-block save">Submit</a>
        </div>
    </div>
    

    '; }
echo $data;
        
         mysqli_close($conn);
        
  }
  else{
    echo "<script>alert('else part')</script>";
  }

?>