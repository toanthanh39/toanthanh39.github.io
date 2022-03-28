<?php
/*
 Template Name: Checkout_detail-page.
 */
get_header();

?>

<style>
    .main-sticket {
        align-items: center;
        justify-content:center;
        
    }
    

    .sticket-detail {
        
        /* min-width:calc(360*4)+'px'; */
        width:1242px;
        display:flex;
        overflow:hidden;
        background:transparent;
        flex-wrap:nowrap;
        justify-content:flex-start;
        
    

    }
    .sticket-detail::-webkit-scrollbar{
       display:none;
    }
    
    .sticket-feature{
        height: 400px;
	    min-width:300px;
        max-width:300px;
        background-color:white;
        box-shadow: 0px 0px 5px #aaa , 0 0 10px #fba  ;
	    margin: 5px;
        -webkit-user-select: none;
    }
    .total_ticket{
        position:absolute;
        z-index: 6001;
        bottom:20px;
        left:5%;
        height:50px;
        width:90%;
        display:flex;
       /* justify-content:space-evenly; */
       justify-content:center;
       align-items:center;
       

    }
    .total_ticket  button{
        margin: 0 20px;
        background:red;
        color:white;
        font-family: 'komi';
        line-height:20px;
        font-size:16pt;
        box-shadow: 0 0 10px rgb(255,0,0,0.5), 0 0 20px rgb(0,0,0,0.3);
        border:none;
        
    }
    .total_ticket p{
        flex:1;
    }
    .total_ticket .down-ticket{
        flex:3;
       
    }
    .total_ticket .down-ticket button{
        cursor: pointer;
    }
    .total_ticket .current-page{
        flex:1;
      
    }
    .overflow-ticket{
        width:auto;
        height:100%;
        display:flex;
        flex-wrap:nowrap;
        justify-content:flex-start;
        background: linear-gradient(0deg, #FF8B2C 1.71%, #FF2D2A 4.22%, #Ffbca3 37.82%, #FF4acc 69.39%, #aa7dd0 96.65%);
    }

   

   

</style>
<?php get_template_part('onload') ?>
<main id="primary" class="site-main">
    <div class="main-content">
        <!-- <div class="content-container">
        </div> -->
        <div class="heading-title">
            <img id="checkout-detail" src="<?php echo get_template_directory_uri();?>/image/Thanh toán thành công.png">    
        </div>
        <div class="main_interaction">
            <div class="post-all main-sticket">
               
                <?php include_once("getsticket.php");?>
               

            </div>
        </div>

    </div>

<!-- <script type="text/javascript">

// $('body').on('click', '.pagination a', function (e) {
//             e.preventDefault();// Không load lại trang khi click phân trang.
//             let url = $(this).attr('href');
//             $.ajax({
//                 url: url,
//                 method: 'GET',
//                 dataType: 'text',
//                 success: function (response) {
//                     $('.panel-table').html(response);
//                     // Thay đổi URL trên website
//                     <strong><em>window</em></strong>.history.pushState({path:url},'',url);
//                 }
//             });
//         });
// </script> -->
</main><!-- #main -->