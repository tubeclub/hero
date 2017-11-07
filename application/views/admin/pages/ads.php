     
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
               
               <th>Data-ad-client</th>

                               <th>Data-ad-slot</th>
                
                               <th>Etat</th>

            </tr>
        </thead>
        <tbody>
         <?php foreach($ads->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->client ?></td>
                       <td><?php echo $user->slot ?></td>
                                    <td><?php echo $user->etat ?></td>

           


                <td>
                    <a href="<?php echo base_url()?>sqadmin/update_ads/<?=$user->id?>" class="btn btn-primary btn-sm">modifier</a>
                    
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