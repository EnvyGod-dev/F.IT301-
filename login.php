<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>лаб2 нэвтрэх хэсэг</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="header">
  	<h2>Нэвтрэх</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Нэвтрэх нэр</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Нууц үг</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Нэвтрэх</button>
  	</div>
  	<p>
  		бүртгэлгүй байна бүртгүүл <a href="register.php">Бүртгүүлэх</a>
  	</p>
  </form>
</body>
</html>