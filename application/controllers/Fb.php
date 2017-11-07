<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
//include the facebook.php from libraries directory
require_once APPPATH . 'libraries/facebook.php';
 
class Fb extends CI_Controller {

      protected $dat = [];

public function __construct() {
parent::__construct();
$this->config->load('config_facebook');
$this->load->model('model_user');
    $this->load->dbforge();
$this->load->helper('url');
date_default_timezone_set('Africa/Lagos');


}
 
public function index() {

//$this->load->view('head');
     // $data['title'] = $page;
$this->load->model('model_user');

     $data['tet'] = $this->model_user->get_all_test();

  $data['confi'] = $this->model_user->get_con();

        $data['insert_id']  = $this->model_user->get_last(); 
      $data['one']  = $this->model_user->get_one_test();
    $this->load->view('theme/head',$data);
      $this->load->view('theme/nav');
      $this->load->view('index',$data);

      $this->load->view('theme/footer');
//$this->load->view('footer');
}
public function login() {
//$this->load->view('head');
     // $data['title'] = $page;



      $this->load->view('login');

//$this->load->view('footer');
}
public function ino() {

   
      $this->load->view('ajax');

}
public function loader() {

   
      $this->load->view('loader');

}


 
public function logout() {
  $this->load->library('session');

$signed_request_cookie = 'fbsr_' . $this->config->item('appID');
setcookie($signed_request_cookie, '', time() - 3600, "/");
$this->session->sess_destroy();  //session destroy
redirect('/fb/', 'refresh');  //redirect to the home page
}
 
public function test($id) {

if (isset($_GET['code'])) {
		header('Location: ./');
	}

$lo =base_url();

 $this->data['cu'] = $id;
 //    $data['test'] = $this->model_user->get_all_media();

           $data['teto'] = $this->model_user->get_tree_test();

  ######### edit details ##########


    $conf = $this->model_user->get_conf();
$co = $conf->secret;
$apid = $conf->id_ap;

$appId              = $apid; //Facebook App ID
$appSecret          = $co; // Facebook App Secret
$return_url         = "$lo/fb/result/$id";  //return url (url to script)
$fbPermissions      = 'publish_actions,public_profile,user_friends,email,user_photos,user_location,user_birthday,user_tagged_places';  //Required facebook permissions

#################################
// check if curl is enabled
if (!in_array  ('curl', get_loaded_extensions())){die('curl required!');} 

//include facebook SDK
  $this->load->library('facebook');
//Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret,
));

if( isset($_REQUEST['signed_request']) )
{ 
   echo " I am in canvass";
}



if(isset($_GET["logout"]) && $_GET["logout"]==1)
{
    //Destroy the current session and logout user
    $facebook->destroySession();
    header('Location: '.$return_url);
}

//get facebook user

$user = $facebook->getUser();


$photo_details = array('message' => 'my place');
$file='photos/my.jpg'; //Example image file
$photo_details['image'] = '@' . realpath($file);

if ($user) {
  try {
    // We have a valid FB session, so we can use 'me'
    $upload_photo = $facebook->api('/me/photos', 'post', $photo_details);
  } catch (FacebookApiException $e) {
    error_log($e);
  }
}



 $loginUrl = $facebook->getLoginUrl(array('scope' => $fbPermissions,'redirect_uri'=>$return_url));





        $data['login'] = $loginUrl;
      //  $insert_id = $this->db->insert_id();
$insert_id = $id;
  $data['test'] = $this->model_user->get_test($insert_id);



            $is_valid = $this->model_user->cek_id($id);
if ($is_valid == false) {

             
                redirect('fb/');
          
}else{
  $data['test'] = $this->model_user->get_test($insert_id);
  $data['confi'] = $this->model_user->get_con();


 $this->load->view('theme/head1',$data);
      $this->load->view('theme/nav1');
      $this->load->view('test/3',$data);
      $this->load->view('theme/footer');

}

   

}


 

/******************************************* النتائج بعد الاتصال بالفيسبوك **************************************************************/
public function lover($id) {
  $this->load->model('model_user');

$so = (int)$id;

  $data['test'] = $this->model_user->get_testo($so);
    $test = $this->model_user->get_testo($so);

  ######### edit details ##########



$ismok = $_GET['id'];
$ismoka = $_GET['name'];
$user = $_GET['me'];


$temp_folder        = "assets/img/$so/"; //temp dir path to store images
$font               = 'assets/fonts/andlso.ttf'; //font used

  $texto = $ismoka;
 require('I18N/Arabic.php'); 
    $Arabic = new I18N_Arabic('Glyphs'); 
     $texto = $Arabic->utf8Glyphs($texto);

   



  
$a = "assets/img/$so/id_";

$b = ".jpg";

    //$image_id_png =  $a.$user.$b ;
$lin = "assets/img/$so/";


  $filename =  $a.$user.$b ;

$lo =base_url();
  $filenamee =  $lo.$lin.$user.$b ;


 

            $is_valid = $this->model_user->cek_id($id);
if ($is_valid == false) {

             
                redirect('fb/');
          
}else{

/*
if (file_exists($filename)) {
$aa = "$lo/assets/img/$so/id_";

    $image_id_png =  $aa.$user.$b ;

  }else{
     */

$first = "$lo/assets/img/$so/$test->backgroundm ";
$second = "$lo/assets/img/$so/$test->bc1 ";
$third = "$lo/assets/img/$so/$test->bc2 ";
$argoub = "$lo/assets/img/$so/$test->bc3 ";
$bachir = "$lo/assets/img/$so/$test->bc4 ";

$array = array($first, $second, $third, $argoub, $bachir);

   $image_id_png  = $array[rand(0, count($array) - 1)] ;








if(!$this->model_user->get_teste($so)){

}else{

 $data['s'] = $user;
    $data['id'] = $so;       

   $this->load->helper('url');
 
    //new users get to see this login button
  $name = str_replace(' ', '_', $ismoka);

if (isset($_GET['error'])) {
    header("Location: $lo");
  }

 if (isset($_GET['code'])) {
    header("Location: ./$id/$name/");
  }
 $data['nom'] = $ismoka;

$a = "$lo/assets/img/$id/id_";
$b = ".jpg";
$k = "$lo/assets/img/$id/";

    $data['profa'] =  $k.$user.$b ;

    $data['pic'] =  $a.$user.$b ;
    
    $data['link'] =  "$lo/fb/test/$id/?id=$id";


$testo = $this->model_user->get_teste($id);
        $data['ido'] =  $user ;

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;     

   
 if(!copy('http://graph.facebook.com/'.$user.'/picture?width='.$w.'&height='.$h,$temp_folder.$user.'.jpg'))
    {
        die('Could not copy image!');
    }





        $data['insert_id'] = $id;


$dest = imagecreatefromjpeg($image_id_png); // source id card image template
    $src = imagecreatefromjpeg($temp_folder.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($dest, false); 
    imagesavealpha($dest, true);

    imagecopymerge($dest, $src, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder


if(!$this->model_user->get_frone($id)){


}else{
$ism ="lover";
 if(!copy('http://graph.facebook.com/'.$ismok.'/picture?width='.$w.'&height='.$h,$temp_folder.$ism.$ismok.'.jpg'))
    {
        die('Could not copy image!');
    }


         $testo = $this->model_user->get_frone($id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    

 


      $ismoka = $Arabic->utf8Glyphs($ismoka);
   


$desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$ism.$ismok.'.jpg'); //facebook user image stored in our temp folder

    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}

    $this->load->view('theme/head1',$data);
      $this->load->view('theme/nav1');


      $this->load->view('result/1',$data);
      $this->load->view('theme/footer');

       imagedestroy($dest);
    imagedestroy($src);
 
     
}}
}


/******************************************* hada howa copiih o 3awdlo **************************************************************/


public function result($id) {


if (isset($_GET['code'])) {
		header('Location: ./');
	}
  $this->load->model('model_user');
$insert_id = $id;
        $data['teto'] = $this->model_user->get_tree_test();

  $data['confi'] = $this->model_user->get_con();


$so = (int)$insert_id;
        $data['insert_id'] = $so;

  $data['test'] = $this->model_user->get_testo($so);
    $test = $this->model_user->get_testo($so);

  ######### edit details ##########





$temp_folder        = "assets/img/$so/"; //temp dir path to store images
$font               = 'assets/fonts/BIG CAR Short Gun.ttf'; //font used

$facebook = new Facebook(array(
'appId' => $this->config->item('appID'),
'secret' => $this->config->item('appSecret'),
));
// We may or may not have this data based on whether the user is logged in.
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.
$user = $facebook->getUser(); 
// Get the facebook user id
$profile = NULL;
$logout = NULL;
#################################
$user_profile = $facebook->api('/me');
        
        //list of user granted permissions
        $user_permissions = $facebook->api("/me/permissions"); 


    $txt_user_name      = isset($user_profile['name'])?$user_profile['name']:'No Name';
  $texto = $txt_user_name;
 require('I18N/Arabic.php'); 
    $Arabic = new I18N_Arabic('Glyphs'); 
     $texto = $Arabic->utf8Glyphs($texto);

     ///////////////////////////////////////////////////////////





  
$a = "assets/img/$so/id_";

$b = ".jpg";

    //$image_id_png =  $a.$user.$b ;
$lin = "assets/img/$so/";


  $filename =  $a.$user.$b ;

$lo =base_url();
  $filenamee =  $lo.$lin.$user.$b ;


 

$user_pro = $facebook->api('/me?fields=birthday,name,link,email,gender');

      if($this->model_user->get_one_user($user)){




}else{

if ((isset($user_pro['gender']) ) && (isset($user_pro['email']) )) { 

$jins = $user_pro['gender'];
$email = $user_pro['email'];

$user_location = $facebook->api('/me?fields=location');


if ((isset($user_location['location']['name']) ) && (isset($user_pro['birthday']) )) { 

$local = $user_location['location']['name'];
$date = $user_pro['birthday'];
     $texto = $txt_user_name;
$data_user = array(
          'idfb'      => $user,
          'name' => $texto,
          'photo'     => $filenamee,
          'local'     => $local,
          'email'     => $email,
          'gender'     => $jins,
          'age'     => $date
          
        );
        $this->model_user->insert($data_user);
}
else{
     $texto = $txt_user_name;

$data_user = array(
          'idfb'      => $user,
          'name' => $texto,
          'photo'     => $filenamee,
          'email'     => $email,
          'gender'     => $jins
          
        );
        $this->model_user->insert($data_user);

}}
}

////////////////////////////////////////////////////////


            $is_valid = $this->model_user->cek_id($id);
if ($is_valid == false) {

             
                redirect('fb/');
          
}else{

 /*
if (file_exists($filename)) {
$aa = "$lo/assets/img/$so/id_";

    $image_id_png =  $aa.$user.$b ;

  }else{
        */

$first = "$lo/assets/img/$so/$test->backgroundm ";
$second = "$lo/assets/img/$so/$test->bc1 ";
$third = "$lo/assets/img/$so/$test->bc2 ";
$argoub = "$lo/assets/img/$so/$test->bc3 ";
$bachir = "$lo/assets/img/$so/$test->bc4 ";

$array = array($first, $second, $third, $argoub, $bachir);

   $image_id_png  = $array[rand(0, count($array) - 1)] ;








if(!$this->model_user->get_teste($insert_id)){

 $data['s'] = $user;
    $data['id'] = $so;       

   $this->load->helper('url');
 
    //new users get to see this login button
  $name = str_replace(' ', '_', $txt_user_name);

if (isset($_GET['error'])) {
    header("Location: $lo");
  }

 if (isset($_GET['code'])) {
    header("Location: ./$id/$name/");
  }
 $data['nom'] = $txt_user_name;

$a = "$lo/assets/img/$id/id_";
$b = ".jpg";
$k = "$lo/assets/img/$id/";

    $data['profa'] =  $k.$user.$b ;

    $data['pic'] =  $image_id_png ;
    
    $data['link'] =  "$lo/fb/test/$id/?id=$id";


        $data['ido'] =  $user ;
        $data['nom'] =  $texto ;


    $this->load->view('theme/head1',$data);
      $this->load->view('theme/nav1');


      $this->load->view('result/1',$data);
      $this->load->view('theme/footer');

     

}else{



 
$testo = $this->model_user->get_teste($insert_id);
        $data['ido'] =  $user ;

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;     

   
 if(!copy('http://graph.facebook.com/'.$user.'/picture?width='.$w.'&height='.$h,$temp_folder.$user.'.jpg'))
    {
        die('Could not copy image!');
    }


   ##### start generating Facebook ID ########
     $dest  = imagecreatefromjpeg($image_id_png); // source id card image template
    $src = imagecreatefromjpeg($temp_folder.$user.'.jpg'); //facebook user image stored in our temp folder

    imagealphablending($dest, false); 
    imagesavealpha($dest, true);


 $type = $test->type;
$circle = "circle";
$borj = "borj";
$flou = "flou";

$saraha = "saraha";
$nomov = $test->id;
$herf = "herf";

$place = "place";
$user_place = $facebook->api('me/tagged_places');

if ( strcmp ( $nomov, $so) == 0  ){


if ( strcmp ( $type, $herf) == 0  ){




$array = array("ا", "ب", "ض","ص" ,"ث","ق","ف","غ","ع","ه","خ","ح","ج","د","ش","س","ي","ب","ل","ت","ن","م","ك","ط","ر","و","ز");

   $bok = $array[rand(0, count($array) - 1)] ;


$bok = $Arabic->utf8Glyphs($bok);

$facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color


      imagealphablending($dest, true); //bring back alpha blending for transperent font
   imagettftext($dest, 60, 0, 450,100, $facebook_grey, $font, $bok); //Write name to id card



    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder


}



//////////////////////////////////////////////////////////

if ( strcmp ( $type, $place) == 0  ){



$name_place = $user_place['data'];


$tail = count($user_place['data']);
$numa = 2;

if($tail == 0){


$tea = "الحديقة";
$tea = $Arabic->utf8Glyphs($tea);

$facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color


      imagealphablending($dest, true); //bring back alpha blending for transperent font
   imagettftext($dest, 60, 0, 210,325, $facebook_grey, $font, $tea); //Write name to id card

    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder


}
if ($numa < $tail) {

$us=array_rand($user_place['data'],$numa);


$az =  $us[0];


 $tea = $user_place['data'][$az]['place']['name'];
$tea = $Arabic->utf8Glyphs($tea);

$facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color


      imagealphablending($dest, true); //bring back alpha blending for transperent font
   imagettftext($dest, 60, 0, 210,325, $facebook_grey, $font, $tea); //Write name to id card

    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder
}
}
if ( strcmp ( $type, $flou) == 0  ){

//$emboss = array(array(2, 0, 0), array(0, -1, 0), array(0, 0, -1));
//imageconvolution($src, $emboss, 1, 127);


$red = imagecolorallocatealpha($src, 255, 254, 36, 50);
    // Draw a white rectangle
  // imagefilledrectangle($src, $x, $y, $z, $k, $red);
  
imagealphablending($src,true);

imagefilter($src, IMG_FILTER_GRAYSCALE);

}
if ( strcmp ( $type, $borj) == 0  ){



  
  $user_pro = $facebook->api('/me?fields=birthday,name,link,email,gender');
$date = $user_pro['birthday'];
//$jins = $user_pro['gender'];

$date_arr = explode('/', $date);
$dob = $date_arr[1].'-'.$date_arr[0].'-'.$date_arr[2];
  
$nhar = $date_arr[1];
$chhar = $date_arr[0];
$nhar = str_replace("01","1","$nhar");
$nhar = str_replace("02","2","$nhar");
$nhar = str_replace("03","3","$nhar");
$nhar = str_replace("04","4","$nhar");
$nhar = str_replace("05","5","$nhar");
$nhar = str_replace("06","6","$nhar");
$nhar = str_replace("07","7","$nhar");
$nhar = str_replace("08","8","$nhar");
$nhar = str_replace("09","9","$nhar");

$nhar = intval($nhar);
if( (($nhar <= 21) || ($nhar >= 19)) &&  (($chhar =="4") || ($chhar =="3")) ){



$ijabi = "إيجابيّاته: السّرعة في البديهة، والثّقة العالية بالنّفس، والشّجاعة، وحبّ المغامرة، ومن النّاحية العاطفية فهم أشخاص ذوو حماس واندفاع في الحبّ، ويسعون دوماً إلى الإستقرار والتّميز في الحبّ.
سلبيّاته: الأنانيّة وعدم الصّبر، والتّهور، ويميل غالباً إلى التّسلط، والعدوانيّة وسرعة الغضب، ويمتاز بالجرأة في الكلام لدرجة الفظاظة أحياناً.


 ";  

}
if( (($nhar <= 20) || ($nhar >= 20)) &&  (($chhar =="4") || ($chhar =="5")) ){


$ijabi = "إيجابيّاته: من طباعه الإصرار والعزيمة، ويُعتمد عليه كثيراً، وصاحب هذا البرج عاطفيّ من الدّرجة الأولى، وهو مخلص كثيراً، ويفضّل أيضاً العلاقات طويلة المدى.
سلبيّاته: الطّمع، والجشع، والغيرة، وحب التملّك، وهو شخص فضوليّ.

 ";  

}
if( (($nhar <= 20) || ($nhar >= 21)) &&  (($chhar =="6") || ($chhar =="5")) ){



$ijabi = "إيجابيّاته: ذكيّ، وموهوب، واجتماعي، وهو مغامر، ولديه رغبة في مناقشة التّفاصيل الحياتيّة، وصبور.
 سلبيّاته: التوتّر، والعصبيّة، والفضول، وتقلّب المزاج، وهو طائش.

 ";  

}

if( (($nhar <= 22) || ($nhar >= 21)) &&  (($chhar =="6") || ($chhar =="7")) ){



$ijabi = "إيجابيّاته: له خيال واسع، عاطفيّ، والبيت والأسرة هما في المراتب الأولى في سلّم أولويّاته، وحسّاس كثيراً في حال تمّ تجاهله، غالباً ما يترك مشاكله الخاصّة ليساعد الآخرين على حلّ مشاكلهم، وهو اجتماعي.
 سلبيّاته: سرعة الغضب، والعنف، وله انتقادات لاذعة، ومزاجيّ.

 ";  

}
if( (($nhar <= 22) || ($nhar >= 23)) &&  (($chhar =="8") || ($chhar =="7")) ){



$ijabi = "إيجابيّاته: الإبداع، والكرم، وسعة العقل، ومليء بالدفء والتّفاؤل، ولا يخاف، وذو طاقة كبيرة في الإنجاز.
 سلبيّاته: التّسلط، وحب المفاخرة، والغطرسة، والتشدّد، وعدم الصّبر.

 ";  

}
if( (($nhar <= 22) || ($nhar >= 23)) &&  (($chhar =="8") || ($chhar =="9")) ){



$ijabi = "إيجابيّاته: عمليّ، ومجتهد، وذكيّ، ومتواضع، وخجول، ويمكن الاعتماد عليه، ويتكيّف بسهولة، ويحب الاستقرار والتّنظيم في حياته.
 سلبيّاته: القسوة، وكثرة القلق، وكثرة الانتقاد، والدّقة، ويحبّ السّعي للكمال .

 ";  

}
if( (($nhar <= 23) || ($nhar >= 23)) &&  (($chhar =="10") || ($chhar =="9")) ){




$ijabi = "إيجابيّاته: رومانسيّ، وساحر، ودبلوماسيّ في التّعامل، ومؤدّب، وله مبادئ ومسلمات وهي البيت، والزّواج، والمحبوب.
 سلبيّاته: الانطواء، والسّذاجة، والتردّد.

 ";  

}
if( (($nhar <= 21) || ($nhar >= 24)) &&  (($chhar =="10") || ($chhar =="11")) ){




$ijabi = "إيجابيّاته: العاطفيّة، والقوّة، والإثارة، له شخصيّة جذّابة، وذو عزيمة، ويكتم الأسرار.
 سلبيّاته: يحبّ التملك، والغيرة، وهو عنيد، وفضوليّ، وغامض.

 ";  

}
if( (($nhar <= 21) || ($nhar >= 22)) &&  (($chhar =="12") || ($chhar =="11")) ){




$ijabi = "إيجابيّاته: فيه روح المرح الجميلة، والتّفاؤل، وحبّ الحرية، والمرح، والصّدق، والذّكاء من بين كل الأبراج، ولا يخاف من خوض المغامرات. 
سلبياته: الإهمال، وعدم المسؤولية، ويمكن أن يكون ميّالاً للانطواء على نفسه، وهو شخص يؤجّل أموره وسطحيّ، وغير لبق، ويتّسم بالقلق، ومزاجه منحرف، ويخرج عن المألوف لفترة مؤقّتة.
 ";  

}
if( (($nhar <= 19) || ($nhar >= 22)) &&  (($chhar =="12") || ($chhar =="1")) ){



$ijabi = "إيجابيّاته: عمليّ، وعقلانيّ، وصاحب روح مرحة، يتّسم بالصبر، ومنظّم على الصّعيد الاجتماعيّ، وبطيء في علاقاته الاجتماعيّة.
 سلبيّاته: متمسّك بالتّقاليد أكثر من اللزوم، ومتشائم في كثير من الأحيان.

 ";  

}
if( (($nhar <= 18) || ($nhar >= 20)) &&  (($chhar =="2") || ($chhar =="1")) ){




$ijabi = "إيجابيّاته: ودود ومبتكر، ولكنّه صادق، ويتميّز بالأصالة والمثاليّة، وهو عاشق وميّال للمرح، وفي العاطفة يحاول أن يقدّم الكثير لإرضاء شريكه ممّا يجعل شخصيته جذّابة.
 سلبيّاته: عنيد، ومشاكس، ومستقلّ، ويتّسم بالذّكاء، وتصرّفاته غير متوقّعة.


 ";  

}
if( (($nhar <= 19) || ($nhar >= 20)) &&  (($chhar =="2") || ($chhar =="3")) ){




$ijabi = "إيجابيّاته: حسّاس وعاطفيّ، لا تهمّه ماديّات الحياة فهو غير أنانيّ البتّة، وفي العاطفة يحتاج أن يحسّ بحاجة الآخرين له.
 سلبيّاته: شخصيته ضعيفة، وتسهل قيادته، كما أنّه غامض، ويكتم الأسرار.

 ";  

}
$ijabi = $Arabic->utf8Glyphs($ijabi);
    $facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color


      imagealphablending($dest, true); //bring back alpha blending for transperent font
   imagettftext($dest, 18, 0, 70,140, $facebook_grey, $font, $ijabi); //Write name to id card

    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder


}

if(strcmp ( $type, $circle) == 0 ){

imagealphablending($dest, false); 
    imagesavealpha($dest, true);
$x=imagesx($src) ;
$y=imagesy($src);
 
 
// Step 2 - Create a blank image.
$img2 = imagecreatetruecolor($x, $y);
$bg = imagecolorallocate($img2, 255, 255, 255); // white background
imagefill($img2, 0, 0, $bg);
 
 
// Step 3 - Create the ellipse OR circle mask.
$e = imagecolorallocate($img2, 0, 0, 0); // black mask color
 
// Draw a ellipse mask
// imagefilledellipse ($img2, ($x/2), ($y/2), $x, $y, $e);
 
// OR 
// Draw a circle mask
$r = $x <= $y ? $x : $y; // use smallest side as radius & center shape
imagefilledellipse ($img2, ($x/2), ($y/2), $r, $r, $e); 
 
 
// Step 4 - Make shape color transparent
imagecolortransparent($img2, $e);
 
 
// Step 5 - Merge the mask into canvas with 100 percent opacity
imagecopymerge($src, $img2, 0, 0, 0, 0, $x, $y, 100);
 
 
// Step 6 - Make outside border color around circle transparent
imagecolortransparent($src, $bg);
 






$user_pro = $facebook->api('/me?fields=birthday,name,link,email,gender');
$jins = $user_pro['gender'];
  // mb_internal_encoding('UTF-8');  



 
   if($jins == "female"){

$first = "لا يستطيع نسيان كل
 ما كان بينكم انه يحبك اكتر ";
$second = "حبه لك لايزال كيف
 ينساك وقلبه يهواك ";
$third = "قد يبدو انه لا يهتم 
لاكن عيناه تقول الكتير";
$argoub = "يمكنه الصمود و التضاهر 
لاكن في القلب انت سكنت";
$bachir = "يعجز لسانه ويجدك امامه
 حين يزور اماكن اللقاء ";

$array = array($first, $second, $third, $argoub, $bachir);

   $borj = $array[rand(0, count($array) - 1)] ;




}

  else if($jins == "male"){

$first = "لا تستطيع نسيان كل ما كان
 بينكم انها تحبك اكتر ";
$second = "حبها لك لايزال كيف 
تنساك وقلبها يهواك ";
$third = "قد تبدو انها لا تهتم لاكن
 عيناها تقول الكتير";
$argoub = "يمكنها الصمود و التضاهر 
لاكن في القلب انت تسكن";
$bachir = "يعجز لسانها وتجدك امامها 
حين تزور اماكن اللقاء ";

$array = array($first, $second, $third, $argoub, $bachir);

   $borj = $array[rand(0, count($array) - 1)] ;




}







 $borj = $Arabic->utf8Glyphs($borj);


    
   

      imagealphablending($dest, true); //bring back alpha blending for transperent font

   
    $facebook_grey = imagecolorallocate($dest, 255, 255, 255); // Create red color


 imagettftext($dest, 30, 0, 400, 200, $facebook_grey, $font, $borj); //Write name to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder


    

}
    imagecopymerge($dest, $src, $x, $y, 0, 0, $w, $h, 100);


 imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder




}



if(strcmp ( $type, $saraha) == 0 ){


$a1 = "  ماذا ستكتب لنا لتعبر عن حياتك التي عشتها 
الى الان في كلمات قليله ؟";
$a2 = " من يسكن قلبك؟";
$a3 = " مستحيل انساك   لمن تقولها ؟";
$a4 = " اللي راح راح وماتفيد كلمة ياريت  
إذا أردت ان توجه هذه العباره لنفسك, فماذا تقصد بها ؟ ";
$a = "هل تؤيد الزواج العاطفي ام 
      الزواج التقليدي ؟ ولماذا ؟ ";
$a5 = " من هو اكثر شخص تفكر فيه؟";
$a6 = "اذا تم تعيينك ملكا لجميع البلاد العربيه
       فما اول قرار ستتخذه ؟ ";
$a7 = " ماالذي يلفت انتباهك بسرعه
       في الشخص لكي تعجب به ؟";
$a8 = "هل ملابس الشخص امامك تؤثر 
      فيك لتأخذ عنه انطباع ؟؟ ";
$a9 = " حكمة تؤمن بها جدا؟؟";
$a10 = "عاده تفعلها دائما تتمنى ان تتركها ؟ ";
$a11 = "ماهو اجمل اسم لولد واجمل اسم 
        لبنت من وجهة نظرك؟ ";
$a12 = "شخص تبي تهديه بيت شعر ايش هو بيت الشعر
         ومين هو الشخص؟ ";
$a13 = " صــف نفســـك بكلمتيـــن فقـــط";
$a14 = "كلمة تود سماعها كل يوم؟!؟ ";
$a15 = "باقة ورد لمن تهديها ...؟؟ ";
$a16 = "  شخص لاترفض له طلبا ..؟؟";


      $a = $Arabic->utf8Glyphs($a);
      $a1 = $Arabic->utf8Glyphs($a1);
      $a2 = $Arabic->utf8Glyphs($a2);
      $a3 = $Arabic->utf8Glyphs($a3);
      $a4 = $Arabic->utf8Glyphs($a4);
      $a5 = $Arabic->utf8Glyphs($a5);
      $a6 = $Arabic->utf8Glyphs($a6);
      $a7 = $Arabic->utf8Glyphs($a7);
      $a8 = $Arabic->utf8Glyphs($a8);
      $a9 = $Arabic->utf8Glyphs($a9);
      $a10 = $Arabic->utf8Glyphs($a10);
      $a11 = $Arabic->utf8Glyphs($a11);
      $a12 = $Arabic->utf8Glyphs($a12);
      $a13 = $Arabic->utf8Glyphs($a13);
      $a14 = $Arabic->utf8Glyphs($a14);
      $a15 = $Arabic->utf8Glyphs($a15);
      $a16 = $Arabic->utf8Glyphs($a16);


$array = array($a, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16);

   $korsi  = $array[rand(0, count($array) - 1)] ;

    $facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color

imagettftext($dest, 25, 0, 270, 200, $facebook_grey , $font, $korsi); //Write user id to id card


 imagealphablending($dest, true); 

    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder








}


if(!$this->model_user->get_tnamo($insert_id)){




}else{
         $testo = $this->model_user->get_tnamo($insert_id);

$color = $testo->color ;
$size = $testo->size ;

if ( strcmp ( $color, '0') == 0  ){
        $facebook_grey = imagecolorallocate($dest, 0, 0, 0); // Create khel color
}
 if ( strcmp ( $color, '2') == 0  ){
     $facebook_grey = imagecolorallocate($dest, 190, 174, 245); // Create grey color

}
if ( strcmp ( $color, '1') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color

}
if ( strcmp ( $color, '3') == 0  ){
$facebook_grey = imagecolorallocate($dest, 18, 34, 249); // Create blue color

}
if ( strcmp ( $color, '4') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 255, 255, 255); // Create BlanchedAlmond color

}
if ( strcmp ( $color, '5') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 86, 59, 254); // Create Purple  color

}


}
   $txt_user_id        = $user;
     





//$user_friends = $facebook->api('/me/friends?fields=first_name,name,picture.width(190).height(180)');

if(!$facebook->api('/me/taggable_friends')){
}else{


if($this->model_user->get_frone($insert_id)){

         $testo = $this->model_user->get_frone($insert_id);
$w = $testo->w;
 $h = $testo->h;    


$user_friends = $facebook->api('/me/taggable_friends?fields=first_name,name,url,picture.width('.$w.').height('.$h.')');

$tail = count($user_friends['data']);
$numa = 11;



if ($numa < $tail) {

$us=array_rand($user_friends['data'],$numa);


$az =  $us[0];
$ae =  $us[1];
$ad =  $us[2];
$a3 =  $us[3];
$a4 =  $us[4];
$a5 =  $us[5];
$a6 =  $us[6];
$a7 =  $us[7];
$a8 =  $us[8];
$a9 =  $us[9];
$a10 =  $us[10];

 $tea = $user_friends['data'][$az]['picture']['data']['url'];
 $teb = $user_friends['data'][$ae]['picture']['data']['url'];
 $tec = $user_friends['data'][$ad]['picture']['data']['url'];
 $te3 = $user_friends['data'][$a3]['picture']['data']['url'];
 $te4 = $user_friends['data'][$a4]['picture']['data']['url'];
 $te5 = $user_friends['data'][$a5]['picture']['data']['url'];
 $te6 = $user_friends['data'][$a6]['picture']['data']['url'];
 $te7 = $user_friends['data'][$a7]['picture']['data']['url'];
 $te8 = $user_friends['data'][$a8]['picture']['data']['url'];
 $te9 = $user_friends['data'][$a9]['picture']['data']['url'];
 $te10 = $user_friends['data'][$a10]['picture']['data']['url'];

 $isma = $user_friends['data'][$az]['first_name'];
 $ismb = $user_friends['data'][$ae]['first_name'];
 $ismc = $user_friends['data'][$ad]['first_name'];
 $ism3 = $user_friends['data'][$a3]['first_name'];
 $ism4 = $user_friends['data'][$a4]['first_name'];
 $ism5 = $user_friends['data'][$a5]['first_name'];
 $ism6 = $user_friends['data'][$a6]['first_name'];
 $ism7 = $user_friends['data'][$a7]['first_name'];
 $ism8 = $user_friends['data'][$a8]['first_name'];
 $ism9 = $user_friends['data'][$a9]['first_name'];
  $ism10 = $user_friends['data'][$a10]['first_name'];

}

}
if(!$this->model_user->get_frone($insert_id)){


}else{



   $userb ="amies"; 

         $testo = $this->model_user->get_frone($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $isma = $Arabic->utf8Glyphs($isma);
     

copy($tea,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnamo($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnamo($insert_id);


$color = $namo->color ;
$size = $namo->size ;



if ( strcmp ( $color, '0') == 0  ){
        $facebook_grey = imagecolorallocate($dest, 0, 0, 0); // Create khel color
}
 if ( strcmp ( $color, '2') == 0  ){
     $facebook_grey = imagecolorallocate($dest, 190, 174, 245); // Create grey color

}
if ( strcmp ( $color, '1') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color

}
if ( strcmp ( $color, '3') == 0  ){
$facebook_grey = imagecolorallocate($dest, 18, 34, 249); // Create blue color

}
if ( strcmp ( $color, '4') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 255, 255, 255); // Create BlanchedAlmond color

}
if ( strcmp ( $color, '5') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 86, 59, 254); // Create Purple  color

}







$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;



if ( strcmp ( $nrro, $so) == 0  ){


       imagettftext($dest,  $size, 0, $xname, $yname,  $facebook_grey , $font, $isma); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}


if(!$this->model_user->get_frto($insert_id)){




}else{

   $userb ="ami2"; 

         $testo = $this->model_user->get_frto($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ismb = $Arabic->utf8Glyphs($ismb);
     

copy($teb,$temp_folder.$userb.$user.'.jpg');



if(!$this->model_user->get_frtonamo($insert_id)){


   


}else{

         $namo = $this->model_user->get_frtonamo($insert_id);


$color = $namo->color ;
$size = $namo->size ;
 


if ( strcmp ( $color, '0') == 0  ){
        $facebook_grey = imagecolorallocate($dest, 0, 0, 0); // Create khel color
}
 if ( strcmp ( $color, '2') == 0  ){
     $facebook_grey = imagecolorallocate($dest, 190, 174, 245); // Create grey color

}
if ( strcmp ( $color, '1') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color

}
if ( strcmp ( $color, '3') == 0  ){
$facebook_grey = imagecolorallocate($dest, 18, 34, 249); // Create blue color

}
if ( strcmp ( $color, '4') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 255, 255, 255); // Create BlanchedAlmond color

}
if ( strcmp ( $color, '5') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 86, 59, 254); // Create Purple  color

}



$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest,  $size, 0, $xname, $yname,  $facebook_grey , $font, $ismb); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}

//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}
if(!$this->model_user->get_frtree($insert_id)){




}else{

   $userb ="ami3"; 

         $testo = $this->model_user->get_frtree($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    


 
      $ismc = $Arabic->utf8Glyphs($ismc);
     

copy($tec,$temp_folder.$userb.$user.'.jpg');



if(!$this->model_user->get_frtrnamo($insert_id)){


   


}else{

         $namo = $this->model_user->get_frtrnamo($insert_id);

$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;

$color = $namo->color ;
$size = $namo->size ;

if ( strcmp ( $color, '0') == 0  ){
        $facebook_grey = imagecolorallocate($dest, 0, 0, 0); // Create khel color
}
 if ( strcmp ( $color, '2') == 0  ){
     $facebook_grey = imagecolorallocate($dest, 190, 174, 245); // Create grey color

}
if ( strcmp ( $color, '1') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 154, 13, 0); // Create red color

}
if ( strcmp ( $color, '3') == 0  ){
$facebook_grey = imagecolorallocate($dest, 18, 34, 249); // Create blue color

}
if ( strcmp ( $color, '4') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 255, 255, 255); // Create BlanchedAlmond color

}
if ( strcmp ( $color, '5') == 0  ){
    $facebook_grey = imagecolorallocate($dest, 86, 59, 254); // Create Purple  color

}


if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ismc); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}

//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////

}
if(!$this->model_user->get_fr4($insert_id)){


}else{

   $userb ="amie4"; 

         $testo = $this->model_user->get_fr4($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ism3 = $Arabic->utf8Glyphs($ism3);
     

copy($te3,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnam4($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnam4($insert_id);





$color = $namo->color ;
$size = $namo->size ;


$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ism3); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}

if(!$this->model_user->get_fr5($insert_id)){


}else{

   $userb ="amie5"; 

         $testo = $this->model_user->get_fr5($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ism4 = $Arabic->utf8Glyphs($ism4);
     

copy($te4,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnam5($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnam5($insert_id);





$color = $namo->color ;
$size = $namo->size ;


$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ism4); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}
if(!$this->model_user->get_fr6($insert_id)){


}else{

   $userb ="amie6"; 

         $testo = $this->model_user->get_fr6($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ism5 = $Arabic->utf8Glyphs($ism5);
     

copy($te5,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnam6($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnam6($insert_id);





$color = $namo->color ;
$size = $namo->size ;


$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ism5); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}
if(!$this->model_user->get_fr7($insert_id)){


}else{

   $userb ="amie7"; 

         $testo = $this->model_user->get_fr7($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ism6 = $Arabic->utf8Glyphs($ism6);
     

copy($te6,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnam7($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnam7($insert_id);





$color = $namo->color ;
$size = $namo->size ;


$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ism6); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}
if(!$this->model_user->get_fr8($insert_id)){


}else{

   $userb ="amie8"; 

         $testo = $this->model_user->get_fr8($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ism7 = $Arabic->utf8Glyphs($ism7);
     

copy($te7,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnam4($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnam8($insert_id);





$color = $namo->color ;
$size = $namo->size ;


$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ism7); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}
if(!$this->model_user->get_fr9($insert_id)){


}else{

   $userb ="amie9"; 

         $testo = $this->model_user->get_fr9($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ism8 = $Arabic->utf8Glyphs($ism8);
     

copy($te8,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnam9($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnam9($insert_id);





$color = $namo->color ;
$size = $namo->size ;


$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ism8); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}
if(!$this->model_user->get_fr10($insert_id)){


}else{

   $userb ="amie10"; 

         $testo = $this->model_user->get_fr10($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ism9 = $Arabic->utf8Glyphs($ism9);
     

copy($te9,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnam10($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnam10($insert_id);





$color = $namo->color ;
$size = $namo->size ;


$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ism9); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}


if(!$this->model_user->get_fr11($insert_id)){


}else{

   $userb ="amie11"; 

         $testo = $this->model_user->get_fr11($insert_id);

$x =  $testo->x1;
$y = $testo->y1;
$z = $testo->x2;
$k = $testo->y2;
$w = $testo->w;
 $h = $testo->h;    




      $ism10 = $Arabic->utf8Glyphs($ism10);
     

copy($te10,$temp_folder.$userb.$user.'.jpg');

if(!$this->model_user->get_frnam11($insert_id)){


   


}else{

         $namo = $this->model_user->get_frnam11($insert_id);





$color = $namo->color ;
$size = $namo->size ;


$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

       imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey , $font, $ism10); //Write user id to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
}





//////////////////////////////////////////
 $desta = imagecreatefromjpeg($image_id_png); // source id card image template
    $srca  = imagecreatefromjpeg($temp_folder.$userb.$user.'.jpg'); //facebook user image stored in our temp folder




    
    imagealphablending($desta, false); 
    imagesavealpha($desta, true);

    imagecopymerge($dest, $srca, $x, $y, 0, 0, $w, $h, 100);
imagealphablending($dest, true); 
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

//////////////////////////////////////////////////////////


}
}


if(!$this->model_user->get_tnamo($insert_id)){


   


}else{
         $namo = $this->model_user->get_tnamo($insert_id);
         $namm = $this->model_user->get_namo($insert_id);

$xname = $namo->x;
 $yname = $namo->y; 
$nrro = $namo->squizes_id;


    //imagettftext($dest, $size, 0, 170, 190, $facebook_grey , $font, $txt_user_id); //Write user id to id card
if ( strcmp ( $nrro, $so) == 0  ){

    imagettftext($dest, $size, 0, $xname, $yname, $facebook_grey, $font, $texto); //Write name to id card
    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}


}
if(!$this->model_user->get_age($insert_id)){

   


}else{
         $nag = $this->model_user->get_age($insert_id);

$xage = $nag->x;
 $yage = $nag->y; 
$nrrom = $nag->squizes_id;


$color = $nag->color ;
$size = $nag->size ;
if ( strcmp ( $nrrom, $so) == 0  ){




 $user_pro = $facebook->api('/me?fields=birthday,name,link,email,gender');
$date = $user_pro['birthday'];
$jins = $user_pro['gender'];

$date_arr = explode('/', $date);
$dob = $date_arr[1].'-'.$date_arr[0].'-'.$date_arr[2];
   //   echo $la3mer;

$nhar = $date_arr[1] ;
$chhar = $date_arr[0] ;

    $localtime = getdate();
    $today = $localtime['mday']."-".$localtime['mon']."-".$localtime['year'];
    $dob_a = explode("-", $dob);
    $today_a = explode("-", $today);
    $dob_d = $dob_a[0];$dob_m = $dob_a[1];$dob_y = $dob_a[2];
    $today_d = $today_a[0];$today_m = $today_a[1];$today_y = $today_a[2];
    $years = $today_y - $dob_y;
    $months = $today_m - $dob_m;
    if ($today_m.$today_d < $dob_m.$dob_d) 
    {
        $years--;
        $months = 12 + $today_m - $dob_m;
    }

    if ($today_d < $dob_d) 
    {
        $months--;
    }

    $firstMonths=array(1,3,5,7,8,10,12);
    $secondMonths=array(4,6,9,11);
    $thirdMonths=array(2);

    if($today_m - $dob_m == 1) 
    {
        if(in_array($dob_m, $firstMonths)) 
        {
            array_push($firstMonths, 0);
        }
        elseif(in_array($dob_m, $secondMonths)) 
        {
            array_push($secondMonths, 0);
        }elseif(in_array($dob_m, $thirdMonths)) 
        {
            array_push($thirdMonths, 0);
        }
    }
   $age = $years;

$dkr = "l3mer";
$wld = "male";
$bent = "female";


if ( strcmp ( $type, $dkr) == 0  ){
if ( strcmp ( $jins, $wld) == 0  ){

$age = $age + 2;
    imagettftext($dest, $size, 0, $xage, $yage, $color , $font, $age); //Write user id to id card

 imagealphablending($dest, true); 

    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}
if ( strcmp ( $jins, $bent) == 0  ){

$age = $age - 2;
    imagettftext($dest, $size, 0, $xage, $yage, $color , $font, $age); //Write user id to id card

 imagealphablending($dest, true); 

    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder

}

}else{

    imagettftext($dest, $size, 0, $xage, $yage, $color , $font, $age); //Write user id to id card


 imagealphablending($dest, true); 

    imagejpeg( $dest, $temp_folder.'id_'.$user.'.jpg'); //save id card in temp folder
}}}




    $data['s'] = $user;
    $data['id'] = $so;       

   $this->load->helper('url');
 
    //new users get to see this login button
  $name = str_replace(' ', '_', $txt_user_name);

if (isset($_GET['code'])) {
    header("Location: ./$id/$name/");
  }
 $data['nom'] = $txt_user_name;

$a = "$lo/assets/img/$id/id_";
$b = ".jpg";
$k = "$lo/assets/img/$id/";

    $data['profa'] =  $k.$user.$b ;

    $data['pic'] =  $a.$user.$b ;
    
    $data['link'] =  "$lo/fb/test/$id/?id=$id";


            $data['nomi'] =  $texto ;


    $this->load->view('theme/head1',$data);
      $this->load->view('theme/nav1');


      $this->load->view('result/1',$data);
      $this->load->view('theme/footer');

     
    
    imagedestroy($dest);
    imagedestroy($src);
    }
}

  
    ///////////////////////////////////////////////////////////////



}
}


