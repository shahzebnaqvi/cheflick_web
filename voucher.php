<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php include 'components/header.php'; ?>
    

</head>
<body>
<?php include 'components/navigation.php'; ?>
    
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
                </div>
            </div>
            <div class="row my-4">
                <div class="col-sm-12">
                <div class="mapCust" style="width: 100%">
          <iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe>
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
        <div class="col-md-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                        <p class="card-tex"><span class="bold">Delivery Address</span></p>
                        <p class="card-tex">653 Saba Avenuue<br>DHA, Phase 7.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                        <p class="card-tex"><span class="bold">Order Status</span></p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-3">
                       <div class="iconImg"><img src="images/001-cooking.svg"></div>
                       <p class="orderBold">Preparing Your Food</p>
                    </div>
                    <div class="col-sm-1">
                       <i class="rightArrow fas fa-arrow-right"></i>
                    </div>
                    <div class="col-sm-3">
                       <div class="iconImg2"><img src="images/003-pizza-box.svg"></div>
                       <p class="orderBold">Order Picked Up</p>
                    </div>
                    <div class="col-sm-1">
                       <i class="rightArrow fas fa-arrow-right"></i>
                    </div>
                    <div class="col-sm-3">
                       <div class="iconImg2"><img src="images/002-delivery-man.svg"></div>
                       <p class="orderBold">Rider On The Way</p>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                    <p class="card-textt">Delivery ETA</p>
                    <p class="timebold">25</p>
                    <p class="card-textt">Minutes Remaining</p>
                    </div>
                        </div>
                        </div>
                        
                <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="card-texttt">Sub Total</p>
                            <p class="card-texttt">Discount</p>
                            <p class="card-texttt">GST</p>
                            <p class="card-texttt">Total</p>
                        </div>
                        <div class="col-sm-6 text-end">
                            <p class="bold">Rs.6800</p>
                            <p class="bold">Rs.500</p>
                            <p class="bold">Rs.800</p>
                            <p class="bold">Rs.8100</p>
                        </div>
                    </div>
                    </div>
                        </div>
                        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button class="rate">Support</button>
        </div>
        <div class="col-lg-6">
            <button class="rate">Home</button>
        </div>
    </div>
</div>
<!-- Modal Map-->
<!--Voucher Modal-->
<?php include 'components/modals/map-modal.php'; ?>
<?php include 'components/modals/voucher-modal.php'; ?>
</body>
</html>