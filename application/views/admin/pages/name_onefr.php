  <script type="text/javascript">
document.getElementById("cropboxim").style.position = "relative";

  </script>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
        <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>                
          </ol>
        </div>
      </div>
              

            
      
            
        




    <h1>Add  friend photo</h1>


            
  <?php
  //get src image


$numro = $num;
$id = $na;
          $pos = $this->model_user->get_test($id);

/*
 $myFile = $_FILES['file'];
      move_uploaded_file($_FILES['file']['tmp_name'], "./assets/temp/" . $_FILES['file']['name']); 

$lo =base_url();
$loo ="assets/temp/";
$loon = $_FILES['file']['name'];*/


$lo =base_url();

  $first = "$lo/assets/img/$id/$pos->bc2";
$second = "$lo/assets/img/$id/$pos->bc3";
$third = "$lo/assets/img/$id/$pos->bc4";
$argoub = "$lo/assets/img/$id/$pos->bc1";
$bachir = "$lo/assets/img/$id/$pos->backgroundm";

$array = array($first, $second, $third, $argoub, $bachir);

   $srcImage  = $array[rand(0, count($array) - 1)] ;
   //image check extensiom

   $extensionCheck = pathinfo($srcImage);
   $extension=strtolower($extensionCheck['extension']);
   $extension=str_replace(" ","",$extension);

   if( $extension !='jpg' && $extension!='jpeg'){
    die('I am not able to process your image. I support only jpg images!');
   }
  ?>

  <div id="sEditorMainFrame">

    <div id="whiteLoading">
                <img id="preLoader" src="web_images/ajax-loader.gif" />
        </div><!-- white loader -->

    <!-- +++++++++++++++++ header +++++++++++++++++  -->
    <div id="sEditorheader">
      <div id="sEditorTopMenuHolder">
        <ul id="sEditorheaderNavigation">

          




        <ul><!-- sEditorheaderNavigation -->

      </div><!-- /sEditorTopMenuHolder -->

      <div id="sEditorSliderHolder">
        
      </div><!-- /sEditorSliderHolder -->

      <div id="sEditorTextBox">
        <textarea>Insert text here...</textarea>
      </div><!-- /sEditorTextBox -->

      <div id="sEditorCurrentEffect">
      </div><!-- /sEditorCurrentEffect -->

      <!-- position selection display -->
      <div id="sEditorSelectionInfo">
       <?= form_open_multipart('sqadmin/create_onefrnm', ['class'=>'form-horizontal']) ?>


<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">select color</label>
                        
						<div class="col-sm-5">
							<select name="color" class="form-control" data-validate="required" data-message-required="value_required')">
                              <option value="0">Black</option>
                              
                                    		<option value="2"> grey </option>
                                    		<option value="1">red </option>
                                    		<option value="3">blue  </option>
                                    		<option value="4"> BlanchedAlmond</option>
                                              	<option value="5">Purple  </option>
                          </select>
						</div> 
					</div>



<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">select size</label>
                        
						<div class="col-sm-5">
							<select name="size" class="form-control" data-validate="required" data-message-required="value_required')">
                                                                  		
                                                <option value="11"> 11 </option>
                                    		<option value="14"> 14 </option>
                                    		<option value="16">16 </option>
                                    		<option value="18">18  </option>
                                    		<option value="20"> 20</option>
                                              	<option value="22">24  </option>
                                              	<option value="26">26  </option>
                                              	<option value="28">28  </option>
                                              	<option value="30">30  </option>
                                              	<option value="32">32  </option>
                          </select>
						</div> 
					</div>


<div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Possition Name </button>
      </div>
      </div>

            <input type="text" class="form-control" style="display:none" name="nan" placeholder="" value="<?php echo $srcImage ;?>">

                <input type="text" class="form-control" style="display:none" name="na" placeholder="" value="<?php echo $id ;?>">
                <input type="text" class="form-control" style="display:none" name="num" placeholder="" value="<?php echo $numro ;?>">


      
      
      <label>X1 <input type="text" size="1" class="sEditorSelectionInfo" id="sEditorXpos" name="sEditorXpos" /></label>
          <label>Y1 <input type="text" size="1" class="sEditorSelectionInfo" id="sEditorYpos" name="sEditorYpos" /></label>
          

<br>
<br>
<br>
        <?= form_close() ?>
      </div><!-- /sEditorSelectionInfo -->

    </div><!-- /sEditorheader -->

    <!-- +++++++++++++++++ /header +++++++++++++++++  -->

    <!-- +++++++++++++++++ img Holder +++++++++++++++++  -->

    <div id="sEditorImageHolder">
       
<br>
<br>
<br>
<br>

        <!-- image editor -->
                <img id="cropbox" src="<?php echo $srcImage; ?>"  style="position: relative" />
                <!-- /image editor -->
             
<br>
<br>
<br>
<br>

    </div><!-- /sEditorImageHolder -->

    <!-- +++++++++++++++++ /img Holder +++++++++++++++++  -->

    <!-- +++++++++++++++++ footer +++++++++++++++++  -->

    <div id="sEditorBottomMenu">

    

    </div><!-- /sEditorBottomMenu-->

  

      

    </div><!-- /effectsListHolder-->
    <!-- +++++++++++++++++ /footer +++++++++++++++++  -->

  </div><!-- /sEditorMainFrame -->




          </section>
      </section>
      <!--main content end-->
  </section>     


<!-- javascripts -->
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
