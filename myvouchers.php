<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php include 'components/header.php'; ?>
    

</head>
<body>
<?php include 'components/navigation.php'; ?>
    <?php
 $baserurl = 'https://cheflick.code7labs.com/';

$api_url = 'https://api.cheflick.net/api/user/get-vouchers';



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
// print_r($response_data);
// All user data exists in 'data' object
$user_data = $response_data->data;
$active_voucher = $user_data->active_voucher;
// print_r($active_voucher);

// };
// $tab = $user_data->kitchen_tabs;

?>


    
				<div class="row text-center" style="margin-top:20px;">
				    <div class="col-md-12">
						<h2 style="color:#001746;"><b>My Vouchers</b></h2>
					
					
           
            
            </div>



            <?php
            for ($x = 0; $x < count($active_voucher); $x++) {

             ?>
             <div class="row" style="margin-top:50px; margin-left:0px;">
                 
            <div class="col-lg-12">
               
               <b style="font-size: 18px; color: #001746;"><?php echo $active_voucher[$x]->voucherName ;?>
               
               <b style="font-size: 18px; color: #001746; margin-left:240px;">
                   
               <b style="font-size: 18px; color: #001746; margin-left:180px; margin-top:15px;">Rs <?php echo $active_voucher[$x]->price ;?>
                <br> <small style="float:left; margin-left:210px;">code:<?php echo $active_voucher[$x]->voucherCode ;?></small>
                
                 <small style="float: right; margin-top: -45px; margin-right: 207px;">Expiry: <?php echo $active_voucher[$x]->voucherExpirty ;?></small>
            </div>



            <div>
              
            </div>
		</div>


            <?php } ?>




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