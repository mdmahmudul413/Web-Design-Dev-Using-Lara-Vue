<?php include "header.php";?>
<div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2200">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/s1.jpg" class="w-100" alt="">
            <div class="carousel-caption">
                <h3>This is title one</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda beatae corporis ducimus illo iusto libero rem tempore? Atque consectetur doloribus illo ipsam laboriosam nulla praesentium quaerat sequi veniam vitae?</p>
                <button type="button" class="btn btn-success">Read More</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/s2.jpg" class="w-100" alt="">
            <div class="carousel-caption">
                <h3>This is title two</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda beatae corporis ducimus illo iusto libero rem tempore? Atque consectetur doloribus illo ipsam laboriosam nulla praesentium quaerat sequi veniam vitae?</p>
                <button type="button" class="btn btn-success">Read More</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/s3.jpg" class="w-100" alt="">
            <div class="carousel-caption">
                <h3>This is title three</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda beatae corporis ducimus illo iusto libero rem tempore? Atque consectetur doloribus illo ipsam laboriosam nulla praesentium quaerat sequi veniam vitae?</p>
                <button type="button" class="btn btn-success">Read More</button>
            </div>
        </div>
    </div>

    <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#slider" class="carousel-control-next" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){ ?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="assets/img/<?php echo $product['image'];?>" height="300" alt="">
                        <div class="card-body">
                            <h3><?php echo $product['name'];?></h3>
                            <p>Tk. <?php echo $product['price'];?></p>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $product['id']?>" class="btn btn-outline-danger">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
