<?php
session_start();
// echo "sasas";
// print_r( $_POST);
$productID=$_POST['dish_id'];
$productQty=1;
$productPrice=$_POST['dish_price'];
$productName=$_POST['dish_name'];
$productImg=$_POST['dish_image'];



    if(!empty($productQty)) {
    $itemArray = array($productID=>array('name'=>$productName, 'code'=>$productID, 'quantity'=>$productQty, 'price'=>$productPrice, 'image'=>$productImg));
		
    if(!empty($_SESSION["cart_item"])) {
        if(in_array($productID,array_keys($_SESSION["cart_item"]))) {
            foreach($_SESSION["cart_item"] as $k => $v) {
                    if($productID == $k) {
                        if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                            $_SESSION["cart_item"][$k]["quantity"] = 0;
                        }
                        $_SESSION["cart_item"][$k]["quantity"] += $productQty;
                    }
            }
        } else {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
    } else {
        $_SESSION["cart_item"] = $itemArray;
    }}
    
    
    
    
    
    // print_r( $_SESSION["cart_item"]);






    // show in drop down 





?>
    

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
                       <div class="col-sm-5">
                           <p class="pizzaHead"><?php echo $item["name"]; ?></p>
                           <div class="cartBtn"><span class="purpleBack"><i class="fas fa-plus"></i></span>
                           <span class="simpleBack"><?php echo $item["quantity"]; ?></span>
                           <span class="purpleBack"><i class="fas fa-minus"></i></span>
                       </div></div>
                       <div class="col-sm-2 d-flex align-items-center">
                           <p class="serveText">Serves 2</p>
                       </div>
                       <div class="col-sm-4 d-flex justify-content-end align-items-center">
                           <del class="strikeText">Rs.250</del><p class="serveText">Rs.<?php echo $item["price"]; ?></p>
                       </div>
                   </div>
                   <div class="dropdown-divider"></div>








                
                
                
                





				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
                
		}
		?>




                   <div class="row">
                     
                      <a class="rate2 mt-4 text-center" style="color:white" href="payment-checkout.php">Checkout</a>
                   </div>



