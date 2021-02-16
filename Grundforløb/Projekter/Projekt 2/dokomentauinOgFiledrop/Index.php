<?php
session_start();
//echo $_SESSION['success'];
if ($_SESSION['success'] == 0) {
    header("location: login.php");
    exit();
}

?>
<?php
include_once 'dbconnect.php';

// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>

<style>
.container {
  position: relative;
}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
} 
</style>
    <title>Upload & View</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
      <link rel="stylesheet" href="stylesheet.css">

</head>
<body>
  <div id="videoDiv2">
  <video id="video2" preload="2" autoplay="" muted="" playsinline="" loop="">
  <source src="water.mp4" type="video/mp4">
  </video>
    <div id="videoMessage2" class="styling"></div>
<div class="phpsys">
  <div id= container class="styling">
      <div class="row"> <!-- needs a more css-->
          <div class="col-xs-8 col-xs-offset-2 well">
          <form action="upload.php" method="post" enctype="multipart/form-data">
              <legend>Select File to Upload:</legend>
              <div class="form-group">
                  <input type="file" name="file1" />
              </div>
              <div class="form-group">
                  <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
              </div>
              <?php if(isset($_GET['st'])) { ?>
                  <div class="alert alert-danger text-center">
                  <?php if ($_GET['st'] == 'success') {
                          echo "File Uploaded Successfully!";
                      }
                      else
                      {
                          echo 'Invalid File Extension!';
                      } ?>
                  </div>
              <?php } ?>
          </form>
          </div>
      </div>

      <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
              <table class="table table-striped table-hover">
                  <thead> <!-- needs more css -->
                      <tr>
                          <th>#</th>
                          <th>File Name</th>
                          <th>View</th>
                          <th>Download</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                  while($row = mysqli_fetch_array($result)) { ?>
                  <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $row['filename']; ?></td>
                      <td><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                      <td><a href="uploads/<?php echo $row['filename']; ?>" download>Download</td>
                  </tr>
                  <?php } ?>


                  <div class="topright"> 
                  <input type="button" value="Logout" onclick="location.href='Login.php';">
                  <br> 
                  <input type="button" value="Return" onclick="location.href='Mainpage.php';"> 
                  </div> 
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

                    


</body>
</html>
