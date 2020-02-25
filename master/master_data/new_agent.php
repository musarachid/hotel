<?php
include "../../config/connection.php";
?>
 

 
 <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <br>
                                
                                <button  class=" title-5 m-b-35 au-btn au-btn-icon au-btn--blue au-btn--small" onclick="location.reload()">
                                            <i class="zmdi zmdi-menu"></i>view records</button>
                                
                                <div class="table-responsive table-responsive-data">

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-header">New Stand</div>
                                    <div class="card-body">
                                        <form action="#/" onsubmit="new_agent();return false;"  method="post" novalidate="novalidate">
                                           

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Agent Username</label>
                                                <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Agent Password</label>
                                                <input id="pass" name="pass" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Agent Contact</label>
                                                <input id="tel" name="tel" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save New Agent</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>