<?php

	session_start();
		if(!isset($_SESSION['user']))
		{
			header("Location: mnit.php");
		}
		if($_SESSION['user']=='student_int' )
    {
      header("Location: index_student_intern.php");
    }
    if($_SESSION['user']=='student_place' )
    {
      header("Location: index_student_placement.php");
    }
		if($_SESSION['user']=='company')
		{
			header("Location: index_company.php");
		}

?>
<?php
$noti="";
$errors = array();
$positives=array();
$db = mysqli_connect('localhost:3307', 'root', '', 'agat');
//session_start();
if (isset($_POST['add_place_gen_noti'])) 
{
  // receive all input values from the form
  $noti = mysqli_real_escape_string($db, $_POST['noti']);


  
  		 $query = "INSERT INTO place_notification (noti) VALUES('$noti')";
    	mysqli_query($db, $query);
    	array_push($positives,"Successfully added detail for Placement Students");
  
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>General Notification for Placement</title>
  <link rel="stylesheet" type="text/css" href="1.css"> 
  <link rel="shortcut icon" type="image/png" href="Images/srmlogo.png">
  <link rel="stylesheet" type="text/css" href="stl.css">
</head>
<body >
  <div class="list-unstyled3" >
          <ul>
            <li><a href="mnit.php"><img src="Images/srmlogo.png" alt="SRM University"  class="logo2" height="40"  align="left"/></a></li>
              <li style="float:right"><a  href="logout.php" title="<?php echo $_SESSION['admin_name']; ?> ">Log Out</a></li> 
  
            <div class="para">
            <p> Training &amp; Placement,SRM University</p>
                </div>  
                   </ul>
          
        </div>
  <div class="header">
  	<h2>Add General Notification</h2>
  </div>

	<form method="post" action="add_place_gen_noti.php">
  	<?php //include('wrong.php'); ?>
    <?php include('positive.php'); ?>
  	<div class="input-group">
  	  <!--<label>Notification</label>-->
  	  <textarea name="noti" placeholder="Write Notification for the Placement" style="height:100px;width: 370px;"></textarea>
  	  <!--<input type="text" name="noti" value="<?php// echo $noti; ?>">-->
  	</div>
	
	

  	<div class="input-group">
  	  <button type="submit" class="btn" name="add_place_gen_noti">Add Notification</button>
  	</div>
  	<p>
      Added The Notification? <a href="index_admin.php">Go Back</a>
    </p> 
  </form>
</body>
</html>