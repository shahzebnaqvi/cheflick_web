<!DOCTYPE html>
<html>
<?php include 'components/header.php'; ?>

<body>
<?php include 'components/navigation.php'; ?>
 
  
				    <div class="col-md-12" style="margin-top:50px;">
						<h2 style="color:#001746; font-size:30px;"><b>Payement Details</b></h2>
            </div>
         <br>
         <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " style="margin-left:60px;">
            <div class="card shadow ">
                <div class="card-body card-p" style="background-color:#F7F7F7; ">
                    <h4 class="card-title">Cash/Card Delivery Details</h4>
                    <hr></hr>
                    <img src="images/visa.PNG" style="width:65px; height:38px;"/>
                    <p class="card-text" style="margin-top:-30px; margin-left:80px; font-weight:500;">*************42415</p>
                    <hr>
                    <div class="col col-xs-4 ">
                            
                            <a class="btn" style="background-color:tranparent; border:2px solid #9C3DFD; border-radius: 25px; color:#9C3DFD;" href="#" role="button">Delete</a>
                            </div>
                </div>
               
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
            <div class="card shadow">
                <div class="card-body card-p" style="background-color:#F7F7F7; ">
                    <h4 class="card-title">Cash/Card Delivery Details</h4>
                    <hr></hr>
                    <img src="images/visa.PNG" style="width:65px; height:38px;"/>
                    <p class="card-text" style="margin-top:-30px; margin-left:80px; font-weight:500;">*************42415</p>
                    <hr>
                    <div class="col col-xs-4 ">
                            
                            <a class="btn" style="background-color:tranparent; border:2px solid #9C3DFD; border-radius: 25px; color:#9C3DFD;" href="#" role="button">Delete</a>
                            </div>
                </div>
                
            </div>
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