<?php 
$name = $this->model_user->get_pos();

?> 

<section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="<?=base_url()?>sqadmin" class="logo">Argou<span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
             
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="argoub el bachir" src="<?=base_url()?>assets/images/user2-160x160.jpg" width="45" height="45">
                            </span>
                            <span class="username"><?php echo $name->name ; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?=base_url()?>sqadmin/index/profile"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            
                            <li>
                                <a href="<?=base_url()?>logadmin/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                             <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?=base_url()?>sqadmin">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
<li>                     
                      <a class="" href="<?=base_url()?>sqadmin/index/ajouter">
                          <i class="icon_documents_alt"></i>
                          <span>Add quizzs</span>
                          
                      </a>
                                         
                  </li>

 
				

<li>
                      <a class="" href="<?=base_url()?>sqadmin/index/add_pos_photos">
                          <i class="icon_document_alt"></i>
                          <span>Add possition photo</span>
                      </a>
                  </li>       
               
<li>
                      <a class="" href="<?=base_url()?>sqadmin/index/add_name">
                          <i class="icon_document_alt"></i>
                          <span>Add possition name</span>
                      </a>


                  </li>
<li>
                      <a class="" href="<?=base_url()?>sqadmin/index/add_phofr">
                          <i class="icon_document_alt"></i>
                          <span>Add friends photo</span>
                      </a>
                  </li>
<li>
                      <a class="" href="<?=base_url()?>sqadmin/index/add_nmfr">
                          <i class="icon_document_alt"></i>
                          <span>Add friends name</span>
                      </a>
                  </li>  
                  




<li>
                      <a class="" href="<?=base_url()?>sqadmin/index/ajoute_age">
                          <i class="icon_document_alt"></i>
                          <span>Add possition age</span>
                      </a>
                  </li>




<li>
                      <a class="" href="<?=base_url()?>sqadmin/index/cpa">
                          <i class="icon_document_alt"></i>
                          <span> POPUP</span>
                      </a>
                  </li>
<li>
                      <a class="" href="<?=base_url()?>sqadmin/index/allquiz">
                          <i class="icon_desktop"></i>
                          <span>All quizzs</span>
                      </a>
                  </li>       
                  <li>
                      <a class="" href="<?=base_url()?>sqadmin/index/alluser">
                          <i class="icon_desktop"></i>
                          <span>All user</span>
                      </a>
                  </li>   
                  <li>
                      <a class="" href="<?=base_url()?>sqadmin/index/conf">
                          <i class="icon_genius"></i>
                          <span>config</span>
                      </a>
                  </li>
              

      <li>                     
                      <a class="" href="<?=base_url()?>sqadmin/index/ads">
                          <i class="icon_table"></i>
                          <span>Adsence</span>
                          
                      </a>
                                         
                  </li>
                <li>                     
                      <a class="" href="<?=base_url()?>sqadmin/index/profile">
                          <i class="icon_piechart"></i>
                          <span>profile</span>
                          
                      </a>
                                         
                  </li>
                             
            
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->