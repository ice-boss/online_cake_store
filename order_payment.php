<body class="fixed-bottom-padding">
<div class="theme-switch-wrapper">
<label class="theme-switch" for="checkbox">
<input type="checkbox" id="checkbox" />
<div class="slider round"></div>
<i class="icofont-moon"></i>
</label>
<em>Enable Dark Mode!</em>
</div>
<div class="osahan-payment">
<div class="p-3 border-bottom">
<div class="d-flex align-items-center">
<a class="font-weight-bold text-success text-decoration-none" href="?site=delivery_time">
<i class="icofont-rounded-left back-page" onclick="back()"></i></a>
<h6 class="font-weight-bold m-0 ml-3">Payment Method</h6>
<a class="toggle ml-auto" href="#"><i class="icofont-navigation-menu"></i></a>
</div>
</div>
<div class="payment p-3">
<div class="accordion" id="accordionExample">
<div class="osahan-card rounded shadow-sm bg-white mb-3">
<div class="osahan-card-header" id="headingOne">
<h2 class="mb-0">
<button class="d-flex p-3 align-items-center border-0 btn btn-outline-success bg-white text-decoration-none text-success w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
<i class="icofont-credit-card mr-3"></i> Credit/Debit Card
<i class="icofont-rounded-down ml-auto"></i>
</button>
</h2>
</div>
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
<div class="osahan-card-body p-3 border-top">
<h6 class="m-0">Add new card</h6>
<p class="small">WE ACCEPT <span class="osahan-card ml-2 font-weight-bold">( Master Card / Visa Card / Rupay )</span></p>
<form>
<div class="form-row">
<div class="col-md-12 form-group">
<label class="form-label font-weight-bold small">Card number</label>
<div class="input-group">
<input placeholder="Card number" type="number" class="form-control">
<div class="input-group-append"><button id="button-addon2" type="button" class="btn btn-outline-secondary"><i class="icofont-credit-card"></i></button></div>
</div>
</div>
<div class="col-md-8 form-group"><label class="form-label font-weight-bold small">Valid through(MM/YY)</label><input placeholder="Enter Valid through(MM/YY)" type="number" class="form-control"></div>
<div class="col-md-4 form-group"><label class="form-label font-weight-bold small">CVV</label><input placeholder="Enter CVV Number" type="number" class="form-control"></div>
<div class="col-md-12 form-group"><label class="form-label font-weight-bold small">Name on card</label><input placeholder="Enter Card number" type="text" class="form-control"></div>
<div class="col-md-12 form-group">
<div class="custom-control custom-checkbox"><input type="checkbox" id="custom-checkbox1" class="custom-control-input"><label title="" type="checkbox" for="custom-checkbox1" class="custom-control-label small pt-1">Securely save this card for a faster checkout next time.</label></div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="osahan-card rounded shadow-sm bg-white mb-3">
<div class="osahan-card-header" id="headingTwo">
<h2 class="mb-0">
<button class="d-flex p-3 align-items-center btn text-decoration-none text-success w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<i class="icofont-globe mr-3"></i> Net Banking
<i class="icofont-rounded-down ml-auto"></i>
</button>
</h2>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="osahan-card-body p-3 border-top">
<form>
<div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
<label class="btn btn-outline-secondary active">
<input type="radio" name="options" id="option1" checked=""> HDFC
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="options" id="option2"> ICICI
</label>
<label class="btn btn-outline-secondary">
<input type="radio" name="options" id="option3"> AXIS
</label>
</div>
<div class="form-row pt-3">
<div class="col-md-12 form-group">
<label class="form-label small font-weight-bold">Select Bank</label><br>
<select class="custom-select form-control">
<option>Bank</option>
<option>KOTAK</option>
<option>SBI</option>
<option>UCO</option>
</select>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="osahan-card rounded shadow-sm bg-white mb-3">
<div class="osahan-card-header" id="headingThree">
<h2 class="mb-0">
<button class="d-flex p-3 align-items-center btn text-decoration-none text-success w-100" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
<i class="icofont-dollar mr-3"></i> Cash on Delivery
<i class="icofont-rounded-down ml-auto"></i>
</button>
</h2>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
<div class="border-top">
 <div class="card-body">
<div class="custom-control custom-checkbox mr-sm-2">
<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
<label class="custom-control-label" for="customControlAutosizing">
<b>Cash</b><br>
<p class="small text-muted m-0">Please keep exact change handy to help us serve you better</p>
</label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="fixed-bottom">
<a href="?site=checkout" class="btn btn-success btn-block">Continue</a>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Add Payment</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form action="https://askbootstrap.com/preview/grofar/my_address">
<div class="modal-body">
<div class="form-group">
<label for="addAddress1">Address Name</label>
<input type="text" class="form-control" id="addAddress1" required>
</div>
<div class="form-group">
<label for="addAddress2">Enter Full Address</label>
<input type="text" class="form-control" id="addAddress2" required>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-outline-success">Save changes</button>
</div>
</form>
</div>
</div>
</div>