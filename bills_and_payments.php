<?php
    include_once 'partials/navbar.php';
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
                <li class=""><a href="#transactions" data-toggle="tab">Transactions</a></li>
                <li class=""><a href="#feepayments" data-toggle="tab">Other Payments</a></li>
                <li class="pull-right"><a id="btnPayment" href="https://pay.knust.edu.gh" target="_blank"
                        class="btnPayment"><strong>Make Payment</strong></a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active in" id="bill">

                    <div class="contain-bill">
                        <div class="table-responsive">
                            <h5 style="text-align:center"><b>Fee Schedule for 2020/2021 Academic Year</b></h5>
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
                                        <td style="text-align:right">2750.00</td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Amount</th>
                                        <th style="text-align:right">2750.00</th>
                                    </tr>
                                </tfoot>
                            </table>

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Amount Paid</td>
                                        <td style="text-align:right">2750.00</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Balance</td>
                                        <td style="text-align:right">0.00</td>
                                    </tr>
                                    <tr style="background-color:#18CD78;color:white;font-weight:bold;font-size:18px">
                                        <td>Amount You Owe</td>
                                        <td style="text-align:right;">0.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="grid_14">
                        <div class="grid_12">
                            <a href="/students/Fees/DownloadFeeSchbyStudentProg">
                                <div id="proceed"><strong>Download</strong></div>
                            </a>
                            <a href="" id="linkprevious">
                                <div id="previous"><strong>Previous</strong></div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="transactions">
                    <style>
                        .finID {
                            /*font-size:13px;*/
                        }

                        .finID a:hover {
                            text-decoration: underline;
                            /*font-size:15px;*/
                            /*color:red;*/
                        }
                    </style>
                    <div class="contain-transactions">
                        <div class="col-md-12 contain-transaction-detail">
                            <div class="transaction-detail1">
                                <span><small>Academic Year: 2019/2020</small></span> |
                                <span><small>Semester 1, Year 1</small></span> |
                                <span><small>Date: 30 Aug 2019</small></span>
                            </div>

                            <div class="transaction-detail2">
                                <div class="col-md-2">
                                    <span class="t-detail">Type: </span>
                                    <span class="t-detail2">BILL</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Narative: </span>
                                    <span class="t-detail2">Tuition Fees</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Amount: </span>
                                    <span class="t-detail2">GHS -2250</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Balance: </span>
                                    <span class="t-detail2">GHS -2,250.00 </span>

                                </div>
                                <div class="col-md-1" style="padding-right:0px">

                                </div>

                            </div>
                            <br />
                            <div class="container"></div>
                        </div>
                        <br />
                        <div class="col-md-12 contain-transaction-detail">
                            <div class="transaction-detail1">
                                <span><small>Academic Year: 2019/2020</small></span> |
                                <span><small>Semester 1, Year 1</small></span> |
                                <span><small>Date: 26 Jul 2019</small></span>
                            </div>

                            <div class="transaction-detail2">
                                <div class="col-md-2">
                                    <span class="t-detail">Type: </span>
                                    <span class="t-detail2">PAYMENT</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Narative: </span>
                                    <span class="t-detail2">ONLINE: Fees paid by Theophilus Akwasi Addo LUMOR</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Amount: </span>
                                    <span class="t-detail2">GHS 1000</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Balance: </span>
                                    <span class="t-detail2">GHS -1,250.00 </span>

                                </div>
                                <div class="col-md-1" style="padding-right:0px">
                                    <span class="t-detail2 finID">
                                        <a target="_blank" class="" style=" font-size: 11px;"
                                            href="/students/Fees/PrintStudentFeeReceipt?FINANCEID=1527485">Print
                                            Receipt</a>
                                    </span>

                                </div>


                            </div>
                            <br />
                            <div class="container"></div>
                        </div>
                        <br />
                        <div class="col-md-12 contain-transaction-detail">
                            <div class="transaction-detail1">
                                <span><small>Academic Year: 2019/2020</small></span> |
                                <span><small>Semester 1, Year 1</small></span> |
                                <span><small>Date: 22 Aug 2019</small></span>
                            </div>

                            <div class="transaction-detail2">
                                <div class="col-md-2">
                                    <span class="t-detail">Type: </span>
                                    <span class="t-detail2">PAYMENT</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Narative: </span>
                                    <span class="t-detail2">ONLINE: Fees paid by Theophilus Akwasi Addo LUMOR</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Amount: </span>
                                    <span class="t-detail2">GHS 1250</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Balance: </span>
                                    <span class="t-detail2">GHS 0.00 </span>

                                </div>
                                <div class="col-md-1" style="padding-right:0px">
                                    <span class="t-detail2 finID">
                                        <a target="_blank" class="" style=" font-size: 11px;"
                                            href="/students/Fees/PrintStudentFeeReceipt?FINANCEID=1545353">Print
                                            Receipt</a>
                                    </span>

                                </div>


                            </div>
                            <br />
                            <div class="container"></div>
                        </div>
                        <br />
                        <div class="col-md-12 contain-transaction-detail">
                            <div class="transaction-detail1">
                                <span><small>Academic Year: 2020/2021</small></span> |
                                <span><small>Semester 1, Year 2</small></span> |
                                <span><small>Date: 01 Jul 2020</small></span>
                            </div>

                            <div class="transaction-detail2">
                                <div class="col-md-2">
                                    <span class="t-detail">Type: </span>
                                    <span class="t-detail2">BILL</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Narative: </span>
                                    <span class="t-detail2">Tuition Fees</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Amount: </span>
                                    <span class="t-detail2">GHS -2750</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Balance: </span>
                                    <span class="t-detail2">GHS -2,750.00 </span>

                                </div>
                                <div class="col-md-1" style="padding-right:0px">

                                </div>


                            </div>
                            <br />
                            <div class="container"></div>
                        </div>
                        <br />
                        <div class="col-md-12 contain-transaction-detail">
                            <div class="transaction-detail1">
                                <span><small>Academic Year: 2020/2021</small></span> |
                                <span><small>Semester 1, Year 2</small></span> |
                                <span><small>Date: 10 Dec 2020</small></span>
                            </div>

                            <div class="transaction-detail2">
                                <div class="col-md-2">
                                    <span class="t-detail">Type: </span>
                                    <span class="t-detail2">PAYMENT</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Narative: </span>
                                    <span class="t-detail2">ONLINE: 20680372 ACADEMIC Theophilus Akwasi Addo LUMOR
                                        1</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Amount: </span>
                                    <span class="t-detail2">GHS 2750</span>
                                </div>

                                <div class="col-md-3">
                                    <span class="t-detail">Balance: </span>
                                    <span class="t-detail2">GHS 0.00 </span>

                                </div>
                                <div class="col-md-1" style="padding-right:0px">
                                    <span class="t-detail2 finID">
                                        <a target="_blank" class="" style=" font-size: 11px;"
                                            href="/students/Fees/PrintStudentFeeReceipt?FINANCEID=1926479">Print
                                            Receipt</a>
                                    </span>

                                </div>


                            </div>
                            <br />
                            <div class="container"></div>
                        </div>
                        <br />

                        <div class="grid_14">
                            <div class="grid_12">


                                <a href="" id="linkprevious">
                                    <div id="previous"><strong>Previous</strong></div>
                                </a>
                                <a href="/students/Fees/DownloadFeeSlip">
                                    <div id="proceed"><strong>Download Details<i
                                                class="glyphicon glyphicon-save"></i></strong></div>
                                </a>
                            </div>
                        </div>
                        <br />

                    </div>
                    <script>
                        $("#previous").click(function (event) {
                            history.go(-1);
                        });
                    </script>

                </div>

                <div class="tab-pane fade" id="feepayments">



                    <style>
                        .finID {
                            /*font-size:13px;*/
                        }

                        .finID a:hover {
                            text-decoration: underline;
                            /*font-size:15px;*/
                            /*color:red;*/
                        }
                    </style>



                    <div>
                        <h5 style="color:darkred">You don't have any fee transactions</h5>
                    </div>
                    <br />
                    <div class="grid_14">
                        <div class="grid_12">



                        </div>
                    </div>
                    <script>
                        $("#previous2").click(function (event) {
                            history.g(-1);
                        });
                    </script>

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
            $('#transactions').load('/students/Fees/FeeTransactions');
            $('#feepayments').load('/students/Fees/FeePayments');
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