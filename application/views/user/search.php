<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Material UI One Page Theme</title>

    <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>userassets/css/material.min.custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>userassets/css/material.datatable.css">
    <link href="<?php echo base_url(); ?>userassets/min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="<?php echo base_url(); ?>userassets/min/bootstrap-datepicker.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url(); ?>userassets/min/plugin-min.css" type="text/css" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>assets/css/tableexport.min.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>userassets/css/custom.css">
    <script src="<?php echo base_url(); ?>userassets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/xlsx.core.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/Blob.js"></script>
<script src="<?php echo base_url(); ?>assets/js/FileSaver.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tableexport.min.js"></script>

</head>

<body id="top" class="scrollspy">

    <!-- Pre Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!--Navigation-->
    <div class="navbar-fixed">
        <nav id="nav_f" class="default_color" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" id="logo-container" class="brand-logo">BluePen</a>
                    <ul class="right hide-on-med-and-down">
                        <?php if ($monitoring_group): ?>
													<li><a href="<?php echo base_url() ?>index.php/site/view/monitoring">Monitoring</a></li>
												<?php endif; ?>
												<?php if ($competitive_group): ?>
                        	<li><a href="<?php echo base_url() ?>index.php/site/view/competitive">Competitive</a></li>
												<?php endif; ?>
												<?php if ($site_sourcing_group): ?>
													<li><a href="<?php echo base_url() ?>index.php/site/view/site_sourcing">Site Sourcing</a></li>
												<?php endif; ?>
                        <li><a class="modal-trigger" href="<?php echo base_url(); ?>index.php/home/logout" >Logout</a></li>

                    </ul>
                    <ul id="nav-mobile" class="side-nav">
                        <?php if ($monitoring_group): ?>
													<li><a href="<?php echo base_url() ?>index.php/site/view/monitoring">Monitoring</a></li>
												<?php endif; ?>
												<?php if ($competitive_group): ?>
                        	<li><a href="<?php echo base_url() ?>index.php/site/view/competitive">Competitive</a></li>
												<?php endif; ?>
												<?php if ($site_sourcing_group): ?>
													<li><a href="<?php echo base_url() ?>index.php/site/view/site_sourcing">Site Sourcing</a></li>
												<?php endif; ?>
                        <li><a class="modal-trigger" href="<?php echo base_url(); ?>index.php/home/logout" >Logout</a></li>

                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container ">
        <a href="#filter"   text-align="center" class="waves-effect waves-light btn modal-trigger grey accent-3">Filters</a>
        <a href="#modal3"   text-align="center" class="waves-effect waves-light btn modal-trigger brown accent-3">Plot</a>
        <a  id="table-convert"  text-align="center" class="waves-effect waves-light btn csvHtml5 csv csv-btn green accent-3">Convert</a>
        <div class="row">
						<?php
							$mapping = array("Site Name" => 0, "Month" => -1, "Year" => -1, "Province" => 1, "City" => 2, "Street" => 3, "Location" => 4, "Supplier" => 5, "Supp. Contact" => 6, "Supp. Email" => 7, "Width" => 9,
              "Height" => 8, "Avg. Width" => 11, "Avg. Height" => 10, "Cost" => 12, "CPSF" => 13, "Avg. CPSF" => 14, "CPM" => 15, "Avg. CPM" => 16, "Format" => 17, "X" => 18, "Y" => 19, "Traffic Count" => 20,
              "Score" => 21, "Net Audience" => 22, "Material" => 24, "Category" => 25, "Subcategory" => 26);
							$order = array();
						?>
            <table id="example" class="mdl-data-table" style="border-color: p1x" cellspacing="0" width="100%">
             <thead>
                <tr>
										<?php $ctr = 0; ?>
										<?php foreach ($mapping as $item => $index): ?>
											<?php if (in_array($index, $privileges) || $index == -1): ?>
												<?php if ($index == 0): ?>
													<th class="text-left" style="width:60px"><?php echo $item; ?></th>
												<?php else: ?>
													<th class="text-center"><?php echo $item; ?></th>
												<?php endif; ?>
												<?php array_push($order, $ctr); ?>
											<?php endif; ?>
											<?php $ctr++; ?>
										<?php endforeach; ?>
<!--
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
                    <th class="text-center">Width</th>
                    <th class="text-center">Height</th>
                    <th class="text-center">Avg. Width</th>

                    <th class="text-center">Avg. Height</th>
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

                    <th class="text-center">Material</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Sub Category</th>
-->
                </tr>
            </thead>
            <tbody>
								<?php for ($i = 0; $i < count($sites); $i++): ?>
									<?php $site = $sites[$i];
										$date = strtotime($site["time_of_placement"]);
										$month = date("F", $date);
										$year = date("Y", $date); ?>
										<tr class="gradeC">
											<?php $dbmapping = array("province", "city", "street", "location", "supplier", "supplier_contact", "supplier_email", "width", "height", "avg_width", "avg_height", "cost", "CPSF", "avg_CPSF", "CPM", "avg_CPM", "format", "x", "y", "traffic_count", "score", "ref_audience", "material_name", "category", "subcategory") ?>
											<?php for ($j = 0; $j < count($mapping); $j++): ?>
												<?php if (in_array($j, $order)): ?>
													<?php if ($j == 0): ?>
														<td class="text-left sitereflink"><a class="modal-trigger" href="#modal2"><?php echo $site["site_ref"]; ?></a></td>
													<?php elseif ($j == 1): ?>
														<td class="text-center"><?php if ($month) echo $month; else echo " "; ?></td>
													<?php elseif ($j == 2): ?>
														<td class="text-center"><?php if ($year) echo $year; else echo " "; ?></td>
													<?php else: ?>
														 <td class="text-center"><?php if ($site[$dbmapping[$j - 3]]) echo $site[$dbmapping[$j - 3]]; else echo " "; ?></td>
													<?php endif; ?>
												<?php endif; ?>
											<?php endfor; ?>

		              </tr>
							<?php endfor; ?>
            </tbody>
        </table>

    </div>
</div>



<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">

    <div class="footer-copyright default_color">
        <div class="container">
           About BluePen
       </div>
   </div>
</footer>



<!-- Filter -->
<div id="filter" class="modal modal-fixed-footer">
     <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <form class="col s12">

                    <div class="row">
                        <div class="input-field col s12">
                             <i class="material-icons prefix">search</i>
                             <input   id="first_name" type="text" class="validate">
                             <label for="first_name">General Keyword</label>
                        </div>
                    </div>


                    <div class="row">
                         <div class="input-field col 12">
                              <i class="material-icons prefix">today</i>

                              <input placeholder="Ex. MM-YYYY" type="text" id="date" class="validate">
                              <label for="date">Date</label>
                         </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                           <i class="material-icons prefix">work</i>
                           <input placeholder="Ex. Zoey"  id="mat" type="text" class="validate">
                           <label for="material">Material(Material, Category, Sub Category)</label>
                       </div>
                   </div>

                   <div class="row">
                        <div class="input-field col s12">
                           <i class="material-icons prefix">toc</i>
                           <input  placeholder="Ex. POB" id="format" type="text" class="validate">
                           <label for="format">Format</label>
                       </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">my_location</i>
                          <input placeholder="Ex. Province:NCR City:Manila Street:Espana  " type="text" id="date" class="validate">
                          <label for="date">Location (Province, City, Street, and Location)</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                           <i class="material-icons prefix">assignment</i>
                           <input  placeholder="Ex. Outcomm" id="supplier" type="text" class="validate">
                           <label for="supplier">Supplier (Supplier Name, Supp. Contact, and Supp. Email)</label>
                       </div>
                   </div>

                   <div class="row">
                        <div class="input-field col s6">
                              <input  placeholder="Ex. 0" id="height-l" type="text" class="validate">
                              <label for="height-l">Height Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                           <i class="material-icons prefix"></i>
                           <input  placeholder="Ex. 64" id="height-u" type="text" class="validate">
                           <label for="height-l">Height Upper Limit</label>
                       </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="width-l" type="text" class="validate">
                          <label for="width-l">Width Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                           <i class="material-icons prefix"></i>
                           <input  placeholder="Ex. 64" id="width-u" type="text" class="validate">
                           <label for="width-u">Width Upper Limit</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="avgheight-l" type="text" class="validate">
                          <label for="avgheight-l">Ave. Height Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                           <i class="material-icons prefix"></i>
                           <input  placeholder="Ex. 64" id="avgheight-u" type="text" class="validate">
                           <label for="avgheight-u">Ave. Height Upper Limit</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="supplier" type="text" class="validate">
                          <label for="supplier">Ave. Width Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                           <i class="material-icons prefix"></i>
                           <input  placeholder="Ex. 64" id="supplier" type="text" class="validate">
                           <label for="supplier">Ave. Width Upper Limit</label>
                       </div>
                   </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="cost-l" type="text" class="validate">
                          <label for="cost-l">Rental Cost Lower Limit</label>
                        </div>
                      <div class="input-field col s6">
                             <i class="material-icons prefix"></i>
                             <input  placeholder="Ex. 64" id="cost-u" type="text" class="validate">
                             <label for="cost-u">Rental Cost Upper Limit</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="cpsf-l" type="text" class="validate">
                          <label for="cpsf-l">CPSF Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                           <i class="material-icons prefix"></i>
                           <input  placeholder="Ex. 64" id="cpsf-u" type="text" class="validate">
                           <label for="cpsf-u">CPSF Upper Limit</label>
                       </div>
                   </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="avgcpsf-l" type="text" class="validate">
                          <label for="avgcpsf-l">Ave. CPSF Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                           <i class="material-icons prefix"></i>
                           <input  placeholder="Ex. 64" id="avgcpsf-u" type="text" class="validate">
                           <label for="avgcpsf-u">Ave. CPSF Upper Limit</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="cpm-l" type="text" class="validate">
                          <label for="cpm-l">CPM Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                             <i class="material-icons prefix"></i>
                             <input  placeholder="Ex. 64" id="cpm-u" type="text" class="validate">
                             <label for="cpm-u">CPM Upper Limit</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="avgcpm-l" type="text" class="validate">
                          <label for="avgcpm-l">Ave. CPM Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                             <i class="material-icons prefix"></i>
                             <input  placeholder="Ex. 64" id="avgcpm-u" type="text" class="validate">
                             <label for="avgcpm-u">Ave. CPM Upper Limit</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="traffic-l" type="text" class="validate">
                          <label for="traffic-l">Traffic Count Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                             <i class="material-icons prefix"></i>
                             <input  placeholder="Ex. 64" id="supplier" type="text" class="validate">
                             <label for="supplier">Traffic Count Upper Limit</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="score-l" type="text" class="validate">
                          <label for="score-l">Score Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                             <i class="material-icons prefix"></i>
                             <input  placeholder="Ex. 64" id="score-u" type="text" class="validate">
                             <label for="score-u">Score Upper Limit</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">

                          <input  placeholder="Ex. 0" id="net-l" type="text" class="validate">
                          <label for="net-l">Net Audience Lower Limit</label>
                        </div>
                        <div class="input-field col s6">
                             <i class="material-icons prefix"></i>
                             <input  placeholder="Ex. 64" id="net-u" type="text" class="validate">
                             <label for="net-u">Net Audience Upper Limit</label>
                        </div>
                    </div>
                    <a class="waves-effect waves-light btn" style="display: inherit">Submit</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Site Preview -->
<!-- Site Preview -->
<div id="modal2" class="modal modal-site modal-fixed-footer"  >
        <div class="modal-content"  >

            <div class="row " >
                <div class="col s6"   >

                      <div class="slider z-depth-1 neil"  >
                        <ul class="slides" >
                          <div id="imageList">

                          </div>
                          <!--<li>
                            <img class="responsive-img"  src="<?php echo base_url(); ?>userassets/img/project1.jpg">

                          </li>-->

                        </ul>
                      </div>


                </div>

                <div class="col s6 modal-info">
                    <div class="row" style="margin-top: 20px">
                    <h4 id="siteName">Site Title</h4>
                    <hr/>
                    <div id="siteInfo">

                    </div>
                    <!--
                    <br>
                    <b>Date:</b> April 2016
                    <br>
                    <b>Location:</b> Espana, Manila. NCR. Around Espana Bound to Morayta.
                    <br>
                    <b>Supplier:</b> Outcomm
                    <br>
                    <b>Supplier Contact:</b> Dummy
                    <br>
                    <b>Supplier Email:</b> dummy@yahoo.com
                    <br>
                    <b>Height:</b> 100
                    <br>
                    <b>Width:</b> 200
                    <br>
                    <b>Avg. Height:</b> 120
                    <br>
                    <b>Avg. Width:</b> 140
                    <br>
                    <b>Cost:</b> 100000
                    <br>
                    <b>CPSF:</b> 124
                    <br>
                    <b>Avg. CPSF:</b> 210
                    <br>
                    <b>CPM:</b> 120
                    <br>
                    <b>Avg. CPM:</b> 130
                    <br>
                    <b>Format:</b> Outcomm
                    <br>
                    <b>X:</b> 12.9
                    <br>
                    <b>Y:</b> 13.5
                    <br>
                    <b>Traffic Count:</b> 23909
                    <br>
                    <b>Net Audience:</b> Outcomm
                    <br>
                    <b>Material:</b> Outcomm
                    <br>
                    <b>Category:</b> asdsad
                    <br>
                    <b>Sub Category:</b> Outcomm
                    <br>
                    <b>Remarks:</b> Outcomm
                  -->
                       <iframe
                        width="100%"
                        height="100%"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCcvBqisu-TEnMkaY3vaPAeIWaMiRlmbbk&q=Space+Needle,Seattle+WA" allowfullscreen>
                      </iframe>
                    </div>

                </div>
            </div>
        </div>

<!--     <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Next</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Previous</a>
    </div> -->
</div>

<!-- Plot All -->
<div id="modal3" style="height: 100%;width: 80%" class="modal modal-fixed">
   <div class="modal-content">
       <iframe

          width="1200px"
          height="500px"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCcvBqisu-TEnMkaY3vaPAeIWaMiRlmbbk&q=Space+Needle,Seattle+WA" allowfullscreen>
        </iframe>
    </div>
</div>





</body>




<!--  Scripts-->

<script src="<?php echo base_url(); ?>assets/js/jquery.tabletoCSV.js"></script>
<script type="text/javascript">
  $("table#example").tableExport({
              formats: ["xlsx"],
             
              position:"bottom",
              // bootstrap:false
            });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="<?php echo base_url(); ?>userassets/min/plugin-min.js"></script>
<script src="<?php echo base_url(); ?>userassets/min/custom-min.js"></script>
<script src="<?php echo base_url(); ?>userassets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>userassets/js/dataTables.material.min.js"></script>
<script src="<?php echo base_url(); ?>userassets/min/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>userassets/js/jquery.fixedColumns.min.js"></script>
<script type="text/javascript">

function tagStripper(str) {
  var div = document.createElement("div");
  div.innerHTML = str;
  return div.innerText;
}

$(document).ready(function(){

								// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('ul.tabs').tabs();
                $('select').material_select();
                $('.modal-trigger').leanModal();
                 $('.materialboxed').materialbox();
                   $('.slider').slider(
                    {height:"100%"}
                    );
                var table = $('#example').DataTable( {

                    fixedColumns:{
                       leftColumns: 1
                   },
                    
                   scrollX: true,
                   ScrollY:true,
                   columnDefs: [
                    {
                    bLengthChange: 'true',
                    targets: [ 0 ],
                    className: 'mdl-data-table__cell--non-numeric'
                     }
                    ]

            });
            

 
        // modal functionality
        $(table.table().container()).on("click", "tr td.sitereflink", function() {
          var columns = table.columns().header();
          var headers = [];
          for (var i = 0; i < columns.length; i++) {
            headers.push(columns[i].textContent);
          }
          var data = table.row(table.row(this).index()).data();
          var siteRef = tagStripper(data[0]);

          var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
          var monthIndex = months.indexOf(data[1]) + 1;
          var year = data[2];

          $("#siteName").text(siteRef);
          //$("#modal2 img").attr("src", "<?php echo base_url() ?>index.php/site/images/" + siteRef +  "/" + monthIndex + "/" + year + "/1");
          $("#siteInfo").text("");

          for (var i = 1; i < headers.length; i++) {
            if (data[i].trim() == "") {
              data[i] = "N/A";
            }
            $("#siteInfo").append("<br /><b>" + headers[i] + ":</b> " + data[i]);
          }

          $("#imageList").text("");
          $.ajax({
            url: "<?php echo base_url(); ?>index.php/site/cimage/" + siteRef + "/" + monthIndex + "/" + year,
            dataType: "text",
            type: "get",
            success: function(data) {
              var count = parseInt(data);
              for (var i = 1; i <= count; i++) {
                console.log("pasok");
                var builder = "<li><img class=\"responsive-img\" src=\"<?php echo base_url(); ?>index.php/site/images/" + siteRef + "/" + monthIndex + "/" + year + "/" + i + "\"</li>";
                $("#imageList").append(builder);
              }
              $('.slider').slider(
               {height:"100%"}
               );
            }
          });
        });

       $('#table-convert').click(function(){
        $("button.xlsx").trigger('click');
       });

});


</script>
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->

</html>
