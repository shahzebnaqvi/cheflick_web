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
<section>
<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="12000">
        <div class="carousel-inner row w-100 mx-auto flex-nowrap" role="listbox">
            <div class="carousel-item col-md-3 active">
                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400/000/fff?text=1" alt="slide 1">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 7">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</section>