<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="box">
  <div class="header-box">
<h2>Dataset generator for lab06</h2>
</div>

<div class="form-box">
<form action="logic.php" method="post">
<p>Name for dataset:</p>
<input type="text" name="name" value="">
<p>this will generate a dataset with and random ammount of
  students and grades for lab 06.</p>
<br>
<input type="submit">
</form>
</div>


</div>
<?php
  include 'logic.php';
 ?>
</body>
</html>
