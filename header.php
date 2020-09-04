<?php
admin::checkSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Maka Automotive Works And Assessors Loss Assessors And Valuers</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />



    <link rel="shortcut icon" href="assets/images/maka-logo.png">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/maka-logo.png">

    <!-- plugins -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/fuzone.css" rel="stylesheet" type="text/css" />

    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />




    <!-- App css -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/fuzone.css" rel="stylesheet" type="text/css" />-->

    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />




</head>


<body>
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Image Logo -->
                        <a href="dashboard.php" class="logo">
                            <img src="assets/images/logo-sm.png" alt="" height="32" class="logo-small">
                            <img src="assets/images/maka-logo.png" alt="" height="20" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">


                        <ul class="list-inline float-right mb-0">
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">

                                    <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>

                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">



                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-meter"></i>Dashboard</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="dashboard">Home</a>
                                    </li>
                                    <li>
                                        <a href="details">Company Details</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Users</a>
                                        <ul class="submenu">
                                            <li><a href="addusers">Add User</a></li>
                                            <li><a href="department">Department</a></li>
                                            <li><a href="roles">Roles</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-briefcase"></i>Valuation</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="addvaluation">New</a></li>
                                            <li><a href="valuations">View</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-broadcast"></i>Assessment</a>
                                <ul class="submenu">
                                    <li><a href="assessment">New</a></li>
                                    <li><a href="assessmentlist">View</a></li>

                                </ul>
                            </li>



                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-view-thumb"></i>Re-assessments</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">New</a>

                                    </li>
                                    <!--<li >
                                        <a href="#"  data-toggle="modal" data-target=".bs-example-modal-center">Neew</a>
                                        
                                    </li>-->
                                    <li>
                                        <a href="reassessmentlist">View</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-fridge"></i>Clients</a>
                                <ul class="submenu">


                                    <li>
                                        <a href="accounts">Accounts</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-fridge"></i>Finance</a>
                                <ul class="submenu">


                                    <li>
                                        <a href="amanager">Accounts Manager</a> 
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#debitAccountModal">Debit Account</a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#creditAccountModal">Credit Account</a>
                                    </li>
                                    <li>
                                        <a href="#">View Transactions</a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#accountTrackingModal">Account Tracking</a>
                                    </li>
                                    <li>
                                        <a href="#">Find Account</a>
                                    </li>
                                </ul>
                            </li>



                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-copy"></i>Reports</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#insuranceValuationModal">Insurance Valuation</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#generalValuationModal">General Valuation</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#accidentAssessmentModal">Accident Assessment</a></li>
                                            <!--<li><a href="#" data-toggle="modal" data-target="#mechanicalReportsModal">Mechanical Reports</a></li>-->
                                            <li><a href="outputTodayActivity" target="_blank" >Today Activity</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#activityOvertimeModal">Activity-Overtime</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#accountsListOvertimeModal">Accounts List-Overtime</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#accountTrackingModal">Account Tracking</a></li>
                                            <li><a href="outputtodaytransactions" target="_blank">Today Transactions</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#transactionsOvertimeModal">Transactions-Overtime</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#transactionsByTypeModal">Transactions-By Type</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#cashierDailySummaryModal">Cashier Daily Summary</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#systemAuditTrailModal">System Audit Trail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>




                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="reassessment" autocomplete="off" method="post">


                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Re-Assessement Create New</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="regno">Reg. No</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


        <div class="modal fade" id="invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="invoice" autocomplete="off" method="post">


                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Invoice</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="accountName">Account Name</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="accountName" class="typeahead" autocomplete="off" name="account_name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!--finance modal-->

        <!-- debit Account Modal -->
        <div class="modal fade" id="debitAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="#" autocomplete="off" method="post">


                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="debitAccountModal">Debit Account</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            
                            <div class="col"><label class="col-lg-12 col-form-label" for="simpleinput">Account Name</label>
                                    <div class="col-lg-12">
                                        <select class="form-control custom-select" required name="instructed_by">
                                            <option selected disabled>Select</option>

                                            <?php
                                                
                                                $rows = account::accounts();
                                                
                                                if($rows){
                                                    foreach($rows as $row){
                                                        
                                                        $selected = "";
                                                        
                                                     
                                                       
                                                        $name = $row['acc_name'];
                                                        $id = $row['acc_id'];
                                                        
                                                        if($ass_acc_id == $id)
                                                            $selected = "selected";
                                                        
                                                        echo '<option value="'.$id.'" '.$selected.'>'.$name.'</option>';
                                                        
                                                    }
                                                }
                                                
                                                ?>

                                        </select>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- credit Account Modal -->
        <div class="modal fade" id="creditAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="#" autocomplete="off" method="post">


                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="creditAccountModal">Credit Account</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!--<div class="form-group">
                                <label>Before Date</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" required>
                            </div>
                            <div class="form-group">
                                <label>After Date</label>-->
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <!--<input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" required>
                            </div>-->
                            
                            <div class="col"><label class="col-lg-12 col-form-label" for="simpleinput"></label>
                                    <div class="col-lg-12">
                                        <select class="form-control custom-select" required name="instructed_by">
                                            <option selected disabled></option>

                                            <?php
                                                
                                                $rows = account::accounts();
                                                
                                                if($rows){
                                                    foreach($rows as $row){
                                                        
                                                        $selected = "";
                                                        
                                                     
                                                       
                                                        $name = $row['acc_name'];
                                                        $id = $row['acc_id'];
                                                        
                                                        if($ass_acc_id == $id)
                                                            $selected = "selected";
                                                        
                                                        echo '<option value="'.$id.'" '.$selected.'>'.$name.'</option>';
                                                        
                                                    }
                                                }
                                                
                                                ?>

                                        </select>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- Account Tracking Modal -->
        <div class="modal fade" id="accountTrackingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputaccounttracking" autocomplete="off" method="post" target="_blank">


                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="accountTrackingModal">Account Tracking</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">

                                <div class="col"><label class="col-lg-12 col-form-label" for="simpleinput">Account Name</label>
                                    <div class="col-lg-12">
                                        <select class="form-control custom-select" required name="instructed_by">
                                            <option selected disabled>Select</option>

                                            <?php
                                                
                                                $rows = account::accounts();
                                                
                                                if($rows){
                                                    foreach($rows as $row){
                                                        
                                                        $selected = "";
                                                        
                                                     
                                                       
                                                        $name = $row['acc_name'];
                                                        $id = $row['acc_id'];
                                                        
                                                        if($ass_acc_id == $id)
                                                            $selected = "selected";
                                                        
                                                        echo '<option value="'.$id.'" '.$selected.'>'.$name.'</option>';
                                                        
                                                    }
                                                }
                                                
                                                ?>

                                        </select>
                                    </div>
                                </div>
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


        <!--reports modal-->




        <!-- Insurance Valuation Modal -->
        <div class="modal fade" id="insuranceValuationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="output" autocomplete="off" method="post" target="_blank" >

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="insuranceValuationModal">Valuation Reports</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Leave blank to display all valuation reports</label>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- General Valuation Modal -->
        <div class="modal fade" id="generalValuationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputgeneralvaluations" autocomplete="off" method="post" >

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="generalValuationModal">General Valuation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Leave blank to display all valuation reports</label>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- Accident Assessment Modal -->
        <div class="modal fade" id="accidentAssessmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputaccidentassessment" autocomplete="off" method="post">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="accidentAssessmentModal">Accident Assessment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Leave blank to display all valuation reports</label>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!-- today Activity Modal -->
        <div class="modal fade" id="todayActivityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="#" autocomplete="off" method="post">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="todayActivityModal">Today Activity</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Leave blank to display all activity </label>
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!-- activity Overtime Modal -->
        <div class="modal fade" id="activityOvertimeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputActivitiesOvertime" autocomplete="off" method="post">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="activityOvertimeModal">Activity Overtime</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Leave blank to display all activities.</label>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        

        <!-- accountsListOvertime Modal -->
        <div class="modal fade" id="accountsListOvertimeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputaccountlistovertime" autocomplete="off" method="post" target="_blank">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="accountsListOvertimeModal">accounts List Overtime</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Leave blank to display all values</label>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal ">Close</button>
                            <button type="submit" class="btn btn-primary" data-target="_blank">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!-- account Tracking Modal -->
        <div class="modal fade" id="accountTrackingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="#" autocomplete="off" method="post" target="_blank">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="accountTrackingModal">Account Tracking</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" required>
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


        <!-- transactions Overtime Modal -->
        <div class="modal fade" id="transactionsOvertimeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputtranovertime" autocomplete="off" method="post" target="_blank">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="transactionsOvertimeModal">transactions Overtime </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Leave empty to display all </label>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!-- transactions ByType  Modal -->
        <div class="modal fade" id="transactionsByTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputtbt" autocomplete="off" method="post" target="_blank">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="transactionsByTypeModal">transactions By Type </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="col">
                                <label>Leave blank to print all transactoins by type</label>
                                <label class="col-lg-12 col-form-label" for="simpleinput">Type</label>
                                <div class="col-lg-12">
                                    <select class="form-control custom-select"  name="instructed_by">
                                        <option selected disabled>Select</option>

                                        <option value="">Debits(DR)</option>
                                        <option value="">Credits(CR)</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!-- cashier Daily Summary Modal -->
        <div class="modal fade" id="cashierDailySummaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputcds" autocomplete="off" method="post" target="_blank">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cashierDailySummaryModal">Cashier Daily Summary</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col">
                                <label>Leave blank to print all cashier daily summary</label>
                                <label class="col-lg-12 col-form-label" for="simpleinput">Type</label>
                                <div class="col-lg-12">
                                    <select class="form-control custom-select"  name="instructed_by">
                                        <option selected disabled>Select</option>

                                        <option value="">Debits(DR)</option>
                                        <option value="">Credits(CR)</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!-- System Audit Trail Modal -->
        <div class="modal fade" id="systemAuditTrailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="outputsat" autocomplete="off" method="post" target="_blank">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="systemAuditTrailModal">Activity Log Report</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label>Leave blank to print all System Audit Trail</label>
                                <label class="col-lg-12 col-form-label" for="simpleinput">User Id</label>
                                <div class="col-lg-12">
                                    <select class="form-control custom-select"  name="instructed_by">
                                        <option selected disabled>Select</option>

                                        <option value="">Debits(DR)</option>
                                        <option value="">Credits(CR)</option>

                                    </select>
                                </div>
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="before_date" >
                            </div>
                            <div class="form-group">
                                <label>To</label>
                                <!--<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="regno" class="typeahead" autocomplete="off" name="regno">-->
                                <input type="text" class="form-control datepicker" id="simpleinput" id="datepicker" value="" name="after_date" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary push-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
