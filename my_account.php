<body class="fixed-bottom-padding">
<div class="theme-switch-wrapper">
<label class="theme-switch" for="checkbox">
<input type="checkbox" id="checkbox" />
<div class="slider round"></div>
<i class="icofont-moon"></i>
</label>
<em>Enable Dark Mode!</em>
</div>
<div class="osahan-account">
<div class="p-3 border-bottom">
<div class="d-flex align-items-center">
<h5 class="font-weight-bold m-0">My Account</h5>
<a class="toggle ml-auto" href="#"><i class="icofont-navigation-menu"></i></a>
</div>
</div>
<div class="p-4 profile text-center border-bottom">
<img src="img/profile/<?php echo $urow['profile'];?>" class="img-fluid rounded-pill" width='35%' height='35%'>
<h6 class="font-weight-bold m-0 mt-2"><?php echo $urow['ppnames'];?></h6>
<p class="small text-muted"><?php echo $urow['email'];?></p>
<a href="?site=edit_profile" class="btn btn-success btn-sm"><i class="icofont-pencil-alt-5"></i> Edit Profile</a>
</div>
<div class="account-sections">
<ul class="list-group">
<a href="?site=promos" class="text-decoration-none text-dark">
<li class="border-bottom bg-white d-flex align-items-center p-3">
<i class="icofont-sale-discount osahan-icofont bg-success"></i>Promos
<span class="badge badge-success p-1 badge-pill ml-auto"><i class="icofont-simple-right"></i></span>
</li>
</a>
<a href="?site=my_address" class="text-decoration-none text-dark">
<li class="border-bottom bg-white d-flex align-items-center p-3">
<i class="icofont-address-book osahan-icofont bg-dark"></i>My Address
<span class="badge badge-success p-1 badge-pill ml-auto"><i class="icofont-simple-right"></i></span>
</li>
</a>
<a href="?site=terms_conditions" class="text-decoration-none text-dark">
<li class="border-bottom bg-white d-flex align-items-center p-3">
<i class="icofont-info-circle osahan-icofont bg-primary"></i>Terms, Privacy & Policy
<span class="badge badge-success p-1 badge-pill ml-auto"><i class="icofont-simple-right"></i></span>
</li>
</a>
<a href="?site=help_support" class="text-decoration-none text-dark">
<li class="border-bottom bg-white d-flex align-items-center p-3">
<i class="icofont-phone osahan-icofont bg-warning"></i>Help & Support
<span class="badge badge-success p-1 badge-pill ml-auto"><i class="icofont-simple-right"></i></span>
</li>
</a>
<a href="?site=signout" class="text-decoration-none text-dark">
<li class="border-bottom bg-white d-flex  align-items-center p-3">
<i class="icofont-lock osahan-icofont bg-danger"></i> Logout
</li>
</a>
</ul>
</div>
</div>

<div class="osahan-menu-fotter fixed-bottom bg-white text-center border-top">
<div class="row m-0">
<a href="?site=home" class="text-dark small col text-decoration-none p-2">
<p class="h5 m-0"><i class="icofont-grocery"></i></p>
Shop
</a>
<a href="?site=cart" class="text-muted col small text-decoration-none p-2">
<p class="h5 m-0"><i class="icofont-cart"></i></p>
Cart
</a>
<a href="?site=complete_order" class="text-muted col small text-decoration-none p-2">
<p class="h5 m-0"><i class="icofont-bag"></i></p>
My Order
</a>
<a href="?site=my_account" class="text-muted small font-weight-bold col text-decoration-none p-2 selected">
<p class="h5 m-0"><i class="text-success icofont-user"></i></p>
Account
</a>
</div>
</div>