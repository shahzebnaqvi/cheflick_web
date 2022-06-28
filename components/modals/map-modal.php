<?php
$iframe= ' <iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
  </iframe>';
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- <script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
            document.test.submit();
        }
    }
</script> -->


<script type='text/javascript'>


            $(document).ready(function(){
                $('#location').on('input',function(){
                    
                    var office = $('#location').val();
                    // alert(office);
                    $.ajax({
                    type:'post',
                    url : 'components/modals/map.php',
                    data : { sql : office},
                    success:function(result){
                      $('.order_summary').html(result);
                    	// alert(result);
                    }})
                })
            })
</script>
<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div style="width: 100%">
<!--           
          <iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe> -->


<div class="order_summary" >
  <?php echo $iframe;?>
 </div>


          <div class="row">
              <div class="input-group input-group-lg location my-2 col-lg-12">
              
              
              <!-- <input type="text" class="form-control" placeholder="Pakistan"  style="border-radius: 10px;border-color:#E1E1E1;" /> -->
              
              <!-- <form name="test" action="#" method="POST">
              <input type="text" name="search" />
              </form> -->





              <input  class="form-control" placeholder="Pakistan"  style="border-radius: 10px;border-color:#E1E1E1;" type="text" name="location" id ="location" />

              







                <div class="input-group-btn">
                    <button class="fas fa-location ico"></button>
                </div>
            </div>
          </div>
          <div class="row">
              <div class=" input-group-lg location my-2 col-lg-6">
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

