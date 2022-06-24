<!DOCTYPE html>
<html>
<head>
<title>My Order</title>

<?php include 'components/header.php'; ?>
    

</head>
<body>
<?php
 $baserurl = 'https://cheflick.code7labs.com/';

$api_url = 'https://api.cheflick.net/api/user/past-order';



$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: Bearer ".$_SESSION['remember_token']."" // i.e. An iPad 
  )
);
$context = stream_context_create($options);
$json_data = file_get_contents($api_url, false, $context);

$response_data = json_decode($json_data);

$past_order = $response_data->past_order;
$active_order = $response_data->active_order;

?>
<?php include 'components/navigation.php'; ?>
    

				<div class="row text-center" style="margin-top:20px;">
				    <div class="col-md-12">
						<h2 style="color:#001746;"><b>My Orders</b></h2>
					
					
					    <br>
			<button class="btn btn-primary" style="background-color:#9C3DFD; border-radius:15px; width:135px;">All</button>
            <button class="btn btn-primary" style="background-color:#9C3DFD; border-radius:15px;  width:135px;">Active</button>
            <button class="btn btn-primary" style="background-color:#9C3DFD; border-radius:15px;  width:135px;">Post</button>
            <button class="btn btn-primary" style="background-color:#9C3DFD; border-radius:15px;  width:135px;">Sheduled</button>
           
            
            </div>
             <div class="row" style="margin-top:50px; margin-left:50px;">
            <div class="col-lg-12">
                <img src="images/icon.PNG" width="53" height="53" class="rounded-circle"> 
               <b style="font-size: 18px; color: #001746;">Junaid Ahmed 
               <b style="font-size: 18px; color: #001746; margin-left:240px;">In Process
               <b style="font-size: 18px; color: #001746; margin-left:140px;">Rs 3000
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
<script type="text/javascript">
    function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</body>
</html>