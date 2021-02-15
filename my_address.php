<body class="fixed-bottom-padding">
<div class="theme-switch-wrapper">
<label class="theme-switch" for="checkbox">
<input type="checkbox" id="checkbox" />
<div class="slider round"></div>
<i class="icofont-moon"></i>
</label>
<em>Enable Dark Mode!</em>
</div>
<div class="osahan-my_address">
<div class="p-3 border-bottom">
<div class="d-flex align-items-center">
<a class="font-weight-bold text-success text-decoration-none" href="?site=my_account">
<i class="icofont-rounded-left back-page" onclick="back()"></i></a>
<h5 class="font-weight-bold m-0 ml-3">My Address</h5>
<button type="button" class="btn btn-outline-success btn-sm ml-auto" data-toggle="modal" data-target="#exampleModal">Add</button>
<a class="toggle ml-3" href="#"><i class="icofont-navigation-menu"></i></a>
</div>
</div>
<div class="p-3">
<div class="custom-control custom-radio px-0 mb-3 position-relative border-custom-radio">
<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
<label class="custom-control-label w-100" for="customRadioInline1">
<div>
<div class="p-3 bg-white rounded shadow-sm w-100">
<div class="d-flex align-items-center mb-2">
<p class="mb-0 h6">Home</p>
<p class="mb-0 badge badge-success ml-auto">Default</p>
</div>
<p class="small text-muted m-0">1001 Veterans Blvd</p>
<p class="small text-muted m-0">Redwood City, CA 94063</p>
<p class="pt-2 m-0 text-right"><span class="small"><a href="#" data-toggle="modal" data-target="#exampleModal" class="text-decoration-none text-success"><i class="icofont-edit"></i> Edit</a></span>
<span class="small ml-3"><a href="#" data-toggle="modal" data-target="#Delete" class="text-decoration-none text-danger"><i class="icofont-trash"></i> Delete</a></span>
</p>
</div>
</div>
</label>
</div>
<div class="custom-control custom-radio px-0 position-relative border-custom-radio">
<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
<label class="custom-control-label w-100" for="customRadioInline2">
<div>
<div class="p-3 rounded bg-white shadow-sm w-100">
<div class="d-flex align-items-center mb-2">
<p class="mb-0 h6">Work</p>
</div>
<p class="small text-muted m-0">Model Town, Ludhiana</p>
<p class="small text-muted m-0">Punjab 141002, India</p>
<p class="pt-2 m-0 text-right"><span class="small"><a href="#" data-toggle="modal" data-target="#exampleModal" class="text-decoration-none text-success"><i class="icofont-edit"></i> Edit</a></span>
<span class="small ml-3"><a href="#" data-toggle="modal" data-target="#Delete" class="text-decoration-none text-danger"><i class="icofont-trash"></i> Delete</a></span>
</p>
</div>
</div>
</label>
</div>
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

<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body text-center d-flex align-items-center">
<div class="w-100 px-3">
<i class="icofont-trash text-danger display-1 mb-5"></i>
<h6>Are you sure you want to delete this?</h6>
<p class="small text-muted m-0">1001 Veterans Blvd</p>
<p class="small text-muted m-0">Redwood City, CA 94063</p>
</div>
</div>
<div class="modal-footer p-0 border-0">
<div class="col-6 m-0 p-0">
<button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
</div>
<div class="col-6 m-0 p-0">
<button type="button" class="btn btn-danger btn-lg btn-block">Delete</button>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Add Delivery Address</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form class="">
<div class="form-row">
<div class="col-md-12 form-group">
<label class="form-label">Delivery Area</label>
<div class="input-group">
<input placeholder="Delivery Area" type="text" class="form-control">
<div class="input-group-append"><button id="button-addon2" type="button" class="btn btn-outline-secondary"><i class="icofont-pin"></i></button></div>
</div>
</div>
<div class="col-md-12 form-group"><label class="form-label">Complete Address</label><input placeholder="Complete Address e.g. house number, street name, landmark" type="text" class="form-control"></div>
<div class="col-md-12 form-group"><label class="form-label">Delivery Instructions</label><input placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall" type="text" class="form-control"></div>
<div class="mb-0 col-md-12 form-group">
<label class="form-label">Nickname</label>
<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
<label class="btn btn-outline-secondary active">
<input type="radio" name="options" id="option1" checked> Home
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="options" id="option2"> Work
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="options" id="option3"> Other
</label>
</div>
</div>
</div>
</form>
</div>
<div class="modal-footer p-0 border-0">
<div class="col-6 m-0 p-0">
<button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
</div>
<div class="col-6 m-0 p-0">
<button type="button" class="btn btn-success btn-lg btn-block">Save changes</button>
</div>
</div>
</div>
</div>
</div>