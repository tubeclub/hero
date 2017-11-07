   
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
        <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?=base_url()?>">Home</a></li>
            <li><i class="fa fa-laptop"></i><a href="<?=base_url()?>sqadmin/index/all_frphotos">All photos friends</a></li>                
               
          </ol>
        </div>
      </div>
              

            
      
            
        




<div id="container">

    <h1>add size possition image</h1>
				<form  enctype="multipart/form-data" action="<?=base_url()?>sqadmin/friend" method="post">



    
       
     
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

     <br>  <br>  <br>  <br> <center>

 <div class="form-group">
                        						<label for="field-2" class="col-sm-3 control-label">select number of friends</label>

						<div class="col-sm-5">
							<select name="num" class="form-control" data-validate="required" data-message-required="value_required')">
                            
                                    		<option value="1">1 : primary  friend</option>
                                                <option value="2">2 : secondary  friends</option>
                                                <option value="3">3 : tertiary friends</option>
                                                <option value="4">4 : quaternary friends</option>
                                                <option value="5">5 : quinary friends</option>
                                                <option value="6">6 : senary friends</option>
                                                <option value="7">7 : septenary friends</option>
                                                <option value="8">8 : octonary friends</option>
                                                <option value="9">9 :nonary friends</option>
                                                <option value="10">10 : denary friends</option>
                                                <option value="11">11 : denary friends</option>


                          </select>
						</div> 
					</div>

     </center>



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