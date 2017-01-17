<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/adminto_1.4/dark_menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2016 22:26:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <title>BluePen</title>


    <!-- App css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />

    <script>
       /* Initialization of data from database */
       var userGroupList = [];
       <?php for ($i = 0; $i < count($groups); $i++): ?>
       userGroupList.push("<?php echo $groups[$i]["group_name"]; ?>");
   <?php endfor; ?>
</script>

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- <script src="assets/js/modernizr.min.js"></script> -->





    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index-2.html" class="logo"><span>Blue<span>Pen</span></span><i class="zmdi zmdi-layers"></i></a>
                </div>

                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>

                        </ul>

                        <!-- Right(Notification and Searchbox -->


                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">



                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul>
                            <li class="text-muted menu-title"><strong>Modules</strong></li>

                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/user" class="waves-effect active"><i class="zmdi zmdi-odnoklassniki"></i> <span> User Management </span> </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/group" class="waves-effect "><i class="zmdi zmdi-accounts"></i> <span> Group Management </span> </a>
                            </li>

                            <li class="text-muted menu-title"><strong>Site Management</strong></li>

                            <li>
                                <a href="view-sites.html" class="waves-effect"><i class="zmdi zmdi-globe-alt"></i> <span> View Sites </span> </a>
                            </li>
                            <li>
                                <a href="edit-homepage.html" class="waves-effect"><i class="zmdi zmdi-home"></i> <span> Edit Homepage </span> </a>
                            </li>
                            <li>
                                <a href="site.html" class="waves-effect"><i class="zmdi zmdi-upload"></i> <span> Monthly Upload </span> </a>
                            </li>





                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                       <div class="row">
                        <div class="col-sm-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="m-b-30">
                                                <button id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="editable-responsive table-responsive">
                                        <table class="table table-striped" id="datatable-editable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Email</th>

                                                    <th>Monitor</th>
                                                    <th>Competitive</th>
                                                    <th>Site Source</th>

                                                    <th>Status</th>

                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php for ($i = 0; $i < count($users); $i++): ?>
                                                 <?php $user = $users[$i]; ?>
                                                 <tr class="gradeC">
                                                    <td><?php echo $user["first_name"]; ?></td>
                                                    <td><?php echo $user["last_name"]; ?></td>
                                                    <td><?php echo $user["user_name"]; ?></td>
                                                    <td><?php echo $user["password"]; ?></td>
                                                    <td><?php echo $user["email"]; ?></td>

                                                    <td>
                                                      <?php
                                                      $monitoring_group = $user["monitoring_group"];
                                                      echo $monitoring_group ? $monitoring_group : " ";
                                                      ?>
                                                  </td>
                                                  <td>
                                                      <?php
                                                      $competitive_group = $user["competitive_group"];
                                                      echo $competitive_group ? $competitive_group : " ";
                                                      ?>
                                                  </td>
                                                  <td>
                                                      <?php
                                                      $site_sourcing_group = $user["site_sourcing_group"];
                                                      echo $site_sourcing_group ? $site_sourcing_group : " ";
                                                      ?>
                                                      <td>
                                                      <?php echo $user['status'];
                                                      ; ?></td>
                                                  </td>
                                                  <td class="actions">
                                                    <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                    <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                    <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        <?php endfor; ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end: panel body -->

                    </div> <!-- end panel -->
                </div> <!-- end col-->
            </div>


        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        2016 © Adminto.
    </footer>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->




</div>
<!-- END wrapper -->





<!-- jQuery  -->



</body>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>

<script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>


<script src="<?php echo base_url(); ?>assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

<!-- Problem with mobile... -->




<!-- init -->
<script src="<?php echo base_url(); ?>assets/pages/datatables.editable.init.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>


</html>
