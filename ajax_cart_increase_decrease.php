                
    <?php	
    session_start();
    $total_quantity =0;
    $total_price=0;
    // $productQty=1;
    $dishid= $_POST['dish_id']." ";
    if($_POST['type']=='add'){
    
    if(!empty($_SESSION["cart_item"])) {
        if(in_array($dishid,array_keys($_SESSION["cart_item"]))) {

    foreach($_SESSION["cart_item"] as $k => $v) {
     
  
        if($dishid == $k) {
          
            $_SESSION["cart_item"][$dishid]["quantity"] += 1;

        }
}
}
}}
elseif($_POST['type']=='subtract'){

    if(!empty($_SESSION["cart_item"])) {
        if(in_array($dishid,array_keys($_SESSION["cart_item"]))) {

    foreach($_SESSION["cart_item"] as $k => $v) {
     
  
        if($dishid == $k) {
            if($_SESSION["cart_item"][$dishid]["quantity"]==1){
                unset($_SESSION["cart_item"][$k]);				

            }
            else{
            $_SESSION["cart_item"][$dishid]["quantity"] -= 1;}

        }
}
}
}
}

if($_SESSION["cart_item"]!=null){

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
                      $("#price").load(location.href + " #price");

                    }});});
                    

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
                      $("#price").load(location.href + " #price");

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
    }
		?>