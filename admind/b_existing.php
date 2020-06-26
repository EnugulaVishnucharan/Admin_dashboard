<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <meta charset = "UTF-8">
  <meta name = "description" content = "Description of the page" >
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="adminstyle.css">
    
</head>

<body>
   <div class="wrapper">
       <div class="sidebar">
          <ul>
           <?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br><br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="../create_user.php" style="color:green"> + add user</a>
					</small>

			<?php endif ?>
            <li class="li_hov"><a href="home.php">Home</a></li>
            <li><a href="#">Brand</a>
              <ul>
                  <li> <a href="b_create.php">Create</a></li>
                  <li> <a href="b_existing.php">Existing</a></li>
              </ul>
            </li>
            <li><a href="">Influencer</a>
              <ul>
                  <li> <a href="i_create.php">Create</a></li>
                  <li> <a href="i_existing.php">Existing</a></li>
              </ul>
            </li>
              <li class="li_hov"><a href="campaign.php">Campaign</a></li>
            <li class="li_hov"><a href="support.php">Support</a></li>
            
        
       </ul>
       </div>
    <div class="main_content">

        <div class="info">

        </div>
       </div>
    </div>
   
   
</body>

</html>