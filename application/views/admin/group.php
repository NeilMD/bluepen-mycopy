<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/adminto_1.4/dark_menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2016 22:26:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <title>BluePen  </title>

    <link href="<?php echo base_url(); ?>	assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
    <!-- App css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<!--     <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">


    <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css"> -->
    <!--   <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css"> -->

    <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />


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
                            <a href="<?php echo base_url(); ?>index.php/admin/user" class="waves-effect"><i class="zmdi zmdi-odnoklassniki"></i> <span> User Management </span> </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admin/group" class="waves-effect active"><i class="zmdi zmdi-accounts"></i> <span> Group Management </span> </a>
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

                                    <div class="editable-responsive"  >
                                        <table class="table table-striped" id="datatable-editable"  >
                                            <thead>
                                                <tr>
                                                    <th class="text-left" style="width:60px">Group Name</th>
                                                    <th class="text-center">Site Ref</th>
                                                    <th class="text-center">Province</th>
                                                    <th class="text-center">City</th>
                                                    <th class="text-center">Street</th>

                                                    <th class="text-center">Location</th>
                                                    <th class="text-center">Supplier</th>
                                                    <th class="text-center">Supp. Contact</th>
                                                    <th class="text-center">Supp. Email</th>

                                                    <th class="text-center">Height</th>
                                                    <th class="text-center">Width</th>
                                                    <th class="text-center">Avg. Height</th>

                                                    <th class="text-center">Avg. Width</th>
                                                    <th class="text-center">Cost</th>
                                                    <th class="text-center">CPSF</th>
                                                    <th class="text-center">Avg. CPSF</th>

                                                    <th class="text-center">CPM</th>
                                                    <th class="text-center">Avg. CPM</th>
                                                    <th class="text-center">Format</th>
                                                    <th class="text-center">X</th>
                                                    <th class="text-center">Y</th>

                                                    <th class="text-center">Traffic Count</th>
                                                    <th class="text-center">Score</th>
                                                    <th class="text-center">Net Audience</th>
                                                    <th class="text-center">Remarks</th>

                                                    <th class="text-center">Material</th>
                                                    <th class="text-center">Category</th>
                                                    <th class="text-center">Sub-Category</th>

                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                  <?php for ($i = 0; $i < count($groups); $i++): ?>
                                                   <?php $group = $groups[$i]; ?>
                                                   <tr class="gradeC">
                                                    <td class="text-left"><?php echo $group["group_name"]; ?>

                                                    </td>
                                                    <?php $privileges = $groupdata[$group["group_name"]]; ?>

                                                    <?php for ($j = 0; $j < count($privileges); $j++): ?>
                                                        <td class="text-center"><i class="<?php if ($privileges[$j]) echo "zmdi zmdi-check"; else echo "zmdi zmdi-close"; ?> "></i>

                                                        </td>

                                                    <?php endfor; ?>
                                                    <td class="actions text-center">
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
</div>


</div>
</body>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->





<!-- END wrapper -->

<div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><a id="edit-name"></a> Privileges</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Group Name</label>
                            <input type="text" class="form-control" id="field-1" placeholder="Ex. Group1    ">
                        </div>
                    </div>


                    <div class="col-md-12">
                        <h4><label class="control-label pull-left">Privileges</label></h4>
                    </div>

                    <BR/>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox2" type="checkbox"  >
                                <label for="checkbox2">
                                  <b>  Supplier Details </b>
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox21" type="checkbox"  >
                            <label for="checkbox21">
                             <b>  Material </b>
                         </label>
                     </div>
                 </div>
             </div>

             <div class="col-md-4">
                <div class="form-group">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox22" type="checkbox"  >
                        <label for="checkbox22">
                            <b>  X&Y Axis</b>
                        </label>
                    </div>
                </div>
            </div>


            <div class="col-md-4" >
                <div class="form-group">
                    <div class="checkbox checkbox-custom sub-category-custom" >
                        <input id="checkbox920" type="checkbox"  >
                        <label for="checkbox920">
                            Supplier
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <div class="checkbox checkbox-custom sub-category-custom">
                        <input id="checkbox211" type="checkbox"  >
                        <label for="checkbox211">
                            Material
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <div class="checkbox checkbox-custom sub-category-custom">
                        <input id="checkbox220" type="checkbox"  >
                        <label for="checkbox220">
                          X
                      </label>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
                <div class="checkbox checkbox-custom sub-category-custom">
                    <input id="checkbox921" type="checkbox"  >
                    <label for="checkbox921">
                     Contact Number
                 </label>
             </div>
         </div>
     </div>

     <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox212" type="checkbox"  >
                <label for="checkbox212">
                    Category
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox221" type="checkbox"  >
                <label for="checkbox221">
                    Y
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox922" type="checkbox"  >
                <label for="checkbox922">
                    Email Add
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox213" type="checkbox"  >
                <label for="checkbox213">
                   Sub-Category
               </label>
           </div>
       </div>
   </div>

</div>








<hr>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="checkbox checkbox-primary ">
                <input id="checkbox1" type="checkbox"  >
                <label for="checkbox1">
                  <b>  Site Details</b>
              </label>
          </div>
      </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox11" type="checkbox"  >
                <label for="checkbox11">
                   Site Ref
               </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox12" type="checkbox"  >
                <label for="checkbox12">
                   Province
               </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox13" type="checkbox"  >
                <label for="checkbox13">
                 City
             </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox14" type="checkbox"  >
                <label for="checkbox14">
                   Street
               </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox15" type="checkbox"  >
                <label for="checkbox15">
                Location
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox16" type="checkbox"  >
                <label for="checkbox16">
                   Rental Cost
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox17" type="checkbox"  >
                <label for="checkbox17">
               CPSF
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox18" type="checkbox"  >
                <label for="checkbox18">
                    Avg. CPSF
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox19" type="checkbox"  >
                <label for="checkbox19">
                CPM
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox110" type="checkbox"  >
                <label for="checkbox110">
                Avg. CPM
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox111" type="checkbox"  >
                <label for="checkbox111">
                Format
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox112" type="checkbox"  >
                <label for="checkbox112">
               Remarks
                </label>
            </div>
        </div>
    </div>

</div>

<hr/>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-primary">
                <input id="checkbox3" type="checkbox"  >
                <label for="checkbox3">
                    <b>  Material Size</b>
                </label>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-primary">
                <input id="checkbox4" type="checkbox"  >
                <label for="checkbox4">
                    <b> Site Evaluation</b>
                </label>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox31" type="checkbox"  >
                <label for="checkbox31">
                    Height(ft)
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox41" type="checkbox"  >
                <label for="checkbox41">
                    Traffic Count
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox32" type="checkbox"  >
                <label for="checkbox32">
                    Width(ft)
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox42" type="checkbox"  >
                <label for="checkbox42">
                    Score
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox33" type="checkbox"  >
                <label for="checkbox33">
                    Ave. H
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox43" type="checkbox"  >
                <label for="checkbox43">
                    Net Audience
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox34" type="checkbox"  >
                <label for="checkbox34">
                    Avg. W
                </label>
            </div>
        </div>
    </div>


</div>

<hr/>

<div class="row">

    <div class=" col-md-12  " >
        <input id="mat-rad" name="mat-rad" value="all"  type="radio">
        <label for="mat-rad">
          <b>  All</b>
        </label>
        
        <em>(Select all material)</em>
        <br>
        <br>
 

   
        <input id="mat-rad2" name="mat-rad" value="custom" type="radio">
        <label for="mat-rad2">
        
           <b> Custom</b>
        
        </label>
        
        <em>(Choose specifically which to material will to see)</em>
        <br>
        <br>
    
    </div>

    <br>
    <br>
    <div class="col-md-12" style="margin-left: 12px;margin-bottom: 10px">
       <label  class="col-md-2" for = 'material-see' id='title-l'>Include</label>
       <select row=10 column=10 id="material-select-include" disabled=""  class="select2 col-md-9 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">

       </select>

    </div>
    <div class="col-md-12" style="margin-left: 12px">
       <label  class="col-md-2" for = 'material-see' id='title-l'>Exclude</label>
       <select row=10 column=10 id="material-select-exclude" disabled="" class="select2 col-md-9 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">

       </select>

    </div>
</div>



    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" id="save-edit" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div>





<div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1-add" class="control-label">Group Name</label>
                            <input type="text" class="form-control" id="field-1-add" placeholder="Ex. Group1">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h4><label class="control-label pull-left">Privileges</label></h4>
                    </div>

                    <BR/>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox2-add" type="checkbox"  >
                                <label for="checkbox2-add">
                                  <b>  Supplier Details </b>
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox21-add" type="checkbox"  >
                            <label for="checkbox21-add">
                             <b>  Material </b>
                         </label>
                     </div>
                 </div>
             </div>

             <div class="col-md-4">
                <div class="form-group">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox22-add" type="checkbox"  >
                        <label for="checkbox22-add">
                            <b>  X&Y Axis</b>
                        </label>
                    </div>
                </div>
            </div>


            <div class="col-md-4" >
                <div class="form-group">
                    <div class="checkbox checkbox-custom sub-category-custom" >
                        <input id="checkbox920-add" type="checkbox"  >
                        <label for="checkbox920-add">
                            Supplier
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <div class="checkbox checkbox-custom sub-category-custom">
                        <input id="checkbox211-add" type="checkbox"  >
                        <label for="checkbox211-add">
                            Material
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <div class="checkbox checkbox-custom sub-category-custom">
                        <input id="checkbox220-add" type="checkbox"  >
                        <label for="checkbox220-add">
                          X
                      </label>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
                <div class="checkbox checkbox-custom sub-category-custom">
                    <input id="checkbox921-add" type="checkbox"  >
                    <label for="checkbox921-add">
                     Contact Number
                 </label>
             </div>
         </div>
     </div>

     <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox212-add" type="checkbox"  >
                <label for="checkbox212-add">
                    Category
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox221-add" type="checkbox"  >
                <label for="checkbox221-add">
                    Y
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox922-add" type="checkbox"  >
                <label for="checkbox922-add">
                    Email Add
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox213-add" type="checkbox"  >
                <label for="checkbox213-add">
                   Sub-Category
               </label>
           </div>
       </div>
   </div>

</div>








<hr>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="checkbox checkbox-primary ">
                <input id="checkbox1-add" type="checkbox"  >
                <label for="checkbox1-add">
                  <b>  Site Details</b>
              </label>
          </div>
      </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox11-add" type="checkbox"  >
        <label for="checkbox11-add">
           Site Ref
       </label>
   </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox12-add" type="checkbox"  >
        <label for="checkbox12-add">
           Province
       </label>
   </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox13-add" type="checkbox"  >
        <label for="checkbox13-add">
         City
     </label>
 </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox14-add" type="checkbox"  >
        <label for="checkbox14-add">
           Street
       </label>
   </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox15-add" type="checkbox"  >
        <label for="checkbox15-add">
           Location
       </label>
   </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox16-add" type="checkbox"  >
        <label for="checkbox16-add">
           Rental Cost
       </label>
   </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox17-add" type="checkbox"  >
        <label for="checkbox17-add">
           CPSF
       </label>
   </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox18-add" type="checkbox"  >
        <label for="checkbox18-add">
            Avg. CPSF
        </label>
    </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox19-add" type="checkbox"  >
        <label for="checkbox19-add">
            CPM
        </label>
    </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox110-add" type="checkbox"  >
        <label for="checkbox110-add">
           Avg. CPM
       </label>
   </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox111-add" type="checkbox"  >
        <label for="checkbox111-add">
           Format
       </label>
   </div>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
       <div class="checkbox checkbox-custom sub-category-custom">
        <input id="checkbox112-add" type="checkbox"  >
        <label for="checkbox112-add">
           Remarks
       </label>
   </div>
</div>
</div>

</div>

<hr/>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-primary">
                <input id="checkbox3-add" type="checkbox"  >
                <label for="checkbox3-add">
                    <b>  Material Size</b>
                </label>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-primary">
                <input id="checkbox4-add" type="checkbox"  >
                <label for="checkbox4-add">
                    <b> Site Evaluation</b>
                </label>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox31-add" type="checkbox"  >
                <label for="checkbox31-add">
                    Height(ft)
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox41-add" type="checkbox"  >
                <label for="checkbox41-add">
                    Traffic Count
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox32-add" type="checkbox"  >
                <label for="checkbox32-add">
                    Width(ft)
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox42-add" type="checkbox"  >
                <label for="checkbox42-add">
                    Score
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox33-add" type="checkbox"  >
                <label for="checkbox33-add">
                    Ave. H
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox43-add" type="checkbox"  >
                <label for="checkbox43-add">
                    Net Audience
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox checkbox-custom sub-category-custom">
                <input id="checkbox34-add" type="checkbox"  >
                <label for="checkbox34-add">
                    Avg. W
                </label>
            </div>
        </div>
    </div>


</div>


<hr>

<div class="row">
    <div class=" col-md-12  " >
        <input id="mat-rad-add" name="mat-rad-add" value="all"  type="radio">
        <label for="mat-rad-add">
          <b>  All</b>
        </label>
        
        <em>(Select all material)</em>
        <br>
        <br>
 

   
        <input id="mat-rad2-add" name="mat-rad-add" value="custom" type="radio">
        <label for="mat-rad2-add">
        
           <b> Custom</b>
        
        </label>
        
        <em>(Choose specifically which to material to include or exclude)</em>
        <br>
        <br>
    
    </div>

    <br>
    <br>
    <div class="col-md-12" style="margin-left: 12px;margin-bottom: 10px">
       <label  class="col-md-2" for = 'material-see' id='title-l'>Include</label>
       <select row=10 column=10 id="material-select-include-add" disabled=""  class="select2 col-md-9 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">

       </select>

    </div>
    <div class="col-md-12" style="margin-left: 12px">
       <label  class="col-md-2" for = 'material-see' id='title-l'>Exclude</label>
       <select row=10 column=10 id="material-select-exclude-add" disabled="" class="select2 col-md-9 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">

       </select>

    </div>
</div>



    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" id='save-add' class="btn btn-info waves-effect waves-light">Save</button>
            </div>
        </div>
    </div>



</div>

</div>
</div>
</div>






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
<script  src="<?php echo base_url(); ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>

<!-- <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script> -->
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fixedColumns.min.js"></script>
<!-- Problem with mobile... -->


<!-- init -->
<script src="<?php echo base_url(); ?>assets/pages/datatables.editable.group.init.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>



<script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script> -->

</html>
