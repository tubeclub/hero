<body>
<?php

    $conf = $this->model_user->get_conf();
$co = $conf->page_fb;
$apid = $conf->id_ap;
$logo = $conf->logo;


date_default_timezone_set('Africa/Lagos');	

   function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

?>

  <script src="<?=base_url()?>js/barlang.js" type="text/javascript"></script>
<link href="http://en.heroquizz.com/stylefull.css" rel="stylesheet" type="text/css" />

<style>

.topbarre_lang_list_a{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}


.header {
  
    background: #fff278;
}




.inner-col {
   
    border-color: #365494;
}
</style>


    <div class="header clearfix onscroll">
        <div class="container">



	<a href="<?=base_url()?>" class="topbarre_logo"><img src="<?=base_url()?>assets/logo/<?php echo $logo ;?>" class="topbarre_logo_img" /><img src="http://www.allquizz.com/img/icon.png" class="topbarre_logo_img_small" /></a>
    <div class="topbarre_likebox">
		        <div class="fb-like" data-layout="button_count" data-href="<?php echo $co ;?>" ></div>
            </div>
        


           
                </div>
            </div>
            