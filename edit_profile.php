<body>
<div class="theme-switch-wrapper">
<label class="theme-switch" for="checkbox">
<input type="checkbox" id="checkbox" />
<div class="slider round"></div>
<i class="icofont-moon"></i>
</label>
<em>Enable Dark Mode!</em>
</div>
<div class="osahan-profle">
<div class="p-3 border-bottom">
<div class="d-flex align-items-center">
<a class="font-weight-bold text-success text-decoration-none" href="?site=my_account">
<i class="icofont-rounded-left back-page" onclick="back()"></i></a>
<h6 class="font-weight-bold m-0 ml-3">Edit Profile</h6>
<a class="toggle ml-auto" href="#"><i class="icofont-navigation-menu"></i></a>
</div>
</div>
</div>
<div id="edit_profile">
<div class="p-4 profile text-center border-bottom">
<img src="img/profile/<?php echo $urow['profile'];?>" class="img-fluid rounded-pill" width='35%' height='35%'>
<h6 class="font-weight-bold m-0 mt-2"><?php echo $urow['ppnames'];?></h6>
<p class="small text-muted"><?php echo $urow['email'];?></p>
</div>
<div class="p-3">
<form action="" method="post">
<div class="form-group">
<label for="exampleInputName1">Full Name</label>
<input type="text" class="form-control" id="exampleInputName1" value="<?php echo $urow['ppnames'];?>" name="name">
</div>
<div class="form-group">
<label for="exampleInputNumber1">Mobile Number</label>
<input type="number" class="form-control" id="exampleInputNumber1" value="<?php echo $urow['phone'];?>" name="phone">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $urow['email'];?>" name="email">
</div>
<div class="text-center">
<button type="submit" class="btn btn-success btn-block btn-lg" name="save">Save Changes</button>
</div>
</form>
</div>
<div class="additional">
<div class="change_password border-bottom border-top">
<a href="?site=change_password" class="p-3 bg-white btn d-flex align-items-center">Change Password
<i class="icofont-rounded-right ml-auto"></i></a>
</div>
<div class="deactivate_account border-bottom">
<a href="?site=deactivate_account" class="p-3 bg-white btn d-flex align-items-center">Deactivate Account
<i class="icofont-rounded-right ml-auto"></i></a>
</div>
</div>
</div>
<?php
if (isset($_POST['save'])) {
$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$phone = test_input($_POST[ 'phone' ]);

$sql = "UPDATE users SET ppnames='$name', email='$email', phone='$phone' WHERE idp= '$sess'";
if (mysqli_query($conn, $sql)) {
  echo "<script language='javascript' type='text/javascript'> location.href='?site=my_account' </script>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>