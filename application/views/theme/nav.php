<body>
<?php

    $conf = $this->model_user->get_conf();
$co = $conf->page_fb;
$apid = $conf->id_ap;
$logo = $conf->logo;


?>

  <script src="<?=base_url()?>js/barlang.js" type="text/javascript"></script>

<style>
.header {
  
    background: #fff278;
}
.topbarre_lang_list_a{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}

.topbarre_lang_list_a{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}

.topbarre_lang_select_select, .topbarre_lang_select_select:hover {
    cursor: pointer;
    background-color: rgb(64, 220, 120);
    color: #FFFFFF;
}
.topbarre_lang_list {
   

    background-color: rgb(64, 220, 120);
    

}
.topbarre_lang_select:hover {
    cursor: pointer;
    background-color: rgb(64, 220, 120);
}

.inner-col {
   
    border-color: #3b5997;
}
</style>


    <div class="header clearfix onscroll">
        <div class="container">



	<a href="<?=base_url()?>" class="topbarre_logo"><img src="<?=base_url()?>assets/logo/<?php echo $logo ;?>" class="topbarre_logo_img" /><img src="http://www.allquizz.com/img/icon.png" class="topbarre_logo_img_small" /></a>
    <div class="topbarre_likebox">
		        <div class="fb-like" data-layout="button_count" data-href="<?php echo $co ;?>" ></div>

            </div>
       <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WYPV6XFPXZ5AS" class="btn thickbox"><img src="http://www.theperfectsteak.com.au/wp-content/uploads/2016/02/Click-to-Buy-Now.png"  height="60" width="260">
						</a>
           
</div></div>
        </div>
            </div>
            