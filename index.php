<?php
include('connectbase.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
 crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background:url('FR.avif');background-size: 100%;">
<div class="container d-flex justify-content-center align-items-center"style="min-height:90vh">
<form action="acces.php" method ="POST" class="border shadow p-3 rounded"style=" width: 450px;">
   <img src="login.jpg" alt="" style="position: relative;width: 80px; margin-top:-15%;left:40%;border-radius: 60px;">
<h1 class="text-center p-3">LOGIN</h1>
<?php if (isset($_GET['error'])) {?>
 <div class="alert alert-danger" role="alert">
  <?=($_GET['error'])?>
 </div>
 <?php }?>

     <div class="mb-3">
     <label for="username" class="form-label">Email</label>
     <input type="text" class="form-control" id="username"name="username"  
      placeholder="Enter email">
     <div class="mb-3">
    <label for="password"class="form-label">Password</label>
    <input type="password" class="form-control" id="password"name="password" 
    placeholder=" Enter Password">
    <i class="fa-solid fa-eye"></i>
    </div>
    <button type="submit"class="btn btn-dark"style="float:right;">Login in</button>
</form>
</div>
</body>
</html>