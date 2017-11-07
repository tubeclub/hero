<!DOCTYPE html>
<html lang="en">
<head>
<?php 

$od = $test->id;
$imo = $test->imagetest;
 
$a = "assets/img/$od/$imo";



$bo = base_url();
  $filename =  $a ;
$link =  "$bo/fb/test/$od/?id=$od";

    $conf = $this->model_user->get_conf();
$co = $conf->page_fb;
$apid = $conf->id_ap;

if (file_exists($filename)) {
$aa = "$bo/$a";

    $pica =  $aa ;


}


?>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : <?php echo $apid ;?>,
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_UK/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>

function postToFeed() {
    // calling the API ...
    var obj = {
      method: 'feed',
      link: '<?php echo $link ;?>',
      description: "<?php echo $test->description ;?>",
      picture: '<?php echo $pica ;?>',
      name: '<?php echo $test->titre;?>'
    };
     FB.ui(obj);
   }
</script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta property="fb:admins" content="220064605039014"/>
    <link rel="canonical" href="<?=base_url()?>" />
<meta name="description" content=" <?php echo  $confi->description ; ?> " />
        <meta name="keywords" content=" <?php echo  $confi->seo ; ?> "/>
<meta property="fb:admins" content="220064605039014"/>
<meta property="fb:app_id" content="<?php echo $apid ;?>"/>
<meta property="og:site_name" content="<?php echo  $confi->title ; ?>"/>
<meta property="og:type" content="website" />
        <meta property="og:title" content=" <?php echo  $confi->title ; ?> " />
        <meta property="og:description" content="<?php echo $test->titre;?>" />
        <meta property="og:image:type" content="image/jpeg" />
       
<meta property="cr:image" content="<?php  echo $test->imagetest ;?>"/>
<meta property="og:image" content="<?php echo $test->imagetest ;?>"/>
<meta property="og:url" content="<?php echo $link ;?>" />
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image:width" content="600"/>
<meta property="og:image:height" content="420"/>
<meta name="author" content="<?php echo  $confi->title ; ?>">

<link rel="alternate" href="<?=base_url()?>" hreflang="en_UK" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->


<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/favicon.ico">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="<?=base_url()?>/js/bootstrap.min.js"></script-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link href="http://www.allquizz.com/sp/css/style.css" rel="stylesheet">
<link href="http://www.allquizz.com/sp/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="http://www.allquizz.com/sp/css/sstylle.css" rel="stylesheet">
<link href="http://www.allquizz.com/sp/css/taggable.css" rel="stylesheet">


<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_UK/all.js#xfbml=1&appId=<?php echo $apid ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 
jQuery(document).on('ready', function($){  var url = window.location;    $('.fb-share-button').attr('data-href', url);});</script>



    <!-- Bootstrap -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="<?=base_url()?>js/scroll.js" type="text/javascript"></script>


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    

    

    
<script>
$(document).ready(function() {

  var active1 = false;
  var active2 = false;
  var active3 = false;
  var active4 = false;

    $('.parent2').on('mousedown touchstart', function() {
    
    if (!active1) $(this).find('.test1').css({'background-color': 'transparent', 'transform': 'translate(0px,125px)'});
    else $(this).find('.test1').css({'background-color': 'transparent', 'transform': 'none'}); 
     if (!active2) $(this).find('.test2').css({'background-color': 'transparent', 'transform': 'translate(60px,105px)'});
    else $(this).find('.test2').css({'background-color': 'transparent', 'transform': 'none'});
      if (!active3) $(this).find('.test3').css({'background-color': 'transparent', 'transform': 'translate(105px,60px)'});
    else $(this).find('.test3').css({'background-color': 'transparent', 'transform': 'none'});
      if (!active4) $(this).find('.test4').css({'background-color': 'transparent', 'transform': 'translate(125px,0px)'});
    else $(this).find('.test4').css({'background-color': 'transparent', 'transform': 'none'});
    active1 = !active1;
    active2 = !active2;
    active3 = !active3;
    active4 = !active4;
      
    });
});
</script>



</head>