<link rel="stylesheet" type="text/css" href="slider.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<style type="text/css">
    .slick-slider .element{
  height:300px;
  width:300px;
  background-color:#000;
  color:#fff;
  border-radius:5px;
  display:inline-block;
  margin:0px 10px;
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-pack:center;
      -ms-flex-pack:center;
          justify-content:center;
  -webkit-box-align:center;
      -ms-flex-align:center;
          align-items:center;
  font-size:20px;
}
.slick-slider .slick-disabled {
  opacity : 0; 
  pointer-events:none;
}
</style>
<section>
    <div class="container custom">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Category</h3>
            </div>
            <div class="col-6 text-right">
            </div>
            <div class="col-12">
                <div id="carouselExample2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
            for ($x = 0; $x < count($categorychunk); $x++) {
                    ?>
                        <div class="carousel-item <?php if($x==0){echo "active";}?>">
                            <div class="row">  
                                <?php


            for ($y = 0; $y < count($categorychunk[$x]); $y++) {
                    ?>
                                  <div class="col-sm-4">
                <a href="testingdsmoasoas" style= "  color: blue; text-decoration: none;">
                <div class="mainText" style ="background-image :url('<?php echo $categorychunk[$x][$y]->category_image ?>');">
                  <div class="overlay">
                    <div class="textEnd">
                  <h2 class="mainText-heading"><?php echo $categorychunk[$x][$y]->category_name ?></h2>
                  </div>
                  </div>
                </div> </a>
            </div>       
        <?php } ?>
                           </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <a class="btn btn-primary mb-3 mr-1 left" href="#carouselExample2" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left"></i>
                </a>
                <a class="btn btn-primary mb-3 right" href="#carouselExample2" role="button" data-slide="next">
                    <i class="fa fa-chevron-right"></i>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<br>
<br>
<section>
<div class="slick-slider">
  <div class="element element-1">1</div>
  <div class="element element-2">2</div>
  <div class="element element-3">3</div>
  <div class="element element-4">4</div>
  <div class="element element-5">4</div>
  <div class="element element-6">6</div>
  <div class="element element-7">7</div>
  <div class="element element-8">8</div>
  <div class="element element-9">9</div>
  <div class="element element-10">10</div>
</div>
</section>