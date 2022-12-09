<?php include 'header.php'; ?>

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
                                    <label for="first_number" class="col-md-3">First Number</label>
                                    <div class="col-md-9 ">
                                        <input id="first_number" type="number" name="first_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="second_number" class="col-md-3">Second Number</label>
                                    <div class="col-md-9 ">
                                        <input id="second_number" value="djfaos" type="number" name="second_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="choice" class="col-md-3">Choice</label>
                                    <div class="col-md-9 ">
                                        <label class="mx-3"><input id="choice" type="radio" name="choice" value="+" checked> + </label>
                                        <label class="mx-3"><input id="choice" type="radio" name="choice" value="-"> - </label>
                                        <label class="mx-3"><input id="choice" type="radio" name="choice" value="*"> x </label>
                                        <label class="mx-3"><input id="choice" type="radio" name="choice" value="/"> / </label>
                                        <label class="mx-3"><input id="choice" type="radio" name="choice" value="%"> % </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="result" class="col-md-3">Result</label>
                                    <div class="col-md-9 ">
                                        <input id="result" value="<?php echo $calculation; ?>" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9 ">
                                        <input type="submit" name="submit_btn" value="Calculate" class="btn btn-outline-danger">
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