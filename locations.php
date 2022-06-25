<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php include 'components/header.php'; ?>
    
<style type="text/css">
  .bg{

    background-color: #F2F2FF;
  }
</style>

</head>
<body>
<?php include 'components/navigation.php'; ?>
    
    <div class="container">
       <span style="float: right; color:#9C3DFD; float: right; font-size: 15px;font-weight: 700; "><a data-toggle="modal" href="#modal1" class="voucher-btn">Add new Vouchers</a></span>  
        <h2 style="font-size: 25px; color: #001746; font-weight:700">Notifications</h2>
       <!--  <div>
              <div class="row" style="margin-left:-80px;" >
        <div class="col-lg-9" >
            <h2 style="font-size: 18px; color: #001746;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h2>
        </div>
        
        <div class="col-lg-3">
            <h2 style="font-size: 18px; color: #001746;"><b style="font-weight:400;">Expiry:</b> 10-FEB-2022</h2>
        </div>
            
        </div> -->
        
<br>
<div class="shadow-none p-3  bg mb-5 rounded">
  <span style="color:#001746; font-weight: 600;">Home  </span>
 

<p style="float: right;">
<span style="color:#9C3DFD; font-weight: 700">Edit</span> 
</p>


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