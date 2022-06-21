


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sofrah</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/style-main.css">
	<style type="text/css">
  	 .form-control[readonly] {
    background-color: white;
    opacity: 1;
    height: 50px;
}
  	input[type="name"]{
    height: 50px;
    
}
.drop{
    height: 50px;
    
}
.card2 {
  /* Add shadows to create the "card" effect */
   border-radius:20px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width:900px;


}

/* On mouse-over, add a deeper shadow */
.card2:hover {
 
   border-radius:50px;
}

</style>
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand logo" href="#">
        <img src="images/logo.png"/>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-right: 50px;">

            <div class="input-group input-group-lg location mr-4">
                <input type="text" class="form-control" placeholder="Pakistan"  style="border-radius: 10px;border-color:#E1E1E1;" />
                <div class="input-group-btn">
                    <button class="fas fa-location ico" data-toggle="modal" data-target="#mapModal"></button>
                </div>
            </div>
			<div class=" input-group-lg search px-2">
                <select class="form-control" placeholder=""  style="border-radius: 10px; width: 180px;" />
                	<option>Delivery</option>
                	<option>Pickup</option>
                </select>
            </div>
            <div class=" input-group-lg search px-2">
                <select class="form-control" placeholder=""  style="border-radius: 10px; width: 180px;" />
                	<option>Same Day</option>	
                </select>
            </div>
			<div class=" input-group-lg search px-2">
                <select class="form-control" placeholder=""  style="border-radius: 10px; width: 180px;" />
                	<option>Kitchen</option>	
                </select>
            </div>
	

            <!-- <div class="input-group input-group-lg search">

                <input type="text" class="form-control" placeholder="Find Mobile, Car ,laptop" />
                <div class="input-group-btn">
                    <button class="fas fa-search ico"></button>
                </div>
            </div> -->

        </ul>
        <form class="form-inline d-flex align-items-center justify-content-between">
            <span class="my-2 my-sm-0 fas fa-user sell"></span>
            <div class="sell1">|</div>
           	 <span class="my-2 my-sm-0 fas fa-heart	 sell"></span>
           	 <div class="sell1">|</div>
           	 <span class="my-2 my-sm-0 fas fa-shopping-cart	 sell"></span>
           	 <div class="dropdown">
           	 <button class="drop-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           	     <span class="my-2 my-sm-0 fas fa-bars menu"></span>
           	</button>
           	 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">My Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="myorders.php">My Orders</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="voucher.php">Vouchers</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Payment Details</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Locations</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Notifications</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
            </div>
           	 </form>
    </div>
</nav>
 

    
				<div class="row text-center" style="margin-top:20px;">
				    <div class="col-md-12">
						<h2 style="color:#001746;"><b>My Vouchers</b></h2>
					
					
           
            
            </div>
             <div class="row" style="margin-top:50px; margin-left:0px;">
                 
            <div class="col-lg-12">
               
               <b style="font-size: 18px; color: #001746;">500 off on your order
               
               <b style="font-size: 18px; color: #001746; margin-left:240px;">
                   
               <b style="font-size: 18px; color: #001746; margin-left:180px; margin-top:15px;">Rs 3000
                <br> <small style="float:left; margin-left:210px;">code:gtree</small>
                
                 <small style="float: right; margin-top: -45px; margin-right: 207px;">Expiry: 10-FEB-2022</small>
            </div>
            <div>
              
            </div>
		</div>
</div>

<!-- Modal Map-->
<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div style="width: 100%"><iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe>
          <div class="row">
              <div class="input-group input-group-lg location my-2 col-lg-12">
                <input type="text" class="form-control" placeholder="Pakistan"  style="border-radius: 10px;border-color:#E1E1E1;" />
                <div class="input-group-btn">
                    <button class="fas fa-location ico"></button>
                </div>
            </div>
          </div>
          <div class="row">
              <div class=" input-group-lg search my-2 col-lg-6">
                <select class="form-control" placeholder=""  style="border-radius: 10px;" />
                	<option>Mark this position as</option>
                	<option>Pickup</option>
                </select>
            </div>
            <div class=" input-group-lg search my-2 col-lg-6">
            <button class="rate">FIND EATRIES</button>
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>