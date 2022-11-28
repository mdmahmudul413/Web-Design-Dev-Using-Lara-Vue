<?php include "header.php";?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="assets/img/<?php echo $singleProduct['image'];?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h3><?php echo $singleProduct['name'];?></h3>
                    <p><?php echo $singleProduct['description'];?></p>
                    <hr/>
                    <p>Tk. <?php echo $singleProduct['price'];?></p>

                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php";?>