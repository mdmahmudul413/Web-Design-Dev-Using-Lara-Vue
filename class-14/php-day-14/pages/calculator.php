<?php include 'header.php';?>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Calculator
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row mb-3">
                                    <label class="col-md-3" for="first_number">First Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="first_number" name="first_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" for="last_number">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="last_number" name="last_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" for="choice">Choice</label>
                                    <div class="col-md-9">
                                        <label class="mx-2" for="choice"><input type="radio" value="+" id="choice" name="choice"/> +  </label>
                                        <label class="mx-2" for="choice"><input type="radio" value="-" id="choice" name="choice"/> -  </label>
                                        <label class="mx-2" for="choice"><input type="radio" value="*" id="choice" name="choice"/> *  </label>
                                        <label class="mx-2" for="choice"><input type="radio" value="/" id="choice" name="choice"/> /  </label>
                                        <label class="mx-2" for="choice"><input type="radio" value="%" id="choice" name="choice"/> %  </label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3" for="result">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $result;?>" id="result"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn_calculator" class="btn btn-sm btn-outline-success" value="Calculate">
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