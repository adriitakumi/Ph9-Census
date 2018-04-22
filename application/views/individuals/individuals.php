<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
    <!--  DataTables  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <?=$sidebar?>
        <div class="main-panel">
            <?=$topnav?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo site_url('individuals/add') ?>" class="btn btn-info btn-round pull-right"><i class="material-icons">add</i> Add<div class="ripple-container"></div></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <!-- <a href="#pablo" class="pull-right btn btn-info btn-round"><i class="material-icons">add</i><div class="ripple-container"></div></a> -->                                    
                                    <h4 class="title">Bills</h4>                                    
                                    <p class="category">List of bills information</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="table-bills" class="table">
                                        <thead class="text-primary">
                                            <th>Invoice No</th>
                                            <th>Company/Person</th>
                                            <th>Service</th>
                                            <th>Month-Year</th>
                                            <th>Amount</th>
                                            <th>Date Paid</th>
                                            <th>Paid</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>123456789</td>
                                                <td>Hakeem Polistico</td>
                                                <td>House Rent</td>
                                                <td>January-2018</td>
                                                <td>5 000</td>
                                                <td>January 15, 2018</td>
                                                <td><i class="material-icons text-success">check</i></td>
                                            </tr>
                                            <tr>
                                                <td>123456788</td>
                                                <td>Maynilad</td>
                                                <td>Water</td>
                                                <td>January-2018</td>
                                                <td> 500</td>
                                                <td>January 15, 2018</td>
                                                <td><i class="material-icons text-success">check</i></td>
                                            </tr>
                                            <tr>
                                                <td>123456777</td>
                                                <td>Meralco</td>
                                                <td>Electricity</td>
                                                <td>March-2018</td>
                                                <td>5 000</td>
                                                <td>January 15, 2018</td>
                                                <td><i class="material-icons text-danger">clear</i></td>
                                            </tr>
                                            <tr>
                                                <td>123456777</td>
                                                <td>Meralco</td>
                                                <td>Electricity</td>
                                                <td>March-2018</td>
                                                <td>5 000</td>
                                                <td>January 15, 2018</td>
                                                <td><i class="material-icons text-danger">clear</i></td>
                                            </tr>
                                            <tr>
                                                <td>123456777</td>
                                                <td>Meralco</td>
                                                <td>Electricity</td>
                                                <td>March-2018</td>
                                                <td>5 000</td>
                                                <td>January 15, 2018</td>
                                                <td><i class="material-icons text-danger">clear</i></td>
                                            </tr>
                                            <tr>
                                                <td>123456777</td>
                                                <td>Meralco</td>
                                                <td>Electricity</td>
                                                <td>March-2018</td>
                                                <td>5 000</td>
                                                <td>January 15, 2018</td>
                                                <td><i class="material-icons text-danger">clear</i></td>
                                            </tr>
                                            <tr>
                                                <td>123456777</td>
                                                <td>Meralco</td>
                                                <td>Electricity</td>
                                                <td>March-2018</td>
                                                <td>5 000</td>
                                                <td>January 15, 2018</td>
                                                <td><i class="material-icons text-danger">clear</i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?=$footer?>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script>
  $('#table-bills').DataTable();
</script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>