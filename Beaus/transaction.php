<?php include_once('header_1.php'); ?>
<section role="main" class="main inner-page profile listing transaction">
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class=" container">
                    <div class="">
                        <header class="row align-items-center">
                            <div class="title col-auto mr-auto">Transaction History</div>
                            <div class="col-md-auto ml-auto">Balance: $8.00</div>
                        </header>
                    </div>
                    <hr/>
                    <div class="col-md-12 ">
                        <div class="row transaction-subrow">
                            <div class="title col-md-5 datefilter">
                                <input id="dateFilter"  type="text" name="datefilter" value="" />
                            </div>
                            <div class="col-sm-auto mr-sm-auto mt-2 col-md-7 text-right">
                                <button type="button" class="btn btn-outline-primary">Download Invoices (zip)</button>
                                <button type="button" class="btn btn-primary">Download CSV</button>
                            </div>
                        </div>
                    </div>

                    <div class=" mt-3 filters2">
                        <div class="row align-items-center">
                            <div class="title col-12 ">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-primary">Go</button>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="col-12">
                        <div class="row">
                            <table class="t-table" >
                                <thead>
                                    <tr><th>Date</th>
                                        <th>Type</th>
                                        <th width="50%">Description</th>
                                        <th>Client</th>
                                        <th class="align-right">Amount/<br>Balance</th>
                                        <th class="align-right">Ref ID</th>
                                    </tr></thead>
                                <tbody>
                                    <tr class="tpending">
                                        <td>Sep 23, 2018</td>
                                        <td>Service Fee</td>
                                        <td>Service Fee - Fixed Price - Ref ID 199499360</td>
                                        <td>Rahul Kumar</td>
                                        <td class="align-right">
                                            ($5.00)<br>
                                            <small>Pending</small>
                                        </td>
                                        <td class="align-right">
                                            <a class=""  href="#">199499361</a>
                                        </td>
                                    </tr>
                                    <tr class="tpending">
                                        <td>Sep 23, 2018</td>
                                        <td>Fixed Price</td>
                                        <td>Invoice for Looking for an HTML, CSS5, Bootstrap Designer to design a website: Milestone 3 - Forms Pages</td>
                                        <td>Rahul Kumar</td>
                                        <td class="align-right">
                                            $25.00<br>
                                            <small>Pending</small>
                                        </td>
                                        <td class="align-right">
                                            <a class=""  href="#">199499361</a>
                                        </td>
                                    </tr>
                                    <tr class="tpending">
                                        <td>Sep 22, 2018</td>
                                        <td>Service Fee</td>
                                        <td>Service Fee - Fixed Price - Ref ID 198944455</td>
                                        <td>Rahul Kumar</td>
                                        <td class="align-right">
                                            ($3.00)<br>
                                            <small>Pending</small></td>
                                        <td class="align-right">
                                            <a class=""  href="#">199499361</a>
                                        </td>
                                    </tr>
                                    <tr class="tpending">
                                        <td>Sep 22, 2018</td>
                                        <td>Fixed Price</td>
                                        <td>Invoice for Looking for an HTML, CSS5, Bootstrap Designer to design a website: Milestone 2 - Inner Web Pages</td>
                                        <td>Rahul Kumar</td>
                                        <td class="align-right">
                                            $15.00<br>
                                            <small>Pending</small>
                                        </td>
                                        <td class="align-right">
                                            <a class=""  href="#">199499361</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="nowrap">Sep 16, 2018</td>
                                        <td>Service Fee</td>
                                        <td>Service Fee - Fixed Price - Ref ID 198450335</td>
                                        <td>Rahul Kumar</td>
                                        <td class="align-right">
                                            ($2.00)<br>
                                            <small>$8.00</small>
                                        </td>
                                        <td class="align-right">
                                            <a class=""  href="#">199499361</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="nowrap">Sep 16, 2018</td>
                                        <td>Fixed Price</td>
                                        <td>Invoice for Looking for an HTML, CSS5, Bootstrap Designer to design a website: Milestone 1 - Home Page Mock up</td>
                                        <td>Rahul Kumar</td>
                                        <td class="align-right">
                                            $10.00<br>
                                            <small>$10.00</small>
                                        </td>
                                        <td class="align-right">
                                            <a class=""  href="#">199499361</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-12 table-below">
                                <div class="row">
                                    <div class="ml-auto col-md-4 align-right">
                                        <div class="caption">
                                            <strong>Statement Period</strong>
                                            <p id="display">
                                                Aug 19, 2018        to        Sep 18, 2018      </p>
                                        </div>
                                        <table class="">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Beginning Balance</strong></td>
                                                    <td><strong>$0.00</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Total Debits</td>
                                                    <td>$12.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Credits</td>
                                                    <td>$20.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Change</td>
                                                    <td>$8.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Ending Balance</strong></td>
                                                    <td><strong>$8.00</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
</section>

<?php include_once('footer_1.php'); ?>