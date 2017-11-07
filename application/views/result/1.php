<?php 

$name = $test->titre ;
$name = str_replace(' ', '_', $nom); 



    $conf = $this->model_user->get_conf();
$co = $conf->page_fb;
$apid = $conf->id_ap;

  $tetor = $this->model_user->get_all_test();

    $initial = 5;
$total =  $this->db->count_all('squizes');
$site = base_url();
$pagestotales = ceil($total/$initial);
       

    $tetora = $this->model_user->get_all_testlimit(6,0);
$s = $test->id ;
$tito = $this->model_user->get_test($s);
          $tet = $this->model_user->get_tree_test();
          $las = $this->model_user->get_last();
     $idom =  $insert_id ;
$testrand = $this->model_user->get_all_testrand();

?>
<title><?php echo $test->titre ?></title>

<style>
.aplication-inner {
    background: rgb(245, 246, 247);
}
</style>

</head>
<body >  




<div class="principal container">
                        <div class="row">

            <div class="col-md-8" >
              




<div class="row">


    <div class="aplication dataapps">

        <div id="mydiv" class="aplication-inner" >



 

<?php 



$ads = $this->model_user->get_adsi();
$etat = $ads->etat;


if ( strcasecmp( $etat, 'disabled' ) == 1 ){

$client =" ";
$slot = " ";

 $adsence = '      

                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- quiz_net -->
              <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client=<?php echo $client ?>
                 data-ad-slot=<?php echo $slot ?>
                 data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>';

echo $adsence;
 }
?>

                            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<?php 


if ( strcasecmp( $etat, 'enable' ) == 1 ){
$ads = $this->model_user->get_adsi();
$etat = $ads->etat;

$client = $ads->client;
$slot = $ads->slot;
    

echo ' <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client= '; echo $client ; 
            echo '     data-ad-slot= '; echo $slot;
             echo '     data-ad-format="auto"></ins>
             ';
}


?>

<script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>

  



<div class="inside">
<div class="coare" style="border: 1px solid #3b5997;" >
<div class="combo_box fb_like_and_share"  >
            <div class="fb_like_out" >
                <span class="fb_text">Like our Page</span>
                <span class="fb_blue_arrow"><img src="<?=base_url()?>/img/arrow-gray.png"></span>
                <div class="fb-like " data-href="<?php echo $co ?>" data-width="90" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
            </div>
            <div class="social-share-box-full" >
                <a href="#" class="share-item fb" onclick="postToFeed()" >Share on <span>Facebook</span></a>
            </div>
        </div>
       
        





           	  	

            <div class="quizImg" style="text-align: center">

<a href="#" onclick="postToFeed()">

 
    <img  class="img-responsive center-block" src=<?php echo $pic ;?> style="max-width:700px; border-style:solid; border-width:2px; border-color:#fff"></a>
</div>
            <div style="clear:both;"></div>
			<h3><span style="font-family: Tahoma, Geneva, sans-serif; font-size:medium;" id="text4">Did you like the result? Share them with your friends
 </span></h3>
         


 <div class="social-share-box ">
                <a href="#" onclick="postToFeed()" class="share-item fb" >Share on <span>Facebook</span></a>
                <div class="share-item mr"></div>
            </div>
           	  
 </div>
        </div>
<?php 



$ads = $this->model_user->get_adsi();
$etat = $ads->etat;


if ( strcasecmp( $etat, 'disabled' ) == 1 ){

$client =" ";
$slot = " ";

 $adsence = '      

                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- quiz_net -->
              <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client=<?php echo $client ?>
                 data-ad-slot=<?php echo $slot ?>
                 data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>';

echo $adsence;
 }
?>

                            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<?php 


if ( strcasecmp( $etat, 'enable' ) == 1 ){
$ads = $this->model_user->get_adsi();
$etat = $ads->etat;

$client = $ads->client;
$slot = $ads->slot;
    

echo ' <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client= '; echo $client ; 
            echo '     data-ad-slot= '; echo $slot;
             echo '     data-ad-format="auto"></ins>
             ';
}


?>

<script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>


            <div style="clear:both;"></div>
        </div>
    </div>
</div>            </div>
           









<div class="fb-page" data-href="<?php echo $co ;?>" data-tabs="timeline" data-width="300" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                


<br>



<div class="col-md-4 right">
                <div class="aplication goo">
                    <div class="right-inner">
                        <center>
<?php 



$ads = $this->model_user->get_adsi();
$etat = $ads->etat;


if ( strcasecmp( $etat, 'disabled' ) == 1 ){

$client =" ";
$slot = " ";

 $adsence = '      

                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- quiz_net -->
              <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client=<?php echo $client ?>
                 data-ad-slot=<?php echo $slot ?>
                 data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>';

echo $adsence;
 }
?>

                            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<?php 


if ( strcasecmp( $etat, 'enable' ) == 1 ){
$ads = $this->model_user->get_adsi();
$etat = $ads->etat;

$client = $ads->client;
$slot = $ads->slot;
    

echo ' <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client= '; echo $client ; 
            echo '     data-ad-slot= '; echo $slot;
             echo '     data-ad-format="auto"></ins>
             ';
}


?>

<script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
<div class=\"right-inner\">
            <center width=\"96% class=\"img-responsive center-block\">


            </center>						</center>

                    </div>
                </div>
            </div>
        </div>
                <div class="row relative">
            <div class="col-md-12">
                <div class="row infinite">
                    <div class="col-md-8">
						                <div class="fb-comments" data-href="<?=base_url()?>fb/test/<?php echo $id ?>" data-numposts="4"></div>                     

					</div>





                 <?php foreach($tetora->result() as $user) : ?>



<div class="col-md-4 col-xs-6">
                              
			<div class="sidebar-item quizitem quiz-id-31 col-xs-12 col-sm-6 col-md-12 quiz-container ">
	<div class="quiz-wrapper">
		<div class="quiz-thumb lazyload">
			<a href="<?=base_url()?>fb/test/<?php echo $user->id ?>/?id=<?php echo $user->id ?>">
				<img class="quiz-picture" alt="<?php echo $user->titre ?>" src="<?=base_url()?>assets/img/<?php echo $user->id ?>/<?php echo $user->background ?>">
			</a>
		</div>
		<div class="quiz-question">
			<h2 class="quiz-title">
				<a class="quiz-link" href="<?=base_url()?>fb/test/<?php echo $user->id ?>/?id=<?php echo $user->id ?>" title="<?php echo $user->titre ?>">
<?php echo $user->titre ?>				</a>
			</h2>
			
		</div>
		

	</div>
</div>

                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    <?php endforeach; ?> 



              </div>
            </div>
        </div>
            </div>
</div>
            <div><a class="loadmore" href="javascript:;">... المزيد من الإختبارات</a></div>

<script type ="text/javascript">
    var header = $('.header');
    $(window).scroll(function() {
        if($(window).scrollTop()>100){
            header.addClass('onscroll');
        }
        else{
            header.removeClass('onscroll');
        }
    });
</script>
<script type="text/javascript">
    $('.close').on('click',function (event) {
        event.preventDefault();
        $('.annonces').slideUp(400);
    });
    function cbgetScrollTop(){
        if(typeof pageYOffset!= 'undefined'){
            //most browsers
            return pageYOffset;
        }
        else{
            var B= document.body; //IE \'quirks\'
            var D= document.documentElement; //IE with doctype
            D= (D.clientHeight)? D: B;
            //alert(D.scrollTop);
            return D.scrollTop;
        }

    }
            $('body').imagesLoaded( function() {
            /*var infinite = $('.infinite');
            if(infinite.length){
                $(window).scroll(function () {
                    if ($(window).data('ajaxready') == false) return;
                    cbwinsizey =$(window).height()+20;
                    cbwinsizey = $(document).height() - $(window).height();
                    if(cbgetScrollTop()+100 >= cbwinsizey){

                        url = '<?php base_url() ?>/fb/ino';
                        var count = $('.infinite').find('.quizitem').length;

                        if(count < 589){
                            $(window).data('ajaxready', false);
                            $.post( url,{ limit:3, currentcount:count }).done(function(data){
                                infinite.append(data);
                                $(window).data('ajaxready', true);
                            });
                        }
                    }
                });
            }*/
        });
    
    
    $(document).ready(function(){
        $('.loadmore').click(function(){
            var infinite = $('.infinite');
            if(infinite.length){
            if ($(window).data('ajaxready') == false) return;
                cbwinsizey =$(window).height()+20;
                cbwinsizey = $(document).height() - $(window).height();
                if(cbgetScrollTop()+100 >= cbwinsizey){

                    url = 'http:<?php base_url() ?>/fb/ino';
                    var count = $('.infinite').find('.quizitem').length;

                    if(count < 589){
                        $(window).data('ajaxready', false);
                        $.ajax({
                            beforeSend:function(){
                                $('.loadmore').append('<i class="fa fa-spinner fa-spin"></i>');
                            },
                            url:url,
                            type:'POST',
                            data:{limit:3, currentcount:count},
                            success:function(data){
                            infinite.append(data);    
                            },
                            error:function(){
                                
                            },
                            complete:function(){
                                $('.fa-spinner').remove();
                                $(window).data('ajaxready', true);
                            }
                        });
                    }
            }
            }
        });
        
        
    });


</script>

		
