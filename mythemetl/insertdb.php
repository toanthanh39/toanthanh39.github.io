<?php
session_start();

//  Insert database ticket.
    $ve1= (isset($_SESSION["ve"]))? $_SESSION["ve"]:[];
    $totalP=(isset($_SESSION["totalprice"]))? $_SESSION["totalprice"]:null;
   
    $data=array();
	 
   require( '../../../wp-load.php' );
             
    $data = [
        'name' => $ve1['name'],
        'typeticket' => $ve1['loai'],
        'price' =>$totalP,
        'quantity'=>$ve1['quantity'],
        'email' =>$ve1['email'],
        'phone' =>$ve1['sdt'],
        'date' =>$ve1['date'],
        'status'=>'new'
    ];
    
            
    
     
      global $wpdb;
      $table = $wpdb->prefix . 'ticket';
      $wpdb->insert(
          $table,
          $data
      );
 
      $ticket = $wpdb->insert_id;

      
    header("location:checkout-detail") ;
      
    


?>