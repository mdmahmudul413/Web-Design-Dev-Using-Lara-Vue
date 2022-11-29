<?php include 'header.php';?>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Enter First and Last Name
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row mb-3">
                                    <label class="col-md-3" for="first_name">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="first_name" name="first_name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" for="last_name">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="last_name" name="last_name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" for="full_name">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo $result;?>" class="form-control" id="full_name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn_full_name" class="btn btn-sm btn-outline-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>