<?php include 'header.php'; ?>

    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Letter & Word Counter
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row mb-3">
                                    <label for="string" class="col-md-3">Enter Sentence</label>
                                    <div class="col-md-9 ">
                                        <input id="string" type="text" name="string" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="result" class="col-md-3">Result</label>
                                    <div class="col-md-9 ">
                                        <textarea id="result" class="form-control text-start" rows="5" readonly><?php
                                            echo $result['givenString'] . "\n";
                                            echo $result['words'] . "\n";
                                            echo $result['letters'] . "\n";
                                            ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9 ">
                                        <input type="submit" value="Result" name="string_btn" class="btn btn-outline-danger">
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