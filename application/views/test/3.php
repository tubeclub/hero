<title><?php echo $test->titre ?></title>
<div id="fb-root"></div>
<style type="text/css">
 
#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}
 fb_text {
    float: none;
    padding-right: 0px;
    font-size: 13px;
}





 <style>
  .full_loading
  {
    display:none;

    background-color:rgba(255,255,255,.93);
    width:100%;
    height:100%;
    position:fixed;
    top:0px;
    left:0px;
    right:0px;
    bottom:0px;
    z-index:10000;
  }
  .full_loading_likebox
  {
    background:#FFFFFF;
    border:1px solid #3C5B9B;
    width:428px;
    margin:100px auto 0 auto;
    border-radius:2px;
    box-shadow:0 2px 6px rgba(0,0,0,.25);
  }
    .full_loading_likebox_head
    {
      background:#3C5B9B;
      color:#FFFFFF;
      padding:0px 0 5px 15px;
      font-size:19px;
      font-weight:bold;
    }
      .full_loading_likebox_head_img
      {
        width:54px;
        height:54px;
        margin:0 15px 0 0;
        vertical-align:-14px;
        border-radius:10px;
      }
  .full_loading_likebox_inside
  {
    position:relative;
    height:112px;
    padding:0 0 0 12px;
  }
    .full_loading_likebox_inside_arrow
    {
      position:absolute;
      top:0px;
      left:108px;
    }
    .full_loading_likebox_inside_logo
    {
      border:1px solid #CCC;
      padding:8px 8px 5px 8px;
      width:46px;
      height:46px;
      margin:12px 12px 0 0;
      float:left;
    }
    .full_loading_likebox_inside_like
    {
      float:left;
      width:330px;
      margin:20px 0 0 0;
      height:25px;
    }

    @media screen and (max-width: 600px){
      .full_loading_likebox_head{padding:10px 0 10px 15px;font-size:17px;}
      .full_loading_likebox{width:350px;}
      .full_loading_likebox_head_img{display:none;}
      .full_loading_likebox_inside_logo{display:none;}
      .full_loading_likebox_inside_arrow{left:33px;}
      .full_loading_likebox{margin-top:50px}
    }



.imgs {
    display: inline-block;
    position: relative;
}

.alegeti {
    font-weight: 700;
    font-size: 15px;
}
.search {
    width: 90%;
    height: 40px;
    padding-left: 10px;
    margin-bottom: 10px;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.imgs .imghover i {
    font-size: 30px;
    color: #fff;
    left: 50%;
    top: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    -moz-transform: translate(-50%,-50%);
    -o-transform: translate(-50%,-50%);
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.rezultat {
    width: 90%;
    height: 40px;
    border: 0;
    font-weight: 700;
    text-transform: uppercase;
    background: #109010;
    border-radius: 5px;
    color: #fff;
}
.prieteni {
    width: inherit !important;
    margin-bottom: 2px;
    margin-right: 2px;
}

    </style>
</style>
 

     
</head>
<body>

<?php 

$url =  "{$_SERVER['REQUEST_URI']}";
$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

  $nameurl = str_replace('/fb/test/', ' ', $escaped_url);

if (isset($_GET['id'])) {

 $insert_id = $_GET['id'];

}else{ $insert_id = $nameurl ;
}

if(!$this->model_user->get_testo($insert_id)){

 header('Location: http://www.allquizz.com/'); 



}else{

  $test = $this->model_user->get_testo($insert_id);

$name = $test->titre ;
$name = str_replace(' ', '_', $name); 

  $tetor = $this->model_user->get_all_test();
$testrand = $this->model_user->get_all_testrand();




$initial = 5;
$total =  $this->db->count_all('squizes');
$site = base_url();
$pagestotales = ceil($total/$initial);
       

    $teto = $this->model_user->get_all_testlimit(6,0);


}

$lo =base_url();

$a = "$lo/assets/img/$insert_id/";

 $in = $this->model_user->get_testo($insert_id);
$b = $in->imagetest;

    $conf = $this->model_user->get_conf();
$co = $conf->page_fb;
?>



<div class="principal container">
                        <div class="row">
            <div class="row reclame">
                <div class="col-md-8">
                    <div class="aplication">
                        <div class="right-inner"> 
                    
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

                        </div>
                    </div>
                </div>
            </div>



 	    <div  class="left">
<div class="inside">
<div class="coare" style="border: 1px solid #3b5997; background: rgb(255, 242, 120);" >
<div class="combo_box fb_like_and_share"  >
           
<div id="share-buttons">
<a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
            
    <script language="javascript">
    function tweetCurrentPage()
    { window.open("https://twitter.com/share?url="+escape(window.location.href)+"&text="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false; }
</script>

    
    <!-- Pinterest -->
    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
    </a>
  
   
    
   
    
    <!-- Tumblr-->
    <a href="http://www.tumblr.com/share/link?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
    </a>
     
    <!-- Twitter -->
    <a href="javascript:tweetCurrentPage()" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
    
  

</div>

            <div class="social-share-box-full" >
                <a href="#" class="share-item fb" onclick="postToFeed()" >Share on <span>Facebook</span></a>
            </div>
        

  

<br>
<br>
<br>




<div class="gla">






	    							  <h1 class="test_h1"><?php echo $test->titre ; ?></h1>
							  								  <p class="test_accroche_fb">You can click on the picture to see your results
 </p>
				

							  							  
	
	<div  class="log_y" ><a href="<?php echo $login ?>" onclick="$('.full_loading').css('display', 'inline');" class="test_img_div test_img_a"  id="go2">
		<div class="test_img_div_in bg_auto" style="background-image:url(<?php echo $a.$b ;?>)"><div></div></div>
	</a></div>

<center>
<p  class="test_accroche_fb">Press  "Like" Button To receive All New Updates
 </p></center>
								  <div class="test_likebox" id="likebox_top_phuketaction"><center>        <div  class="fb-like" data-layout="button_count" data-href="<?php echo $co ;?>" ></div>
        </center></div><br>
		</div>
             <?php 
$typo = $test->result1;
  
if ( strcasecmp( $typo, 'choose' ) == 0 ){
?>
<center><form action="" class="formapp create" method="POST"> 
   <div class="submit-div" style="margin-top: -5px;margin-bottom: 5px;">
   <a  href="#" onclick="$('.gla').css('display', 'none');">   <button type="submit" class="submit" >Choose your lover
 <i class="fa fa-facebook-square"></i></button>
</a>   
 </div>           
   
    
</form></center>
<?php }
else{ ?>

<center><a style="display:inline"  id="txt3" href="<?php echo $login ?>">
		
                <button id="txt1" type="submit" class="btn next-fb fb_quiz_click"    onclick = "$('.full_loading').css('display', 'inline');compteur();"><span style="color: white; font-family: &quot;helvetica neue&quot; , &quot;helvetica&quot; , &quot;arial&quot; , sans-serif;">Log in with Facebook</span></button></a>         </center>   

             <?php 

}
?>

<br>
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
						                <div class="fb-comments" data-href="<?=base_url()?>fb/test/<?php echo $test->id ?>" data-numposts="4"></div>                     

								  	        </div>

   

  
            </div>

	  
<script type="text/javascript"> 
function createCookie(e,t,a){var i;if(a){var o=new Date;o.setTime(o.getTime()+24*a*60*60*1e3),i="; expires="+o.toGMTString()}else i="";document.cookie=encodeURIComponent(e)+"="+encodeURIComponent(t)+i+"; path=/"}function convertToSlug(e){return e.toLowerCase().replace(/ /g,"-").replace(/[^\w-]+/g,"")}function readCookie(e){for(var t=encodeURIComponent(e)+"=",a=document.cookie.split(";"),i=0;i<a.length;i++){for(var o=a[i];" "===o.charAt(0);)o=o.substring(1,o.length);if(0===o.indexOf(t))return decodeURIComponent(o.substring(t.length,o.length))}return null}function eraseCookie(e){createCookie(e,"",-1)}function randomIntFromInterval(e,t){return Math.floor(Math.random()*(t-e+1)+e)}function type(){3>dots?($("p.analyze span").append("."),dots++):($("p.analyze span").html(""),dots=0)}function statusChangeCallback(e){"connected"===e.status?testAPI():"not_authorized"===e.status?document.getElementById("status").innerHTML=" ":document.getElementById("status").innerHTML=""}function checkLoginState(){FB.getLoginStatus(function(e){statusChangeCallback(e)})}function utf8_to_b64(e){return window.btoa(unescape(encodeURIComponent(e)))}function testAPI(){var e=[],t=[];FB.api("/me/permissions",function(a){function i(e,t){$(".firend").hide(),$(".formapp.create").css("height","280px"),$(".overlay").show();var a=$(".main").attr("data-director"),i=e.id,o=e.name.split(" ");o=o[0].split("-"),o=o[0],$(".loader .profile img").attr("src","http://graph.facebook.com/"+i+"/picture?type=large");var n=randomIntFromInterval(2,5);$(".currentstatus").text(" "),$(".loader .profile img").attr("src","http://graph.facebook.com/"+i+"/picture?type=large"),$(".loader .step img").attr("src","http://ro.cooltest.me/css/img/icon2.png");var r=randomIntFromInterval(1,1e7)+"_v1";readCookie("declaratie")?(eraseCookie("declaratie"),createCookie("declaratie",t[0][1],1)):createCookie("declaratie",t[0][1],1),$.post("",{id:i,nume:o,photo:t,stat:n,key:r}).done(function(e){o=convertToSlug(o)+"_"+i+"_"+r+"_s"+n,window.location.href="http://en.allquizz.com/fb/lover/<?php echo $insert_id ;?>/?me="+i+"&id="+t[0][0]+"&name="+t[0][1]+"/"})}if(a.data&&a.data.length>0)for(var o=0;o<a.data.length;o++)if("user_photos"==a.data[o].permission&&"declined"==a.data[o].status||"publish_actions"==a.data[o].permission&&"declined"==a.data[o].status)var n=1;1==n?(createCookie("reqpermission",1,30),location.reload()):(eraseCookie("reqpermission"),FB.api("/me?fields=id,name,photos.type(uploaded).limit(300){likes.limit(200)}",function(a){if(a&&!a.error){if(a.photos&&a.photos.data.length>0)for(var o=0;o<a.photos.data.length;o++)if(a.photos.data[o].likes&&a.photos.data[o].likes.data.length>0)for(var n=0;n<a.photos.data[o].likes.data.length;n++)a.photos.data[o].likes.data[n].id!=a.id&&e.push([a.photos.data[o].likes.data[n].id,a.photos.data[o].likes.data[n].name]);a={id:a.id,name:a.name};for(var r,s={},p=[],o=0;o<e.length;o++)s.hasOwnProperty(e[o])?s[e[o]]+=1:s[e[o]]=1;for(r in    s)s.hasOwnProperty(r)&&p.push([r,s[r]]);p.sort(function(e,t){return t[1]-e[1]}),$(".overlay").hide();var d=$(".formapp.create");d.html(""),d.append('<div class="append"></div><p class="alegeti">Choose your lover</p>'),d.append('<input type="text" class="search" placeholder="ex: Karim" />'),d.append('<div class="firend"></div>');for(var o=0;o<p.length;o++){var l=p[o][0].split(","),c=l[1].split(" ");c=c[0].split("-"),$(".formapp.create .firend").append('<div class="imgs" data-name="'+l[1].toLowerCase().replace(/ /g,"")+'" data-prenume="'+c[0]+'" data-id="'+l[0]+'"><div class="imghover"><i class="fa fa-plus-circle"></i></div><img src="http://graph.facebook.com/'+l[0]+'/picture?width=100&height=100" class="prieteni"></div>')}$(".search").keyup(function(){var e=$(this).val();e?($(".formapp.create div.firend div.imgs").addClass("invisible").removeClass("visible"),$('.formapp.create div.firend div.imgs[data-name*="'+e.toLowerCase().replace(/ /g,"")+'"]').removeClass("invisible").addClass("visible")):$(".formapp.create div.firend div.imgs").removeClass("invisible").addClass("visible")});var u;$(".formapp.create div.firend").on("click","div.imgs",function(e){e.preventDefault(),$("div.append div.imgs").length>=numarprieteni&&0==u?($("div.append").append('<button class="rezultat">See result</button>'),$("html, body").animate({scrollTop:0},300)):$("div.append div.imgs").length<numarprieteni&&($(this).appendTo("div.append"),$("div.append .imghover").html('<i class="fa fa-minus-circle"></i>'),$("div.append div.imgs").length==numarprieteni&&($("div.append").append('<button class="rezultat">See result</button>'),$("html, body").animate({scrollTop:0},300),u=1))}),$("div.append").on("click","div.imgs",function(e){e.preventDefault(),$(this).prependTo(".formapp.create div.firend"),$("div.append div.imgs").length<numarprieteni&&$("div.append .rezultat").remove(),$("div.firend .imghover").html('<i class="fa fa-plus-circle"></i>')}),$("div.append").on("click",".rezultat",function(e){e.preventDefault(),$("div.append div.imgs").each(function(e){t.push([$(this).attr("data-id"),$(this).attr("data-prenume")])});var o=utf8_to_b64(t[0][0]);readCookie("ftags")?(eraseCookie("ftags"),createCookie("ftags",o,1)):createCookie("ftags",o,1),i(a,t)})}}))})}var numarprieteni=1,dots=0;$(".create").submit(function(e){e.preventDefault(),$(".overlay").show(),readCookie("reqpermission")?FB.login(function(e){checkLoginState(e)},{scope:"user_photos,publish_actions",auth_type:"rerequest"}):FB.login(function(e){checkLoginState(e)},{scope:"public_profile,user_photos,publish_actions"})}),readCookie("retry")&&(eraseCookie("retry"),$(".overlay").show(),jQuery(window).load(function(){FB.getLoginStatus(function(e){statusChangeCallback(e)})}));    
</script>

    
 <img src="" width="0" height="0" />
      <div class="full_loading">
      <div id="full_loading" >

        <div id="full_loading_no">
          <div class="full_loading_likebox">
            <div class="full_loading_likebox_head">
               Press "Like" Button  To Get Faster Results
 
            </div>
            <div class="full_loading_likebox_inside">
              <img src="<?=base_url()?>img/full-load-arrow.png" class="full_loading_likebox_inside_arrow" />
              <div class="full_loading_likebox_inside_like">        <div class="fb-like" data-width="330px" data-layout="standard" data-action="like" data-show-faces="true" data-share="false" data-href="<?php echo $co ?>" ></div>
        </div>
            </div>
          </div>
        </div>

        <div id="full_loading_already">
          <img src="<?=base_url()?>img/5.gif" class="prepare_loading_gif" style="margin-top:40px" />
          <span class="prepare_loading_txt"> Analyzing The Profile <span>And Extracting the results ....  </span><i id="plt_pts"></i></span>
        </div>
      </div>
    </div>



        <div class="col-md-4 right">
                <div class="aplication goo">

                   
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
<br>


<div class="row sidebar-header">
	<div class="sidebar-apps">
		<h2 class="sidebar-header-title">Recommeneded Apps</h2>
		<div class="col-xs-12 col-sm-12 col-md-12">

<?php foreach($testrand->result() as $user) : ?>

                  
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

    <?php endforeach; ?>

<div class="row sidebar-row sidebar-ad">
	<div class="col-xs-12 col-sm-12 col-md-12">
		
	</div>
</div>
				</div>
			</div>
		

                </div>
            </div>



        <div id="fb-root"></div>


                      	                           <br>
                           <br>
                           <br>
                           <br>
					

                        </div>
                

                                        <div class="row relative">

            <div class="col-md-12">
                <div class="row infinite">

                    
                        



<?php foreach($teto->result() as $user) : ?>

  

                    <div class="col-md-4 col-xs-6">

                  <div class=" quizitem quiz-id-111 col-xs-12 col-sm-4 col-md-4 quiz-container share">
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

<link rel="stylesheet" href="http://testscrazy.com/ar/css/login-facebook.css">

