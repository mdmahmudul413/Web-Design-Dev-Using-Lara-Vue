<?php include 'header.php';?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($categoryProducts as $product){ ?>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100">
                            <img src="assets/img/<?php echo $product['image'];?>" height="250" alt="">
                            <div class="card-body">
                                <h3><?php echo $product['name'];?></h3>
                                <p>Tk. <?php echo $product['price']?></p>
                                <hr/>
                                <a href="action.php?page=detail&&id=<?php echo $product['id'];?>" class="btn btn-outline-danger">Details</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>