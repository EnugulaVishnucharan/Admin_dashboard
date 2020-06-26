<?php
include('../functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
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
    <link rel="stylesheet" href="crestyle.css">
    
</head>
<body>
   <div class="wrapper">
       <div class="sidebar">
          <ul>
    
            <li><a href="Create.php">Dashboard</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">FAQS</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="index.php?logout='1'">Logout</a></li>
        
       </ul>
       </div>
    </div>
    <div class="main_content">
        <h2 class="header1">These are the ongoing campaigns</h2>
        <div class="right_nav" style="background:#444">
          <ul>
    
            <li><a href="Create.html">Ongoing Campaign</a></li>
            <li><a href="Applied.html">Applied Campaigns</a></li>
            <li><a href="earned.html">Earned</a></li>
            <li><a href="Engagement.html">Engagement Rate</a></li>
        
       </ul>

        </div>
        <div class="info">
       <section >
           <article class="cam_info">
            <header>Campaign 1</header>
               <p> <br>This is campaign related to the technology </p>
               <footer><p><a href="#"><strong>Click here</strong></a> for more deatils </p></footer>
           </article>
           <article class="cam_info">
            <header>Campaign 2</header>
               <p> <br>This is campaign related to the Bussiness </p>
               <br><footer><p><a href="#"><strong>Click here</strong></a> for more deatils </p></footer>
           </article>
           <article class="cam_info">
            <header>Campaign 3</header>
               <p> <br>This is campaign related to the fashion </p>
               <br><footer><p><a href="#"><strong>Click here</strong></a> for more deatils </p></footer>
           </article>
           <article class="cam_info">
            <header>Campaign 4</header>
               <p> <br>This is campaign related to the lifestyle </p>
              <br><footer><p><a href="#"><strong>Click here</strong></a> for more deatils </p></footer>
           </article>
           <article class="cam_info">
            <header>Campaign 5</header>
               <p> <br>This is campaign related to the lifestyle </p>
              <br><footer><p><a href="#"><strong>Click here</strong></a> for more deatils </p></footer>
           </article>
        </section>
        </div>
       </div>
</body>
</html>