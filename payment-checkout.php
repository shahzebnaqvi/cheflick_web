<?php include 'components/header.php' ; ?>
<?php include 'components/navigation.php' ; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-2">
                    <img src="images/pizza.png" class="card-image">
                </div>
                <div class="col-sm-3">
                    <h3 class="card-heading">King Burgers</h3>
                    <span class="icon-style"><i class="fas fa-star"> 4.9 </i> (124 ratings)</span><br>
                    <span class="icon-style">Burger <span class="dot"> . </span> Western Foods</span><br>
                    <span class="icon-style"><i class="fas fa-map-marker"></i> No 03, 4th lane, Newyork</span>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-4 justify-content-center">
                <p class="card-tex">Distance: <span class="bold"> 2.3km away</span></p>
                <p class="card-tex">Order Type: <span class="bold"> SameDay</span></p>
                <p class="card-tex">Ntn no: 6546546515614561</p>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-sm-12">
                <div class="myCard cardMy">
                 
                    

                    
    <?php		
    $total_quantity =0;
    $total_price=0;
    foreach ($_SESSION["cart_item"] as $item){

        $item_price = $item["quantity"]*$item["price"];
		?>
				


                <div class="row">
                       <div class="col-sm-1">
                           <img class="heiImage" src="<?php echo $item["image"]; ?>" />
                       </div>
                       <div class="col-sm-3 ml-3">
                           <p class="pizzaHead"><?php echo $item["name"]; ?></p>
                            <span class="purpleBack add<?php echo$item["code"];?>"><i class="fas fa-plus" ></i></span>

                             <script type="text/javascript">
                    $(document).ready(function(){
                    $(".add<?php echo$item["code"];?>").click(function(){
                    // alert("kk");

                    $.ajax({
                        
                    type:'post',
                    url : 'ajax_cart_increase_decrease.php',
                    data : {
                     dish_id : <?php echo$item["code"];?>, 
                     type: 'add',
                    },

                    success:function(result){
                      // alert(result);
                      $('.cardMy').html(result);
                    }});});});
                    

                    $(document).ready(function(){
                    $(".subtract<?php echo$item["code"];?>").click(function(){
                    // alert("kk");

                    $.ajax({
                        
                    type:'post',
                    url : 'ajax_cart_increase_decrease.php',
                    data : {
                     dish_id : <?php echo$item["code"];?>, 
                     type: 'subtract',
                    },

                    success:function(result){
                      // alert(result);
                      $('.cardMy').html(result);
                    //   $("#lastid").empty().load('html #start');
                      $("#lastid").load(location.href+" #lastid","");
                    //   $('#lastid').load(' #lastid',"")

                    }});});});
                  </script>




                           <span class="simpleBack"><?php echo $item["quantity"]; ?></span>
                           <span class="purpleBack subtract<?php echo$item["code"];?>"><i class="fas fa-minus"></i></span>
                       </div>

                       
                       <div class="col-sm-2 d-flex align-items-center">
                           <p class="serveText">Serves 2</p>
                       </div>
                       <div class="col-sm-5 d-flex justify-content-end align-items-center">
                           <del class="strikeText">Rs.250</del><p class="serveText">Rs <?php echo $item["price"]; ?></p>
                       </div>
                       
                   </div>
                   

                   <div class="dropdown-divider"></div>


                      







                
                
                
                





				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
                
		}
		?>


                </div>
            </div>
            </div>
            <div class="row my-4">
            <div class="col-sm-4">
                <p class="card-tex"><span class="bold">Contactless Delivery</span></p>
                <p class="card-tex"><span class="bold">Order ID: </span><span class="orderText">65365</span></p>
            </div>
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <a data-toggle="modal" href="#modal1" class="voucher-btn">Apply Voucher</a><br>
                <p class="card-text"><span class="bold">Powered By: </span><span class="orderText">Sofrah</span></p>
            </div>
            </div>
        </div>
        <?php 
         include "components/payment.php";
         ?>
        <?php 
        // include "components/wait.php"; 
        ?>
        <?php 
        // include "components/thankyou.php";
         ?>
    </div>
    <div class="row">
        <div class="col-lg-12 my-2">                    
            <button class="rate" onclick="document.location='checkout.php'">Proceed</button>
        </div>
    </div>
</div>
<!--Voucher Modal-->
<?php include 'components/modals/map-modal.php'; ?>
<?php include 'components/modals/voucher-modal.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>