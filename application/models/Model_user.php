<?php 

class Model_user extends CI_Model {

/////////////////////////////////////////////////////////////////////:

  public function get_all_test(){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')

              ->get();
    return $hasil;
  }

  public function get_all_testrand(){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'RANDOM')

              ->get();
    return $hasil;
  }
/////////////////////////////////////////////////////////////////////:
  public function get_all_users(){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('user u')
               ->order_by('id', 'DESC')

                                 
              ->get();
    return $hasil;
  }

/////////////////////////////////////////////////////////////////////////
  public function get_all_testadd(){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
              ->where('etat', 'enable')

                                 
              ->get();
    return $hasil;
  }
//////////////////////////////////////////////////////////////////////////////
  public function get_all_testlimit($initial,$depart){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
               ->limit($initial,$depart)
              ->where('etat', 'enable')

                                // ->join('type n', 'u.id = n.squizes_id')
                                // ->join('name m', 'u.id = m.squizes_id')

              ->get();
    return $hasil;
  }
///////////////////////////////////////////////////////////////////
  public function get_all_types(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('age a', 'u.id = a.squizes_id')

                               

              ->get();
    return $hasil;
  }
////////////////////////////////////////////////////////////////////
public function get_all_name(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name m', 'u.id = m.squizes_id')

                               
              ->get();
    return $hasil;
  }
////////////////////////////////////////////////////////////////////
public function get_all_frname(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr1 j', 'u.id = j.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_frphotos(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
                                 ->join('fr1 j', 'u.id = j.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_frphoto(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
                                 ->join('fr2 k', 'u.id = k.squizes_id')

                               
              ->get();
    return $hasil;
  }

public function get_all_frnam(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
                                 ->join('name_fr2 k', 'u.id = k.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_frphot(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
                                 ->join('fr3 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }

public function get_all_frna(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr3 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_fr4(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr4 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_fr5(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr5 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_fr6(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr6 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_fr7(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr7 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_fr8(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr8 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_fr9(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr9 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_fr10(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr10 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
public function get_all_fr11(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('name_fr11 l', 'u.id = l.squizes_id')

                               
              ->get();
    return $hasil;
  }
////////////////////////////////////////////////////////////////////


public function get_all_photos(){

        $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                                 ->join('type n', 'u.id = n.squizes_id')

                               /*  ->join('type n', 'u.id = n.squizes_id')
                                 ->join('name_fr1 f', 'u.id = f.squizes_id')
                                 ->join('name_fr2 r', 'u.id = r.squizes_id')
                                 ->join('name_fr3 h', 'u.id = h.squizes_id')
                                 ->join('fr1 j', 'u.id = j.squizes_id')
                                 ->join('fr2 k', 'u.id = k.squizes_id')
                                 ->join('fr3 l', 'u.id = l.squizes_id')*/

              ->get();
    return $hasil;
  }
////////////////////////////////////////////////////////////////////

  public function get_all_pro(){
    
    $hasil = $this->db->select('*')
              ->from('utilisateur')
                                                  ->order_by('id', 'DESC')
              ->get();
    return $hasil;
  }

 
//////////////////////////////////////////////////////////////////

  public function get_all_ads(){
    
    $hasil = $this->db->select('*')
              ->from('ads')
                                                  ->order_by('id', 'DESC')
              ->get();
    return $hasil;
  }


  public function get_all_cpa(){
    
    $hasil = $this->db->select('*')
              ->from('cpa')
                                                  ->order_by('id', 'DESC')
              ->get();
    return $hasil;
  }


  public function get_all_conf(){
    
    $hasil = $this->db->select('*')
              ->from('conf')
                                                  ->order_by('id', 'DESC')
              ->get();
    return $hasil;
  }
  public function get_all_confi(){
    
    $hasil = $this->db->select('*')
              ->from('confi')
                                                  ->order_by('id', 'DESC')
              ->get();
    return $hasil;
  }
  public function get_all_tests(){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('squizes u')
               ->order_by('id', 'DESC')
                              //  ->join('type n', 'u.id = n.squizes_id')

              ->get();
    return $hasil;
  }
public function get_tree_testi(){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('squizes')
                          ->limit(3)
              ->order_by('id', 'DESC')
              ->get();

    return $hasil;
  }

  public function get_tree_test(){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('squizes')
                          ->limit(3)
              ->order_by('id', 'RANDOM')
              ->get();

    return $hasil;
  }

  public function get_trs(){
    // "SELECT * FROM users u JOIN profiles p ON p.user_id = u.id"
    //$hasil = $this->db->get('users');
    //$hasil = $this->db->query("SELECT * FROM users u JOIN profiles p ON p.user_id = u.id");
    $hasil = $this->db->select('*')
              ->from('squizes')
                          ->limit(4)
              ->order_by('id', 'RANDOM')
              ->get();

    return $hasil;
  }

  /*::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

  public function cek_user_pass($email,$password){

         // SELECT * FROM users WHERE username = $username & $password


    $hasil = $this->db->where('email',$email)
                    ->where('password',$password)

                    ->limit(1)
                    ->get('utilisateur'); 
  
if ($hasil->num_rows() > 0) {
  # code...
  return $hasil->row();
} else {

  return false;
  }
}


  public function cek_id($id){



    $hasil = $this->db->where('id',$id)

                    ->limit(1)
                    ->get('squizes'); 
  
if ($hasil->num_rows() > 0) {
  # code...
  return $hasil->row();
} else {

  return false;
  }
}

//////////////////////////////////////////////////////////////



public function get_one_user($id){
    $this->db->where('idfb',$id);
    $query = $this->db->get('user');
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
}

////////////////////////////////////////////////

  public function get_friendo($id){



    $hasil = $this->db->where('id',$id)

                    ->limit(1)
                    ->get('user'); 
  
if ($hasil->num_rows() > 0) {
  # code...
  return $hasil->row();
} else {

  return false;
  }
}


///////////////////////////////////////////////////////////////:
  public function create_quiz($data_user){

    
    
    $this->db->insert('squizes',$data_user);


                      

  }

public function insert_users($id,$data){
    $this->db->where('id', $id);

$this->db->update('squizes', $data); 


  }

public function create_onefr($data_user,$numro){

    if($numro == 1){
    
    $this->db->insert('fr1',$data_user);

}else if($numro == 2){
                       $this->db->insert('fr2',$data_user);
   }else if($numro == 3){
                       $this->db->insert('fr3',$data_user);
   }else if($numro == 4){
                       $this->db->insert('fr4',$data_user);
   }else if($numro == 5){
                       $this->db->insert('fr5',$data_user);
   }else if($numro == 6){
                       $this->db->insert('fr6',$data_user);
   }else if($numro == 7){
                       $this->db->insert('fr7',$data_user);
   }else if($numro == 8){
                       $this->db->insert('fr8',$data_user);
   }else if($numro == 9){
                       $this->db->insert('fr9',$data_user);
   }else if($numro == 10){
                       $this->db->insert('fr10',$data_user);
    }else if($numro == 11){
                       $this->db->insert('fr11',$data_user);
   }


  }

public function create_treefrnm($data_user){

    
    
    $this->db->insert('name_fr3',$data_user);


                      

  }
public function create_towfrnm($data_user){

    
    
    $this->db->insert('name_fr2',$data_user);


                      

  }
public function create_onefrnm($data_user,$num){

    
    if($num == 1){
    $this->db->insert('name_fr1',$data_user);
}else if($num == 2){
    $this->db->insert('name_fr2',$data_user);
}else if($num == 3){
    $this->db->insert('name_fr3',$data_user);
}else if($num == 4){
    $this->db->insert('name_fr4',$data_user);
}else if($num == 5){
    $this->db->insert('name_fr5',$data_user);
}else if($num == 6){
    $this->db->insert('name_fr6',$data_user);
}else if($num == 7){
    $this->db->insert('name_fr7',$data_user);
}else if($num == 8){
    $this->db->insert('name_fr8',$data_user);
}else if($num == 9){
    $this->db->insert('name_fr9',$data_user);
}else if($num == 10){
    $this->db->insert('name_fr10',$data_user);
 
 }else if($num == 11){
    $this->db->insert('name_fr11',$data_user);
} 

  }
public function create_towfr($data_user){

    
    
    $this->db->insert('fr2',$data_user);


                      

  }
public function create_treefr($data_user){

    
    
    $this->db->insert('fr3',$data_user);


                      

  }
public function create_type($data_user){

    
    
    $this->db->insert('type',$data_user);


                      

  }

public function insert($data_user){

    
    
    $this->db->insert('user',$data_user);


                      

  }
public function create_name($data_user){

    
    
    $this->db->insert('name',$data_user);


                      

  }

public function create_age($data_user){

    
    
    $this->db->insert('age',$data_user);


                      

  }

public function get_users($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_last(){
    //Query mencari record berdasarkan ID-nya

       
                  $hasil = $this->db->select_max('id')
                                    ->limit(1)
                          ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }



public function get_adsi(){
  $hasil = $this->db->select('*')
              ->from('ads')
              ->get();
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }





public function get_cpi(){
  $hasil = $this->db->select('*')
              ->from('cpa')
              ->get();
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }



public function get_pos(){
  $hasil = $this->db->select('*')
              ->from('utilisateur')
              ->get();
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_conf(){
  $hasil = $this->db->select('*')
              ->from('conf')
              ->get();
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_con(){
  $hasil = $this->db->select('*')
              ->from('confi')
              ->get();
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_tnamo($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_frnamo($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr1 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_frnam2($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr2 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_frnam3($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr3 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_frnam4($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr4 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }


public function get_frnam5($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr5 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_frnam6($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr6 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_frnam7($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr7 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }


public function get_frnam8($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr8 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_frnam9($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr9 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_frnam10($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr10 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_frnam11($id){

    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr11 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_frtonamo($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr2 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_frtrnamo($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('name_fr3 m', 'u.id = m.squizes_id')

                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_frone($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr1 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_fr4($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr4 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_fr5($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr5 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_fr6($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr6 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_fr7($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr7 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_fr8($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr8 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_fr9($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr9 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_fr10($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr10 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_fr11($id){

    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)

                            ->get('fr11 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_frto($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)
               // ->join('name m', 'u.id = m.squizes_id')

                            ->get('fr2 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_frtree($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)
               // ->join('name m', 'u.id = m.squizes_id')

                            ->get('fr3 u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_namo($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('idname', $id)
                      ->limit(1)
               // ->join('name m', 'u.id = m.squizes_id')

                            ->get('name u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_age($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('squizes_id', $id)
                      ->limit(1)
               // ->join('name m', 'u.id = m.squizes_id')

                            ->get('age u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }




public function get_teste($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                ->join('type n', 'u.id = n.squizes_id')
                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_test($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
               // ->join('type n', 'u.id = n.squizes_id')
                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_confi($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                            ->get('conf u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
public function get_confi1($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                            ->get('confi u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_cpa($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                            ->get('cpa u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_usea($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('idfb', $id)
                      ->limit(1)
                            ->get('user u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }


public function get_ads($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                            ->get('ads u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }

public function get_pro($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                            ->get('utilisateur u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }


  public function get_testo($id){
    //Query mencari record berdasarkan ID-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1)
                            ->get('squizes u');
    if($hasil->num_rows() > 0){ 
      return $hasil->row();
    } else {
      return array();
    }
  }
  

  public function delete_quiz($id){
    //DELETE FROM users WHERE id = $id;
    // DELETE FROM profiles WHERE user_id = $id;

    
     $this->db->delete('age', array('squizes_id' => $id));
     $this->db->delete('name', array('squizes_id' => $id));
     $this->db->delete('type', array('squizes_id' => $id));
     $this->db->delete('fr1', array('squizes_id' => $id));
     $this->db->delete('fr2', array('squizes_id' => $id));
     $this->db->delete('fr3', array('squizes_id' => $id));
$this->db->delete('fr4', array('squizes_id' => $id));
$this->db->delete('fr5', array('squizes_id' => $id));
$this->db->delete('fr6', array('squizes_id' => $id));
$this->db->delete('fr7', array('squizes_id' => $id));
$this->db->delete('fr8', array('squizes_id' => $id));
$this->db->delete('fr9', array('squizes_id' => $id));
$this->db->delete('fr10', array('squizes_id' => $id));
$this->db->delete('fr11', array('squizes_id' => $id));
     $this->db->delete('name_fr1', array('squizes_id' => $id));
     $this->db->delete('name_fr2', array('squizes_id' => $id));
     $this->db->delete('name_fr3', array('squizes_id' => $id));
     $this->db->delete('name_fr4', array('squizes_id' => $id));
     $this->db->delete('name_fr5', array('squizes_id' => $id));
     $this->db->delete('name_fr6', array('squizes_id' => $id));
     $this->db->delete('name_fr7', array('squizes_id' => $id));
     $this->db->delete('name_fr8', array('squizes_id' => $id));
     $this->db->delete('name_fr9', array('squizes_id' => $id));
     $this->db->delete('name_fr10', array('squizes_id' => $id));
     $this->db->delete('name_fr11', array('squizes_id' => $id));

 $this->db->delete('squizes', array('id' => $id));


  } 
  public function delete_name($id){
    
     $this->db->delete('name', array('idname' => $id));


  } 
 public function delete_frname($id){
    
     $this->db->delete('name_fr1', array('idname' => $id));


  }
 public function delete_frnam($id){
    
     $this->db->delete('name_fr2', array('idname' => $id));


  }
 public function delete_frna($id){
    
     $this->db->delete('name_fr3', array('idname' => $id));


  }

 public function delete_frphotos($id){
    
     $this->db->delete('fr1', array('id' => $id));


  }
 public function delete_frphoto($id){
    
     $this->db->delete('fr2', array('id' => $id));


  }
 public function delete_frphot($id){
    
     $this->db->delete('fr3', array('id' => $id));


  }
 public function delete_photo($id){
    
     $this->db->delete('type', array('id_type' => $id));


  }
  public function delete_age($id){
    
     $this->db->delete('age', array('idage' => $id));


  } 
  public function delete_user($id){
    //DELETE FROM users WHERE id = $id;
    // DELETE FROM profiles WHERE user_id = $id;

     $this->db->delete('user', array('id' => $id));


  } 
public function get_one_test(){
    $hasil = $this->db->select('*')
              ->from('squizes')
                          ->limit(1)
              ->order_by('id', 'RANDOM')
              ->get();

    return $hasil;
  }


public function update_quiz($id, $data_products){
    //Query UPDATE FROM ... WHERE id=...
    $this->db->where('id', $id)
         ->update('squizes', $data_products);
  }
  
public function update_conf($id, $data_products){
    $this->db->where('id', $id)
         ->update('conf', $data_products);
  }
public function update_conf1($id, $data_products){
    $this->db->where('id', $id)
         ->update('confi', $data_products);
  }


  public function update_cpa($id, $data_products){
    $this->db->where('id', $id)
         ->update('cpa', $data_products);
  }
public function update_ads($id, $data_products){
    $this->db->where('id', $id)
         ->update('ads', $data_products);
  }

public function update_profile($id, $data_products){
    $this->db->where('id', $id)
         ->update('utilisateur', $data_products);
  }

///////////////////////////////////////////////////////////:
}
