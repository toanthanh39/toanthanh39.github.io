<?php
/*
 Template Name: Cticket

 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
    <title>Document</title>
</head>
<style>
    .ticket_all button{
        cursor: pointer;
    }
</style>
<body>
    <div class="ticket_all" id="ttt">
        <?php

         global  $wpdb;
  
         $table  = $wpdb->prefix . 'ticket'; // Bảng cần lấy
         $sql    = "SELECT * FROM {$table} "; //câu sql query
         $data_all   = $wpdb->get_results( $wpdb->prepare($sql), ARRAY_A); 
        //  print_r($data_all)
        $lenght = count($data_all);
        // $date = date('m/d/Y h:i:s a', time());
      
        

// define('CONST_SERVER_TIMEZONE', 'UTC')
        
        ?>
        <table style="width:90%;herght:100%">
            <thead style="background-color:#33CCFF;text-align:center">
                <td>STT</td>
                <td>Mã vé</td>
                <td>Tên khách hàng</td>
                <td>Loại vé</td>
                <td>Số điện thoại</td>
                <td>Email</td>
                <td>Số lượng</td>
                <td>Thành tiền</td>
                <td>Thời gian sử dụng</td>
                <td>Status</td>
                <td>Tool</td>



            </thead>
            
           
                <?php
                    $stt=0;
                   
                    foreach($data_all as $key => $ticket){
                        if($ticket["status"]=="new"){

                        echo"<tr style='text-align:center;background:green;color:white'>";
                        }elseif($ticket["status"]=="old"){
                            echo"<tr style='text-align:center;background:red;color:white'>"; 
                        }
                    ?>
                     
                <td><?php echo $stt++ ?></td>
                <td id="maid"><?php echo $ticket["id"] ?></td>
                <td><?php echo $ticket["name"] ?></td>
                <td><?php echo $ticket["typeticket"] ?></td>
                <td><?php echo $ticket["phone"] ?></td>
                <td><?php echo $ticket["email"] ?></td>
                <td><?php echo $ticket["quantity"] ?></td>
                <td><?php echo number_format($ticket["price"],0,".",".") ?> VND</td>
                <td><?php echo $ticket["date"] ?></td>;              
                <td> 
                       <select name="status" id="<?php echo $ticket["id"] ?>" onchange=statusOnchange(this)>
                        <option selected value="<?php echo $ticket['status'];?>"><?php echo $ticket['status'];?></option>
                        <?php
                            if($ticket["status"]=="new"){
                                echo "<option value='old'>old</option>";
                            }elseif($ticket["status"]=="old"){
                                echo "<option value='new'>new</option>";

                            }
                        ?>
                    
                        </select> 
                           
                </td>
                <td>
                    <button  id="update" style="background:white;color:red" data1="<?php echo $ticket["id"]; ?>">Update</button>   
                    <button id="clear"style="background:white;color:blue" data="<?php echo $ticket["id"]; ?>" id="clear"><ion-icon name="trash-outline"></ion-icon> Clear</button>

                </td>

                        

                         
                        
                       
                    <?php  echo "</tr>";} ?>
                  
                
          
                  
        </table>
        <script type="text/javascript">
            // setTimeout(() => {
            //     console.log("ok");
            //     window.location.href="http://localhost:88/demo/wp-admin/admin.php?page=plugin-options";
            // }, 2000);
        //   statusOnchange =(obj)=>{
        //     var value=obj.valuel;
                   
        //            //    const status2;
        //               console.log(value);
        //  }
        
            function statusOnchange(obj){
                window.value=obj.value;
                   
                //    const status2;
                //    console.log(value);
                
               };
                  ;                        

              
            let update =document.querySelectorAll("#update");
            let clear =document.querySelectorAll("#clear");
            // console.log(clear);
            clear.forEach(id=>{
               
                    id.addEventListener('click',function(e){
                       $(this).attr("data");
                            var id= $(this).attr("data");
                            var option="delete";
                        $.ajax({
                            url: "<?php echo get_template_directory_uri();?>/tool.php",
                            method: "POST",
                            data: {option : option , id: id},
                                success : function(response){
                                if (response == "1") {
                                   alert("Đã xóa vé  " +id);
                                   window.location.reload();
                                    
                                
                                    
                                }else{             
                                    alert("fail");
                                    
                                }
                                
                            }
                           
                        });

                 })
         
               });
               
            update.forEach(up => {
              
               
                up.addEventListener('click',function(status){
                    
                    // console.log(window.value)  ; 
                   
                    var idupdate=$(this).attr("data1");
                    const option1="update";
                    // var status= $("#<?php echo $ticket['id'] ?>").val();
                    if(window.value){
                        var status=window.value;
                    }else{
                        var status=$('#'+idupdate).find(":selected").text();
                        // $('option:selected',this).text();
                    }
                  
                  
                  
                   
                   
                    $.ajax({
                            url: "<?php echo get_template_directory_uri();?>/update.php",
                            method: "POST",
                            data: {option1 : option1 , idupdate: idupdate, status : status},
                                success : function(response){
                                if (response == "1") {
                                   alert("Sửa thành công  " +idupdate);
                                   window.location.reload();
                                   
                                
                                    
                                }else{             
                                    alert("fail");
                                    

                                    // alert(idupdate);
                                //    window.location.reload();


                                }
                                
                            }
                           
                        });
                })
            
            });
            
        </script>
    </div>
</body>

</html>
    