<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
//include the facebook.php from libraries directory
 
class Sqadmin extends CI_Controller {
 
public function __construct() {
parent::__construct();


$this->load->model('model_user');
    $this->load->dbforge(); 
    

if (!$this->session->userdata('email')) {
  $this->session->set_flashdata('error','il faut se connecter pour acceder à cette page( test de session)');
redirect('logadmin/index');

} 

$this->load->helper('url');

}
public function index($page='index') {
//$this->load->view('head');
     // $data['title'] = $page;
    $data['quiz'] = $this->model_user->get_all_test();

    $data['yser'] = $this->model_user->get_all_users();

   $this->load->helper('url');
    if( !file_exists('application/views/admin/pages/'.$page.'.php')){

      show_404();
    }
    //new users get to see this login button
         $data['title'] = $page;
   $data['cpa'] = $this->model_user->get_all_cpa();


   $data['conf'] = $this->model_user->get_all_conf();
   $data['confi'] = $this->model_user->get_all_confi();

   $data['ads'] = $this->model_user->get_all_ads();
   $data['pro'] = $this->model_user->get_all_pro();

    $this->load->view('admin/theme/head',$data);
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/'.$page,$data);
      $this->load->view('admin/theme/footer');
//$this->load->view('footer');
}
 


public function friend(){

    $this->form_validation->set_rules('na', 'na', 'required');

    $this->form_validation->set_rules('num', 'num', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/add_phofr');
            $this->load->view('admin/theme/footer');
    } else {
$data['num'] = $_POST["num"];
$data['na'] = $_POST["na"]; 

    $this->load->view('admin/theme/head',$data);
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/poss_onefr',$data);
      $this->load->view('admin/theme/footer');


}



}



public function friends(){

    $this->form_validation->set_rules('na', 'na', 'required');

    $this->form_validation->set_rules('num', 'num', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/add_nmfr');
            $this->load->view('admin/theme/footer');
    } else {
$data['num'] = $_POST["num"];
$data['na'] = $_POST["na"]; 

    $this->load->view('admin/theme/head',$data);
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/name_onefr',$data);
      $this->load->view('admin/theme/footer');




}

}

public function create_quiz(){

  
    //form validation sebelum mengeksekusi QUERY INSERT
    $this->form_validation->set_rules('titre', 'titre', 'required');
    $this->form_validation->set_rules('description', 'description', 'required');
    $this->form_validation->set_rules('etat', 'etat', 'required');
    $this->form_validation->set_rules('type', 'type', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/ajouter');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library
      $this->load->model('model_user');

         $insert_id  = $this->model_user->get_last(); 


        ////////////////////////////////////////////////:
$s = $insert_id->id;
$a = "./assets/img/";
$b =  $s+1;

if (!file_exists("$a$b")) {

$oldumask = umask(0);

    mkdir("$a$b", 0777, true);
umask($oldumask); 

}

//mkdir("$a$b", 0777, true);
chmod("$a$b", 0777);

if($_POST)
{ 
date_default_timezone_set('Africa/Lagos');	

$date = date("Y-m-d H:i:s");


 $myFile7 = $_FILES['file'];
      move_uploaded_file($_FILES['file']['tmp_name'], "./assets/img/$b/" . $_FILES['file']['name']); 


             $myFile1 = $_FILES['file6'];
      move_uploaded_file($_FILES['file6']['tmp_name'], "./assets/img/$b/" . $_FILES['file6']['name']); 

                $myFile2 = $_FILES['file1'];
      move_uploaded_file($_FILES['file1']['tmp_name'], "./assets/img/$b/" . $_FILES['file1']['name']); 
       $myFile3 = $_FILES['file2'];
      move_uploaded_file($_FILES['file2']['tmp_name'], "./assets/img/$b/" . $_FILES['file2']['name']); 

 $myFile = $_FILES['file3'];
      move_uploaded_file($_FILES['file3']['tmp_name'], "./assets/img/$b/" . $_FILES['file3']['name']); 

 $myFile4 = $_FILES['file4'];
      move_uploaded_file($_FILES['file4']['tmp_name'], "./assets/img/$b/" . $_FILES['file4']['name']); 
$myFile5 = $_FILES['file5'];
      move_uploaded_file($_FILES['file5']['tmp_name'], "./assets/img/$b/" . $_FILES['file5']['name']); 


 
///////////////////////////////////////////////////:
   
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'titre'      => set_value('titre'),
          'description' => set_value('description'),
          'etat'     => set_value('etat'),
          'result1'     => set_value('type'),
                    'date'     => $date,

          'background'     => $_FILES['file']['name'],
          'backgroundm'     => $_FILES['file1']['name'],
          'bc1'     => $_FILES['file2']['name'],
          'bc2'     => $_FILES['file3']['name'],
          'bc3'     => $_FILES['file4']['name'],
          'imagetest'     => $_FILES['file6']['name'],
          'bc4'     => $_FILES['file5']['name']

        );
        $this->model_user->create_quiz($data_product);
        redirect('sqadmin/index/allquiz');
     
      
    }
  }}


public function create_onefrnm(){

  //form validation sebelum mengeksekusi QUERY INSERT
    $this->form_validation->set_rules('na', 'na', 'required');
    $this->form_validation->set_rules('color', 'color', 'required');
  $this->form_validation->set_rules('size', 'size', 'required');

    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/name_onefr');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library
      $this->load->model('model_user');

 $color=$_POST['color'];
       $size=$_POST['size'];
      $num = $_POST["num"]; 

$name = $_POST["na"]; 

       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
      



      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'x'      => $x,
          'y' => $y,
          'color'     => $color,
          'size'     => $size,
           'squizes_id'     => $name
          
        );
        $this->model_user->create_onefrnm($data_product,$num);






           redirect('sqadmin/index/all_frname');

     }
      
    }


public function create_towfrnm(){

  //form validation sebelum mengeksekusi QUERY INSERT
    $this->form_validation->set_rules('na', 'na', 'required');
      $this->form_validation->set_rules('color', 'color', 'required');
  $this->form_validation->set_rules('size', 'size', 'required');

    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/name_towfr');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library
      $this->load->model('model_user');
 $color=$_POST['color'];
       $size=$_POST['size'];
      

$name = $_POST["na"]; 

       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
      



      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'x'      => $x,
          'y' => $y,
          'color'     => $color,
          'size'     => $size,
           'squizes_id'     => $name
          
        );
        $this->model_user->create_towfrnm($data_product);






           redirect('sqadmin/index/all_frname');

     }
      
    }



public function create_treefrnm(){

  //form validation sebelum mengeksekusi QUERY INSERT
    $this->form_validation->set_rules('na', 'na', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/name_treefr');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library
      $this->load->model('model_user');


$name = $_POST["na"]; 

       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
       $color=$_POST['color'];
       $size=$_POST['size'];
      



      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'x'      => $x,
          'y' => $y,
          'color'     => $color,
          'size'     => $size,
           'squizes_id'     => $name
          
        );
        $this->model_user->create_treefrnm($data_product);






           redirect('sqadmin/index/all_frname');

     }
      
    }
public function create_onefr(){

  //form validation sebelum mengeksekusi QUERY INSERT
    $this->form_validation->set_rules('na', 'na', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/poss_onefr');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library
      $this->load->model('model_user');


$name = $_POST["na"]; 
$numro = $_POST["numro"]; 

       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
       $xx=$_POST['sEditorX2pos'];
       $yy=$_POST['sEditorY2pos'];
       $w=$_POST['sEditorWidthpos'];
       $h=$_POST['sEditorHeightpos'];




      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'x1'      => $x,
          'y1' => $y,
          'x2'     => $xx,
          'y2'     => $yy,
          'w'     => $w,
          'h'     => $h,
        'squizes_id'     => $name
          
        );
        $this->model_user->create_onefr($data_product,$numro);






           redirect('sqadmin/index/all_frphotos');

     }
      
    }
public function create_towfr(){

  //form validation sebelum mengeksekusi QUERY INSERT
    $this->form_validation->set_rules('na', 'na', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/poss_towfr');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library
      $this->load->model('model_user');


$name = $_POST["na"]; 

       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
       $xx=$_POST['sEditorX2pos'];
       $yy=$_POST['sEditorY2pos'];
       $w=$_POST['sEditorWidthpos'];
       $h=$_POST['sEditorHeightpos'];




      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'x1'      => $x,
          'y1' => $y,
          'x2'     => $xx,
          'y2'     => $yy,
          'w'     => $w,
          'h'     => $h,
        'squizes_id'     => $name
          
        );
        $this->model_user->create_towfr($data_product);






           redirect('sqadmin/index/all_frphotos');

     }
      
    }
public function create_treefr(){

  //form validation sebelum mengeksekusi QUERY INSERT
    $this->form_validation->set_rules('na', 'na', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/poss_treefr');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library
      $this->load->model('model_user');


$name = $_POST["na"]; 

       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
       $xx=$_POST['sEditorX2pos'];
       $yy=$_POST['sEditorY2pos'];
       $w=$_POST['sEditorWidthpos'];
       $h=$_POST['sEditorHeightpos'];




      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'x1'      => $x,
          'y1' => $y,
          'x2'     => $xx,
          'y2'     => $yy,
          'w'     => $w,
          'h'     => $h,
        'squizes_id'     => $name
          
        );
        $this->model_user->create_treefr($data_product);






           redirect('sqadmin/index/all_frphotos');

     }
      
    }

  
public function create_type(){

  //form validation sebelum mengeksekusi QUERY INSERT
    $this->form_validation->set_rules('na', 'na', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/ajouter_typ');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library
      $this->load->model('model_user');


$name = $_POST["na"]; 

       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
       $xx=$_POST['sEditorX2pos'];
       $yy=$_POST['sEditorY2pos'];
       $w=$_POST['sEditorWidthpos'];
       $h=$_POST['sEditorHeightpos'];




      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'x1'      => $x,
          'y1' => $y,
          'x2'     => $xx,
          'y2'     => $yy,
          'w'     => $w,
          'h'     => $h,
        'squizes_id'     => $name
          
        );
        $this->model_user->create_type($data_product);






           redirect('sqadmin/index/all_pos_photos');

     }
      
    }

  



  public function create_name(){

  $this->form_validation->set_rules('na', 'na', 'required');
  $this->form_validation->set_rules('color', 'color', 'required');
  $this->form_validation->set_rules('size', 'size', 'required');


    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/ajoute_type');
            $this->load->view('admin/theme/footer');
    } else {
      //load uploading file library

       $color=$_POST['color'];
       $size=$_POST['size'];


       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
      


      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'color'      => $color,
          'size'      => $size,

          'x'      => $x,
          'y' => $y,
          'squizes_id' => set_value('na')

          
        );
        $this->model_user->create_name($data_product);





           redirect('sqadmin/index/all_types_name');
    
 }
    
      
    }
  
  
public function create_age(){

  $this->form_validation->set_rules('na', 'na', 'required');
 $this->form_validation->set_rules('color', 'color', 'required');
  $this->form_validation->set_rules('size', 'size', 'required');


    if ($this->form_validation->run() == FALSE)
    {

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/ajoute_age');
            $this->load->view('admin/theme/footer');
    } else {

 $color=$_POST['color'];
       $size=$_POST['size'];


       $x=$_POST['sEditorXpos'];
       $y=$_POST['sEditorYpos'];
      


      $this->load->model('model_user');

        
        //file berhasil diupload -> lanjutkan ke query INSERT
        // eksekusi query INSERT
        $data_product = array(
          'x'      => $x,
          'y' => $y,
          'color' => $color,
          'size' => $size,

          'squizes_id' => set_value('na')

          
        );
        $this->model_user->create_age($data_product);





           redirect('sqadmin/index/all_type_age');
    
 }
    
      
    }
  
  public function update_quiz($id){
    $this->form_validation->set_rules('titre', 'titre', 'required');
    $this->form_validation->set_rules('description', 'Product Description', 'required');
    $this->form_validation->set_rules('etat', 'etat', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $data['product'] = $this->model_user->get_test($id);


    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/form_edit_quiz', $data);
      $this->load->view('admin/theme/footer');
    } else {
 if($_POST)
{ 



 $myFile2 = $_FILES['userfile1'];

 $myFile7 = $_FILES['userfile'];

      if(move_uploaded_file($_FILES['userfile1']['tmp_name'], "./assets/img/" .$id."/". $_FILES['userfile1']['name'])){


    $data_product = array(
            'titre'      => set_value('titre'),
            'description' => set_value('description'),
            'etat'     => set_value('etat'),
            'background'     => $_FILES['userfile1']['name']
          );
          $this->model_user->update_quiz($id, $data_product);
          redirect('sqadmin/index/allquiz');
        }

      if(move_uploaded_file($_FILES['userfile']['tmp_name'], "./assets/img/" .$id."/". $_FILES['userfile']['name'])){

          $data_product = array(
            'titre'      => set_value('titre'),
            'description' => set_value('description'),
            'etat'     => set_value('etat'),
            'imagetest'     => $_FILES['userfile']['name']
          );
          $this->model_user->update_quiz($id, $data_product);
          redirect('sqadmin/index/allquiz');
        }
      } else {
        //form submit dengan gambar dikosongkan
        $data_product = array(
          'titre'      => set_value('titre'),
          'description' => set_value('description'),
          'etat'     => set_value('etat')
        );
        $this->model_user->update_quiz($id, $data_product);
        redirect('sqadmin/index/allquiz');
      }
    }
  }
 public function update_conf($id){
    $this->form_validation->set_rules('appid', 'appid', 'required');
    $this->form_validation->set_rules('secret', 'secret', 'required');
    $this->form_validation->set_rules('pagefb', 'pagefb', 'required');

    if ($this->form_validation->run() == FALSE)
    {

          $data['product'] = $this->model_user->get_confi($id);

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/editconf', $data);
      $this->load->view('admin/theme/footer');
    } else {
      if($_POST)
{ 




 $myFile7 = $_FILES['file'];
      if(move_uploaded_file($_FILES['file']['tmp_name'], "./assets/logo/" . $_FILES['file']['name'])){
 
 $data_product = array(
          'id_ap'      => set_value('appid'),
          'secret' => set_value('secret'),

          'page_fb'     => set_value('pagefb'),
          'logo'     => $_FILES['file']['name']

        );
} else{

   $data_product = array(
          'id_ap'      => set_value('appid'),
          'secret' => set_value('secret'),

          'page_fb'     => set_value('pagefb')
        );



}


    
        $this->model_user->update_conf($id, $data_product);
        redirect('sqadmin/index/conf');
      }
    }
  }


public function update_conf1($id){
    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('description', 'description', 'required');
    $this->form_validation->set_rules('seo', 'seo', 'required');

    if ($this->form_validation->run() == FALSE)
    {

          $data['product'] = $this->model_user->get_confi1($id);

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/editconf1', $data);
      $this->load->view('admin/theme/footer');
    } else {
      if($_POST)
{ 




 $myFile7 = $_FILES['file'];
      if(move_uploaded_file($_FILES['file']['tmp_name'], "./assets/images/" . $_FILES['file']['name'])){
 
 $data_product = array(
          'title'      => set_value('title'),
          'description' => set_value('description'),

          'seo'     => set_value('seo'),
          'icon'     => $_FILES['file']['name']

        );
} else{

   $data_product = array(
          'title'      => set_value('title'),
          'description' => set_value('description'),

          'seo'     => set_value('seo')
          );



}


    
        $this->model_user->update_conf1($id, $data_product);
        redirect('sqadmin/index/conf');
      }
    }
  }

public function update_cpa($id){
    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('description', 'description', 'required');
    $this->form_validation->set_rules('etat', 'etat', 'required');

    if ($this->form_validation->run() == FALSE)
    {

          $data['product'] = $this->model_user->get_cpa($id);

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/editcpa', $data);
      $this->load->view('admin/theme/footer');
    } else {
      if($_POST)
{ 




 $myFile7 = $_FILES['file'];
      if(move_uploaded_file($_FILES['file']['tmp_name'], "./assets/cpa/" . $_FILES['file']['name'])){



 


        $data_product = array(
          'title'      => set_value('title'),
          'description' => set_value('description'),
          'img'     => $_FILES['file']['name'],

          'etat'     => set_value('etat')
        );

}else{

        $data_product = array(
          'title'      => set_value('title'),
          'description' => set_value('description'),

          'etat'     => set_value('etat')
        );
}

        $this->model_user->update_cpa($id, $data_product);
        redirect('sqadmin/index/cpa');
      }
    }
  }
   public function update_ads($id){
    $this->form_validation->set_rules('client', 'client', 'required');
    $this->form_validation->set_rules('slot', 'slot', 'required');
    $this->form_validation->set_rules('etat', 'etat', 'required');

    if ($this->form_validation->run() == FALSE)
    {

          $data['product'] = $this->model_user->get_ads($id);

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/editads', $data);
      $this->load->view('admin/theme/footer');
    } else {
    

        $data_product = array(
          'client'      => set_value('client'),
          'slot' => set_value('slot'),
                    'etat' => set_value('etat'),

        );
        $this->model_user->update_ads($id, $data_product);
        redirect('sqadmin/index/ads');
      }
  
  }
  

public function update_profile($id){
    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('email', 'email',  'required|valid_email');
    $this->form_validation->set_rules('password', 'password', 'required');

    if ($this->form_validation->run() == FALSE)
    {

          $data['product'] = $this->model_user->get_pro($id);

    $this->load->view('admin/theme/head');
      $this->load->view('admin/theme/nav');
      $this->load->view('admin/pages/editpro', $data);
      $this->load->view('admin/theme/footer');
    } else {
$pass = set_value('password');
        $cryptKey  = 'qJB0rGtIn5UB452jkhk65KMV61xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $pass, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        $data_product = array(
          'name'      => set_value('name'),
          'email' => set_value('email'),
                    'password' => $qEncoded,

        );
        $this->model_user->update_profile($id, $data_product);
        redirect('sqadmin/index/profile');
      }
  
  }
  


public function delete_user($id){
    $this->model_user->delete_user($id);
    redirect('sqadmin/index/alluser');
  }

public function delete_age($id){
    $this->model_user->delete_age($id);
    redirect('sqadmin/index/all_type_age');
  } 
public function delete_photo($id){
    $this->model_user->delete_photo($id);
    redirect('sqadmin/index/all_pos_photos');
  } 

public function delete_frname($id){
    $this->model_user->delete_frname($id);
    redirect('sqadmin/index/all_frname');
  }
public function delete_frnam($id){
    $this->model_user->delete_frnam($id);
    redirect('sqadmin/index/all_frname');
  }
public function delete_frna($id){
    $this->model_user->delete_frna($id);
    redirect('sqadmin/index/all_frname');
  }
public function delete_frphotos($id){
    $this->model_user->delete_frphotos($id);
    redirect('sqadmin/index/all_frphotos');
  }

public function delete_frphoto($id){
    $this->model_user->delete_frphoto($id);
    redirect('sqadmin/index/all_frphotos');
  }
public function delete_frphot($id){
    $this->model_user->delete_frphot($id);
    redirect('sqadmin/index/all_frphotos');
  }
public function delete_name($id){
    $this->model_user->delete_name($id);
    redirect('sqadmin/index/all_types_name');
  } 

public function delete_quiz($id){
    $this->model_user->delete_quiz($id);
    redirect('sqadmin/index/allquiz');
  }
}