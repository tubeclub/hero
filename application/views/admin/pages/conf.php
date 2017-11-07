     
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
              

            
      
            
        

    

        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>Title</th>

                               <th>Description</th>
                <th>Keywords seo</th>
                                <th>favicon </th>


            </tr>
        </thead>
        <tbody>
         <?php foreach($confi->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->title ?></td>
                       <td><?php echo $user->description ?></td>
             
                       <td><?php echo $user->seo ?></td>
                       <td><?php echo $user->icon ?></td>

                     


                <td>
                    <a href="<?php echo base_url()?>sqadmin/update_conf1/<?=$user->id?>" class="btn btn-primary btn-sm">modifier</a>
                    
                </td>

            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>


<br>
<br>



        <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
               
               <th>ID App</th>

                               <th>secret</th>
                <th>page facebook</th>
                                <th>Logo</th>


            </tr>
        </thead>
        <tbody>
         <?php foreach($conf->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id_ap ?></td>
                       <td><?php echo $user->secret ?></td>
             
                       <td><?php echo $user->page_fb ?></td>
                     <td><?php


                $product_image = [  'src' => "assets/logo/" . $user->logo ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?>
</td>            


                <td>
                    <a href="<?php echo base_url()?>sqadmin/update_conf/<?=$user->id?>" class="btn btn-primary btn-sm">modifier</a>
                    
                </td>

            </tr>
                        <?php endforeach; ?>

        </tbody>
            
    </table>


    
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