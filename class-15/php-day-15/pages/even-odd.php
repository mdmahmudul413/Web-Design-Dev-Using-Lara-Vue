<?php include 'header.php'; ?>

    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Even Odd
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row mb-3">
                                    <label for="number" class="col-md-3">Number</label>
                                    <div class="col-md-9 ">
                                        <input id="number" type="number" name="number" class="form-control" placeholder="Enter a Number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="result" class="col-md-3">Result</label>
                                    <div class="col-md-9 ">
                                        <textarea id="result" class="form-control" readonly><?php echo $evenOddRes;?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9 ">
                                        <input type="submit" name="even_odd_btn" class="btn btn-outline-danger">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'?>