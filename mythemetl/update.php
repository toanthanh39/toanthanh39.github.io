<?php
require( '../../../wp-load.php' );
    $option1=$_POST["option1"] ;    
   $status=$_POST["status"];
    $id_up=$_POST["idupdate"];


if($option1=="update"){
  
    global $wpdb;      
    $table = $wpdb->prefix . 'ticket';
    $data=array(
        'status'=>$status,
    );
    $update=$wpdb->update(
        $table,
        $data,
        array('id'=> $id_up),
        array('%s')
    );
    if($update){   
        echo 1;
        exit();
    }else{
        echo 0;
        exit();
    }
}
  ?>