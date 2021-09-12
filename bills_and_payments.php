<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
    require_once 'helpers/functions.php';

    $query = "SELECT * FROM fees WHERE user_id = :id AND academic_year = :a_year";

    $statement = $con->prepare($query);

    $statement->execute(
        array(
            ":id"       => $_SESSION['user_id'],
            ":a_year"   => fetchCurrentAcademicYear($con),
        )
    );

    $result = $statement->fetch();

    $total_transactions_made = fetchFeeTransactionsTotalPrize($con);

?>
<div id="content">
    <div class="container">
        <br />
        <div style="color: red">
            <p style="color:red; text-align:center"></p>
        </div>
        <div class="contain-callouts-tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#bill" data-toggle="tab">Bill</a></li>
                <!-- <li class=""><a href="#transactions" data-toggle="tab">Transactions</a></li>
                <li class=""><a href="#feepayments" data-toggle="tab">Other Payments</a></li> -->
                <li class="pull-right"><a id="btnPayment" href="https://pay.knust.edu.gh" target="_blank"
                        class="btnPayment"><strong>Make Payment</strong></a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active in" id="bill">

                    <div class="contain-bill">
                        <div class="table-responsive">
                            <h5 style="text-align:center"><b>Fee Schedule for <?= fetchCurrentAcademicYearByName($con); ?> Academic Year</b></h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Fee Item</th>
                                        <th style="text-align:right">Amount(GHS)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tuition Fees</td>
                                        <td style="text-align:right"><?= $result['fee_amount']?></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Amount</th>
                                        <th style="text-align:right"><?= $result['fee_amount']?></th>
                                    </tr>
                                </tfoot>
                            </table>

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Amount Paid</td>
                                        <td style="text-align:right"><?= $total_transactions_made; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Previous Balance</td>
                                        <td style="text-align:right">0.00</td>
                                    </tr>
                                    <tr style="background-color:#18CD78;color:white;font-weight:bold;font-size:18px">
                                        <td>Amount You Owe</td>
                                        <td style="text-align:right;"><?= $result['fee_amount'] - $total_transactions_made;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="grid_14">
                        <div class="grid_12">
                            <a href="#">
                                <div id="proceed"><strong>Download</strong></div>
                            </a>
                            <a href="dashboard.php" id="linkprevious">
                                <div id="previous"><strong>Previous</strong></div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <br>
        <br>
        <br>
        <br>
        <!-- javascript -->
        <script>
            $(function () {
                $('.nav-tabs a:first').tab('show');
            });

            $(".selector").on("tabsactivate", function (event, ui) {});
            // $('#transactions').load('/students/Fees/FeeTransactions');
            // $('#feepayments').load('dashboard.php');
            $("#previouslink").click(function (event) {
                history.go(2);
            });
        </script>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="/students/Scripts/bootstrap.min.js"></script>

    </div>
</div>
<?php
    include_once 'partials/footer.php';
?>