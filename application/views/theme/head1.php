<?php 
  $confi = $this->model_user->get_con();

$imta = $this->model_user->get_con(); 

    $conf = $this->model_user->get_conf();
$co = $conf->page_fb;
$apid = $conf->id_ap;


$id = $test->id;
$imo = $test->imagetest;
 
$a = "assets/img/$id/$imo";



$bo = base_url();
$link =  "$bo/fb/test/$id/?id=$id";

   

$a = "assets/img/$id/id_";

$b = ".jpg";

 if (isset($s)) {
  $filename =  $a.$s.$b ;

if (file_exists($filename)) {
$aa = "$bo/assets/img/$id/id_";

    $pica =  $aa.$s.$b ;


}
}else {
  $pica = $test->imagetest ;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>


<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : <?php echo $apid ;?>,
      xfbml      : true,
      version    : 'v2.5'
    });
  };
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_UK/sdk.js#xfbml=1&version=v2.8&appId=<?php echo $apid ;?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
  

 
jQuery(document).on('ready', function($){  var url = window.location;    $('.fb-share-button').attr('data-href', url);});


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
<meta name="description" content=" <?php echo $imta->description ; ?> " />
        <meta name="keywords" content="<?php echo $imta->seo ; ?>  "/>
<meta property="fb:app_id" content="<?php echo $apid ;?>"/>
<meta property="og:site_name" content="AllQuizz"/>
<meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $imta->title ; ?>" />
        <meta property="og:description" content="<?php echo $test->titre;?>" />
         <meta property="og:image:type" content="image/jpeg" />
       
<meta property="cr:image" content="<?php  echo $test->imagetest ;?>"/>
<meta property="og:image" content="<?php echo $test->imagetest ;?>"/>
<meta property="og:url" content="<?php echo $link ;?>" />
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image:width" content="600"/>
<meta property="og:image:height" content="420"/>
<meta name="author" content="<?php echo $imta->title ; ?>">

<link rel="alternate" href="<?=base_url()?>" hreflang="en_UK" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="<?=base_url()?>/js/bootstrap.min.js"></script-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?=base_url()?>/css/share-fb.css" type="text/css"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link href="<?=base_url()?>/css/style.css" rel="stylesheet">
<link href="<?=base_url()?>/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>/css/sstylle.css" rel="stylesheet">
<link href="<?=base_url()?>/css/taggable.css" rel="stylesheet">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


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

<style>

.social-wrap.filled .combo_box.fb_like_and_share, .social-wrap.filled .tablet_combo_box {
    float: left;
    width: 100%;
    border: 1px solid #3b5997;
    text-align: center;
}
 .social-wrap {
  padding: 10px 0;
  border-top: solid 1px #d6d7d0;
  border-bottom: solid 1px #d6d7d0;
  overflow: hidden;
  margin-top: 10px;
}
  /*--- social btn --*/
  .fb_like_out .fb_text {
    float: left;
    text-transform: uppercase;
    color: #474747;
    padding-right: 10px;
  }
  .fb_like_out .fb_blue_arrow {
    float: left;
    padding: 7px 10px 0 0;
  }
  .fb_like_out .fb-like {
    float: left;
    padding: 7px 20px 0 0;
  }
  .social-share-box-full {
    float: right;
  }
  .social-share-box-full .share-item {
    display: block;
    width: 260px;
    background: #3b5997;
    height: 38px;
    line-height: 38px;
    color: #fff;
    text-decoration: none;
    text-align: center;
  }
  .social-share-box-full .share-item span {
    font-weight: bold;
  }
/*--- social wrapper bellow top video start--*/
  .social-wrap.filled{
    border-top: 0;
    border-bottom: 0;
    width: 100%;
}
.social-wrap.filled .combo_box.fb_like_and_share
.social-wrap.filled .tablet_combo_box{
    float: left;
    width: 100%;
    text-align: center
}
.social-wrap.filled .fb_like_out{
    width: 50%;
    float: left;
    padding-top: 8px;
}


.social-wrap.filled .social-share-box-full{
    width: 50%;
    float: right;
}

.social-wrap.filled .tablet_combo_box  .fb_like_out{
    width: 25%;
    padding-top: 10px;
}

.social-wrap.filled .tablet_combo_box .social-share-box-full{
    width: 75%;
}

.social-wrap.filled .social-share-box-full .share-item{
    width: 100%;
    border-radius: 0;
}
.social-wrap.filled .fb_like_out .fb_text{
    float: none;
    padding-right: 0px;
    font-size: 13px;
}
.social-wrap.filled .fb_like_out .fb_blue_arrow{
    float: none;
    padding-top:0;
    padding-right: 0px;
    vertical-align: middle;
    display: inline-block;
    height:21px;
}
.social-wrap.filled .fb_like_out .fb-like{
    padding-top:0px;
    padding-right: 0px;
    float: none;
    vertical-align: middle;
}
.social-share-box .share-item.fb {
    width: 100%;
    font-size: 20px;
    color: #fff;
    text-decoration: none;
    text-align: center;
    background: #3c569a;
    height: 40px;
    line-height: 40px;
    display: block;
    margin-bottom: 20px;
     font-family: 'Raleway', sans-serif;
    font-weight: 400;
}
.social-share-box .share-item.fb span {
  font-weight: 700;
}
 
</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70989864-3', 'auto');
  ga('send', 'pageview');

</script>


</head>