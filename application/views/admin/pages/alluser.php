    
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
              

            
      
            
        











<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              All users
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
 
                                 <th><i class="icon_profile"></i> ID</th>
                                 <th><i class="icon_profile"></i> Photos</th>

                                 <th><i class="icon_profile"></i> Full Name</th>
                                 <th><i class="icon_profile"></i> ID facebook</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_profile"></i> gender</th>

                                 <th><i class="icon_calendar"></i> birthday</th>
                                 <th><i class="icon_pin_alt"></i> City</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                                  
         <?php foreach($yser->result() as $user) : ?>
            <tr>
                       <td><?php echo $user->id ?></td>
<td><?php


                $product_image = [  'src' =>  $user->photo ,
                          'height'  => '60'
                          ];
                echo img($product_image)
              ?></td>
                    
                       <td><?php echo $user->name ?></td>
             
                    
                                  <td><?php echo $user->idfb ?></td>

               
                       <td><?php echo $user->email ?></td>
                                           <td><?php echo $user->gender ?></td>
                                           <td><?php echo $user->age ?></td>

                                           <td><?php echo $user->local ?></td>


                                             


                <td>
                    <a href="<?php echo base_url()?>sqadmin/delete_user/<?=$user->id?>" class="btn btn-danger btn-sm" onclick="return confirm('Vous Voulez vraimment supprimer?')">Delete</a>
                </td>
            
                        
        
                                 
                              </tr>
                              <?php endforeach; ?>

                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->

    
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