<?php require_once "process.php"; ?>

<!DOCTYPE html>
<head>
    <title>Join meets</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
    <link rel="stylesheet" type="text/css" href="ied.css" >
    
</head>
<body>
 <div class="main">
    <div class="navbar">
    <div class="icon">
    <h2 class="logo">RFDL</h2>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="introduction.php">INTRODUCTION</a></li>
            <li><a href="v-meets.php">VIEW MEETS</a></li>
            <li><a href="ied.php">JOIN MEETS </a></li>
            <li><a href="logout.php">LOGOUT <?php echo $user_data['user_name']; ?></a></li>
        </ul>
    </div>
  

<form action="process.php" method="post">

<div class="form-group">

<input type="text" name="name" class="form-control" placeholder="Enter Your Name">
</div>

<div class="form-group">

<input type="text" name="event" class="form-control" placeholder="What Event ">
</div>

<div class="form-group">

<input type="SET" name="attend" class="form-control" placeholder="Will you be attending?">
</div>

<div class="form-group">
<button type="submit" class="savebutton" name="save">Save</button>

    
</form>
</div>
</body>

