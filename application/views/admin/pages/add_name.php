   
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
        <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?=base_url()?>sqadmin/index">Home</a></li>
            <li><i class="fa fa-laptop"></i><a href="<?=base_url()?>sqadmin/index/all_types_name">All possition name</a></li>                
          </ol>
        </div>
      </div>
              

            
      
            
        




<div id="container">

    <h1>Add size possition name</h1>
				<form  enctype="multipart/form-data" action="<?=base_url()?>sqadmin/index/ajoute_type" method="post">



    
       
     
       <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">select quizz</label>
                        
						<div class="col-sm-5">
							<select name="na" class="form-control" data-validate="required" data-message-required="value_required')">
                              <?php 



 $this->db->order_by("id","desc");

$q = $this->db->get('squizes');
$parents = $q->result_array();
										foreach($parents as $row):
											?>
                                    		<option value="<?php echo $row['id'];?>">
													<?php echo $row['id'];?><?php echo '  ';?>-<?php echo $row['titre'];?>
                                                    </option>
                                        <?php
										endforeach;
								  ?>
                          </select>
						</div> 
					</div>

     


      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Go</button>
      </div>
      </div>

</form>
  </div>


          </section>
      </section>
      <!--main content end-->
  </section>     

<!-- javascripts -->
    <script src="<?=base_url()?>admin/js/jquery.js"></script>
    <script src="<?=base_url()?>admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?=base_url()?>admin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?=base_url()?>admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?=base_url()?>admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?=base_url()?>admin/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?=base_url()?>admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?=base_url()?>admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?=base_url()?>admin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?=base_url()?>admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <script src="<?=base_url()?>admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?=base_url()?>admin/js/calendar-custom.js"></script>
    <script src="<?=base_url()?>admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    
    <!--custome script for all page-->
    <script src="<?=base_url()?>admin/js/scripts.js"></script>
   
  </body>
</html>