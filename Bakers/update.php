<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <style>
        h2{
            color: Black;
            align-items: center;

        }
     </style>
        </head>
<body>
</body>
</html>


<?php

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="contact1.css">
    </head>

<?php
    //include 'connection.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM contact WHERE id = '$id'";
    $query_show = mysqli_query($conn, $query);
    $show = mysqli_fetch_assoc($query_show);
?>


<body>
<div class="right-side">

<!-- Contact Section -->
    <div class="contact_data">
          <h2>Update</h2>
          <form action="#" method="POST">
          <input type="text" name="Name" placeholder="Name*" value="<?php echo $show['Name'];?>" required>
          <input type="number" name="Phone" placeholder="Phone*" value="<?php echo $show['Phone'];?>" required>
          <input type="text" name="Message" placeholder="Message*" value="<?php echo $show['Message'];?>" required>
          <div class="button">
          <button type="submit" class="btn" name="submit"><input type="button" value="UPDATE" ></button>
        </div>
          </form>
        </div>
      </div>

    </div>
</div>
</body>
</html>


<?php
// error_reporting();
if (isset($_POST['submit'])) {

  $name=$_POST['Name'];
  $phone=$_POST['Phone'];
  $Message=$_POST['Message'];


  $sql= "UPDATE contact SET Name='$name',Phone='$phone',Message='$Message' WHERE id='$id'";
  $data= mysqli_query($conn,$sql);

  if($data){
    echo "Record Updated Successfully";
    
    header("location:display.php");

  }
  else{
    echo "data do not insert";

}
}

?>