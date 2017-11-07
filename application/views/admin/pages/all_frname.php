                <?php 
 
    $tous = $this->model_user->get_all_frname();
    $tou = $this->model_user->get_all_frnam();
    $to = $this->model_user->get_all_frna();
    $fr4 = $this->model_user->get_all_fr4();
    $fr5 = $this->model_user->get_all_fr5();
    $fr6 = $this->model_user->get_all_fr6();
    $fr7 = $this->model_user->get_all_fr7();
    $fr8 = $this->model_user->get_all_fr8();
    $fr9 = $this->model_user->get_all_fr9();
    $fr10 = $this->model_user->get_all_fr10();
    $fr11 = $this->model_user->get_all_fr11();

 ?>

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
              

         

<h2>primary friend </h2>

        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                <th>Y</th>

            </tr>
        </thead>
        <tbody>
         <?php foreach($tous->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                       


                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frname/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>   
      
            
        
<br>


<h2> secondary  friend </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($tou->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>

<h2> tertiary friend </h2>



        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                <th>Y</th>

            </tr>
        </thead>
        <tbody>
         <?php foreach($to->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      


                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frna/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>


<h2> quaternary friends </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($fr4->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>
<h2> quinary friends </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($fr5->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>
    <h2> senary friends </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($fr6->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>
 <h2> septenary friends </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($fr7->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>
<h2> octonary friends </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($fr8->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>
<h2> nonary friends </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($fr9->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>
<h2> denary friends </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($fr10->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>
<h2> 11 friends </h2>


        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID</th>

                               <th>titre</th>
                  <th>background</th> 
                  <th>X</th> 
                  <th>Y</th> 

            </tr>
        </thead>
        <tbody>
         <?php foreach($fr11->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
                       <td><?php echo $user->titre ?></td>
             
           <td><?php


               
                $product_image = [  'src' => "assets/img/$user->id/" . $user->bc4 ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                       <td><?php echo $user->x ?></td>
                       <td><?php echo $user->y ?></td>
                      
                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_frnam/<?=$user->idname?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>
    
<br>
    
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#dataTable').dataTable();
        } );
    </script>
            



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