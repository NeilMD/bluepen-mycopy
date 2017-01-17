<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <title>BluePen</title>

        <link href="<?php echo base_url(); ?>assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.2/css/fixedColumns.dataTables.min.css">


            <!-- <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
            <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css"> -->

        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/custom.site.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
		<script stc="https://raw.githubusercontent.com/SheetJS/js-xlsx/master/shim.js"></script>
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

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title"></h4>
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
                                <a href="<?php echo base_url(); ?>index.php/admin/user" class="waves-effect"><i class="zmdi zmdi-odnoklassniki"></i> <span> User Management </span> </a>
                            </li>

                             <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/group" class="waves-effect "><i class="zmdi zmdi-accounts"></i> <span> Group Management </span> </a>
                            </li>

                            <li class="text-muted menu-title"><strong>Site Management</strong></li>

                            <li>
                                <a href="" class="waves-effect"><i class="zmdi zmdi-globe-alt"></i> <span> Upload Sites </span> </a>
                            </li>
                            <li>
                                <a href="edit-homepage.html" class="waves-effect"><i class="zmdi zmdi-home"></i> <span> Edit Homepage </span> </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/admin/upload" class="waves-effect active"><i class="zmdi zmdi-upload"></i> <span> Monthly Upload </span> </a>
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
                         <div class="row ">
                            <div class="col-sm-12 ">
                                <div class="panel">
                                    <div class="panel-body">
                                    <div class="row">
                                        <div class="dropdown pull-right">
                                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Reset Filter</a></li>
                                            </ul>
                                        </div>
                                        <h4 class="header-title m-t-0 m-b-30"> Filter</h4>

                                            <div class="form-group">
                                                <label id='label-date'  for="date" class="control-label col-sm-2">Date</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input id="dateField" readonly="readonly" type="text" class="form-control datepicker-custom" name="date"   >
                                                        
                                                    </div><!-- input-group -->
                                                </div>
                                                <br/>

                                            </div>
                                            <div class="form-group">
                                            <br/>
                                                <label id='label-date' class="control-label col-sm-2">File</label>
                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                       <input type="file" id="fileField" class="    w-md m-b-5" />

                                                    </div><!-- input-group -->
                                                </div>
                                                <br/>

                                            </div>
                                            <div class="form-group">
                                            <br/>

                                                <div class="col-sm-12">
                                                    <div style="text-align: center">
                                                        <button type="button" class="confirmButton  btn text-center btn-primary waves-effect w-md waves-light m-b-5">Confirm</button>

                                                    </div><!-- input-group -->
                                                </div>
                                                <br/>

                                            </div>



                                
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel">
                                    <div class="panel-body">

                                       


                                   
                                            <table class="table table-striped" id="datatable-editable"  >
                                                <thead>
                                                    <tr>
                                                        <th class="text-left" style="width:60px">Site Name</th>
                                                        <th class="text-center">Month</th>
                                                        <th class="text-center">Year</th>
                                                        <th class="text-center">Province</th>
                                                        <th class="text-center">City</th>
                                                        <th class="text-center">Street</th>
                                                        <th class="text-center">Location</th>
                                                        <th class="text-center">Supplier</th>
                                                        <th class="text-center">Supp. Contact</th>
                                                        <th class="text-center">Supp. Email</th>
                                                        <th class="text-center">Height</th>
                                                        <th class="text-center">Width</th>
                                                        <th class="text-center">Avg. Width</th>
                                                        <th class="text-center">Avg. Height</th>
                                                        <th class="text-center">Cost</th>
                                                        <th class="text-center">CPSF</th>
                                                        <th class="text-center">Avg. CPSF</th>
                                                        <th class="text-center">CPM</th>
                                                        <th class="text-center">Avg. CPM</th>
                                                        <th class="text-center">Formal</th>
                                                        <th class="text-center">X</th>
                                                        <th class="text-center">Y</th>
                                                        <th class="text-center">Traffic Count</th>
                                                        <th class="text-center">Score</th>
                                                        <th class="text-center">Net Audience</th>
                                                        <th class="text-center">Remarks</th>
                                                        <th class="text-center">Material</th>
                                                        <th class="text-center">Category</th>
                                                        <th class="text-center">Sub Category</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="previewBody">

                                                  
                                                         


                                                         
                                                  
                                                </tbody>
                                            </table>
                                              <div class="col-sm-12">
                                                    <div style="text-align: center">
                                                        <button type="button" id="uploadButton" class="confirmButton  btn text-center btn-primary waves-effect w-md waves-light m-b-5">Upload</button>

                                                    </div><!-- input-group -->
                                                </div>
                                       
                                    </div>
                                    <!-- end: panel body -->

                                </div> <!-- end panel -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end Row -->





                    </div> <!-- container -->

                </div> <!-- content -->

              
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
    </body>


    <div id="con-close-modal" class="modal fade     " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-lg">
                <div class="modal-header  ">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title full-width-modalLabel">Add</h4>
                </div>
                <div class="modal-body">

                    <br/>
                    <h4 class="form-label-custom">Site Details </h4>
                    <hr>
                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Site Name</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-8">
                            <label for="field-1" class="control-label col-sm-2 text-right">Location</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Province</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">City</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">Street</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>



                    </div>

                    <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="field-1" class="control-label col-sm-3 text-right">Rental Cost</label>

                                <div class="col-sm-9" id="location-div">
                                    <input type="text" class="form-control" id="field-1"   >

                                </div>

                            </div>

                            <div class="form-group col-sm-8">
                                <label for="field-1" class="control-label col-sm-2 text-right">Format</label>

                                <div class="col-sm-10" id="location-div">
                                    <input type="text" class="form-control" id="field-1"   >

                                </div>

                            </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">CPSF</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-left">Ave. CPSF</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">CPM</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-left">Ave. CPM</label>

                            <div class="col-sm-10" id="location-div">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Traffic Count</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">Score</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Net. Audience.</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">X</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">Y</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>



                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="field-1" class="control-label col-sm-1 text-right">Remarks</label>

                            <div class="col-sm-11">
                                <textarea id="textarea" class="form-control" maxlength="225" rows="2" ></textarea>

                            </div>
                        </div>

                    </div>


                    <br/>
                    <h4 class="form-label-custom">Supplier Details </h4>
                    <hr>

                    <div class="row">

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Supplier Name</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-3 text-right">Contact</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="field-1" class="control-label col-sm-2 text-right">Email</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>


                    </div>

                    <br/>
                    <h4 class="form-label-custom">Material Details </h4>
                    <hr>

                    <div class="row">

                        <div class="form-group col-sm-12">
                            <label for="field-1" class="control-label col-sm-1 text-right">Material</label>

                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">Category</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="field-1" class="control-label col-sm-2 text-right">Sub Category</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-1" class="control-label col-sm-4 text-right">Height</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-1" class="control-label col-sm-4 text-right">Ave H.</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="field-1" class="control-label col-sm-4 text-right">Width</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="field-1" class="control-label col-sm-4 text-right">Ave. W</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="field-1"   >

                            </div>
                        </div>




                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
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


    <script src="<?php echo base_url(); ?>assets/plugins/custombox/dist/custombox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/custombox/dist/legacy.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

        <!-- <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fixedColumns.min.js"></script>

    <!-- init -->
    <!-- <script src="<?php echo base_url(); ?>assets/pages/datatables.editable.site.init.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/custom.site.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Problem with mobile... --><!--
     -->

   
    <script type="text/javascript">

      var result = [];
    
    
       $(document).ready(function(){
            $("button#uploadButton").click(function() {
              console.log(result);
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/adminoperations/uploadsites",
                type: "post",
                dataType: "text",
                data: {site_list: result, time: $("#dateField").val()},
                success: function(data) {
                  console.log(data);
                }
              });
            });
            var table = $("table").DataTable({
                autoWidth: false,
            
            scrollX:        "1500px",   
            scrollCollapse: true,
            paging:         true,
              columnDefs: [
                { width: '160px', targets: 0 },
                { width: '100px', targets: 1 },
                { width: '100px', targets: 2 },
                { width: '100px', targets: 3 },
                { width: '100px', targets: 4 },
                { width: '100px', targets: 5 },
                { width: '100px', targets: 6 },
                { width: '100px', targets: 7 },
                { width: '100px', targets: 8 },
                { width: '100px', targets: 9 },
                { width: '100px', targets: 10 },
                { width: '100px', targets: 11 },
                { width: '100px', targets: 12 },
                { width: '100px', targets: 13 },
                { width: '100px', targets: 14 },
                { width: '100px', targets: 15 },
                { width: '100px', targets: 16 },
                { width: '100px', targets: 17 },
                { width: '100px', targets: 18 },
                { width: '100px', targets: 19 },
                { width: '100px', targets: 20 },
                { width: '100px', targets: 21 },
                { width: '100px', targets: 22 },
                { width: '100px', targets: 23 },
                { width: '100px', targets: 24 },
                { width: '100px', targets: 25 },
                { width: '100px', targets: 26 },
                { width: '100px', targets: 27 },
               { width: '100px', targets: 28 },
                
            ],
            fixedColumns:{
                leftColumns: 1
            },
            ordering: true

            
             
            });
            
           

            $("button.confirmButton").click(function() {
              var date = $("#dateField").val();
              if (date.trim() == "") {
                return;
              }
              var reader = new FileReader();
              reader.onload = function(e) {
                var data = e.target.result;
                var workbook = XLSX.read(data, {type : 'binary'});
    						var worksheet = workbook.Sheets["MANUAL INPUT"];
                var rowctr = 4;
    						while (worksheet["A" + rowctr] !== undefined) {
    							var row = Object();
    							row.site_ref = worksheet["A" + rowctr];
                  row.province = worksheet["B" + rowctr];
    							row.city = worksheet["C" + rowctr];
    							row.street = worksheet["D" + rowctr];
    							row.location = worksheet["E" + rowctr];
    							row.supplier = worksheet["F" + rowctr];
    							row.supplier_contact = worksheet["G" + rowctr];
    							row.supplier_email = worksheet["H" + rowctr];
    							row.height = worksheet["I" + rowctr];
    							row.width = worksheet["J" + rowctr];
    							row.avg_height = worksheet["K" + rowctr];
    							row.avg_width = worksheet["L" + rowctr];
    							row.cost = worksheet["M" + rowctr];
    							row.CPSF = worksheet["N" + rowctr];
    							row.avg_CPSF = worksheet["O" + rowctr];
    							row.CPSM = worksheet["P" + rowctr];
    							row.avg_CPSM = worksheet["Q" + rowctr];
    							row.format = worksheet["R" + rowctr];
    							row.material = worksheet["S" + rowctr];
    							row.category = worksheet["T" + rowctr];
    							row.subcategory = worksheet["U" + rowctr];
    							row.x = worksheet["V" + rowctr];
    							row.y = worksheet["W" + rowctr];
    							row.traffic_count = worksheet["X" + rowctr];
    							row.score = worksheet["Y" + rowctr];
    							row.net_audience = worksheet["Z" + rowctr];
                  row.remarks = worksheet["AK" + rowctr];

                  for (var property in row) {
                    if (row.hasOwnProperty(property)) {
                      if (row[property] == undefined) {
                        row[property] = "";
                      }
                      else {
                        row[property] = row[property].v;
                      }
                    }
                  }

                  rowctr++;
    							result.push(row);
    						}


                var builder = "";

                for (var i = 0; i < result.length; i++) {
                  console.log(result[i]);
                  builder += "<tr class=\"gradeC\">";
                  builder += "<td class=\"text-left\">" + result[i].site_ref + "</td>";
                  builder += "<td class=\"text-center\">" + "" + "</td>";
                  builder += "<td class=\"text-center\">" + "" + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].province + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].city + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].street + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].location + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].supplier + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].supplier_contact + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].supplier_email + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].height + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].width + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].avg_width + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].avg_height + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].cost + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].CPSF + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].avg_CPSF + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].CPSM + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].avg_CPSM + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].format + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].x + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].y + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].traffic_count + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].score + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].net_audience + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].remarks + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].material + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].category + "</td>";
                  builder += "<td class=\"text-center\">" + result[i].subcategory + "</td>";
                  builder += "</tr>";
                  var insert = [ result[i].site_ref,"","",result[i].province,result[i].city,result[i].street,result[i].location,result[i].supplier,result[i].supplier_contact,result[i].supplier_email,result[i].height,result[i].width,result[i].avg_height,result[i].avg_width,result[i].cost,result[i].CPSF,result[i].avg_CPSF,result[i].CPSM,result[i].avg_CPSM,result[i].format,result[i].x,result[i].y,result[i].traffic_count,result[i].score,result[i].net_audience,result[i].remarks,result[i].material,result[i].category,result[i].subcategory ];




                   var rowNode = table.row.add(insert).node();


                    $(rowNode).find('td').css( 'text-align','center');
                    $(rowNode).find('td:first').css('text-align','left');
                    table.draw();
                }
                console.log(builder);
                
               

              };

              reader.onerror = function(ex){
    				    console.log(ex);
    					};

    					reader.readAsBinaryString($("#fileField")[0].files[0]);
            });


            $(".datepicker-custom").datepicker({
                    format: "yyyy-mm",
                    viewMode: "months",
                    minViewMode: "months",
                    autoclose:true

            });

            $(".datepicker-multiple-custom").datepicker({
                  format: "mm-yyyy",
                    viewMode: "months",
                    minViewMode: "months",
                    autoclose:true,
                    multidate: true,
                    multidateSeparator: ","
            });
        });
    </script>



    <script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script> -->

</html>
