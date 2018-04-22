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
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
    <!--  material wizard -->
    <link href="<?php echo base_url(); ?>assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <?=$sidebar?>
        <div class="main-panel">
            <?=$topnav?>
            <div class="content">
                <!--   Big container   -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <!--      Wizard container        -->
                            <div class="wizard-container">
                                <div class="card wizard-card" data-color="purple" id="wizardProfile" style="margin-top: -75px;">
                                    <form action="" method="">
                                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                                        <div class="wizard-header">
                                            <h3 class="wizard-title">
                                               Build Your Profile
                                            </h3>
                                            <h5>This information will let us know more about you.</h5>
                                        </div>
                                        <div class="wizard-navigation">
                                            <ul>
                                                <li><a href="#about" data-toggle="tab">About</a></li>
                                                <li><a href="#account" data-toggle="tab">Account</a></li>
                                                <li><a href="#address" data-toggle="tab">Address</a></li>
                                            </ul>
                                        </div>

                                        <div class="tab-content">
                                            <div class="tab-pane" id="about">
                                              <div class="row">
                                                    <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                                    <div class="col-sm-4 col-sm-offset-1">
                                                        <div class="picture-container">
                                                            <div class="picture">
                                                                <img src="<?php echo base_url(); ?>assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                                <input type="file" id="wizard-picture">
                                                            </div>
                                                            <h6>Choose Picture</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">face</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                              <label class="control-label">First Name <small>(required)</small></label>
                                                              <input name="firstname" type="text" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">record_voice_over</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                              <label class="control-label">Last Name <small>(required)</small></label>
                                                              <input name="lastname" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">email</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Email <small>(required)</small></label>
                                                                <input name="email" type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="account">
                                                <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                                                <div class="row">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-checkbox">
                                                                <input type="checkbox" name="jobb" value="Design">
                                                                <div class="icon">
                                                                    <i class="fa fa-pencil"></i>
                                                                </div>
                                                                <h6>Design</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-checkbox">
                                                                <input type="checkbox" name="jobb" value="Code">
                                                                <div class="icon">
                                                                    <i class="fa fa-terminal"></i>
                                                                </div>
                                                                <h6>Code</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="choice" data-toggle="wizard-checkbox">
                                                                <input type="checkbox" name="jobb" value="Develop">
                                                                <div class="icon">
                                                                    <i class="fa fa-laptop"></i>
                                                                </div>
                                                                <h6>Develop</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="address">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                                    </div>
                                                    <div class="col-sm-7 col-sm-offset-1">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Street Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Street Number</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5 col-sm-offset-1">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">City</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Country</label>
                                                            <select name="country" class="form-control">
                                                                <option disabled="" selected=""></option>
                                                                <option value="Afghanistan"> Afghanistan </option>
                                                                <option value="Albania"> Albania </option>
                                                                <option value="Algeria"> Algeria </option>
                                                                <option value="American Samoa"> American Samoa </option>
                                                                <option value="Andorra"> Andorra </option>
                                                                <option value="Angola"> Angola </option>
                                                                <option value="Anguilla"> Anguilla </option>
                                                                <option value="Antarctica"> Antarctica </option>
                                                                <option value="...">...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-footer">
                                            <div class="pull-right">
                                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
                                                <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
                                            </div>

                                            <div class="pull-left">
                                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- wizard container -->
                        </div>
                    </div><!-- end row -->
                </div> <!--  big container -->
            </div>
            <?=$footer?>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>

<!--  Plugin for the Wizard -->
<script src="<?php echo base_url(); ?>assets/js/material-bootstrap-wizard.js"></script>
<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<!-- jquery bootstrap? -->
<script src="<?php echo base_url(); ?>assets/js/jquery.bootstrap.js" type="text/javascript"></script>

</html>