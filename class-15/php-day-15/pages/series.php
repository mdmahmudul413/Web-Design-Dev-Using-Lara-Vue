<?php include 'header.php'; ?>

    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Series Program
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row mb-3">
                                    <label for="starting_number" class="col-md-3">Starting Number</label>
                                    <div class="col-md-9 ">
                                        <input id="starting_number" type="number" name="starting_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="ending_number" class="col-md-3">Ending Number</label>
                                    <div class="col-md-9 ">
                                        <input id="ending_number" type="number" name="ending_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="choice" class="col-md-3">Your Choice</label>
                                    <div class="col-md-9 ">
                                        <label><input id="choice" type="radio" name="choice" value="none" checked> None </label>
                                        <label><input id="choice" type="radio" name="choice" value="even"> Even </label>
                                        <label><input id="choice" type="radio" name="choice" value="odd"> Odd </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="result" class="col-md-3">Result</label>
                                    <div class="col-md-9 ">
                                        <textarea id="result" class="form-control" rows="5" readonly><?php echo $seriesResult; ?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9 ">
                                        <input type="submit" value="Calculate" name="submit_series_btn" class="btn btn-outline-danger">
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