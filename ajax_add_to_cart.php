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
// $cartArray = [
//     'product_id' :&gt;$productID,
//     'qty' :&gt; $productQty,
//     'product_name' :&gt;$fetchProduct['product_name'],
//     'product_price' :&gt; $fetchProduct['price'],
//     'total_price' :&gt; $calculateTotalPrice,
//     'product_img' :&gt;$fetchProduct['img']
// ];

// if(isset($_SESSION['cart_items']) &amp;&amp; !empty($_SESSION['cart_items']))
// {
//     $productIDs = [];
//     foreach($_SESSION['cart_items'] as $cartKey =&gt; $cartItem)
//     {
//         $productIDs[] = $cartItem['product_id'];
//         if($cartItem['product_id'] == $productID)
//         {
//             $_SESSION['cart_items'][$cartKey]['qty'] = $productQty;
//             $_SESSION['cart_items'][$cartKey]['total_price'] = $calculateTotalPrice;
//             break;
//         }
//     }

//     if(!in_array($productID,$productIDs))
//     {
//         $_SESSION['cart_items'][]= $cartArray;
//     }

//     $successMsg = true;
    
// }
// else
// {
//     $_SESSION['cart_items'][]= $cartArray;
//     $successMsg = true;
// }

// // $data  = print_r( $_POST);
// // json_decode($data);
// // $data = array(
// //     'product_id' => $_POST['product_id'],
// //     'quantity' => $_POST['quantity'],
// //     'variation_id' => $_POST['variation_id'],
// //     'variation' => $_POST['variation'],
// //     'cart_item_data' => $_POST['cart_item_data']
// // );


?>